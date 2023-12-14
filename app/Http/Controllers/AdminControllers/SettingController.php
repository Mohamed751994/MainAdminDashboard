<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainRequest;
use App\Models\Setting;
use App\Services\CrudService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    protected $views = 'settings';
    protected $crudService;
    public function __construct(CrudService $crudService)
    {
        $this->crudService = $crudService;
    }

    public function index()
    {
        return $this->crudService->index(Setting::class,$this->views);
    }

    public function create()
    {
        return $this->crudService->create($this->views);
    }

    public function store(MainRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = $request->validated();
            if($data['input_type'] == 'file')
            {
                if ($request->hasFile('value')) {
                    $data['value'] = $this->uploadFileTrait($request, 'value', 'uploads/');
                }
            }
            $data['key'] = str_replace(' ', '_', $data['key']);
            Setting::create($data);
            DB::commit();
            toastr()->success($this->insertMsg, 'success', ['timeOut' => 8000]);
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            return $th;
        }
    }

    public function show(Setting $setting)
    {
        return $this->crudService->show($setting,$this->views);
    }

    public function edit(Setting $setting)
    {
        return $this->crudService->edit($setting,$this->views);
    }

    public function update(MainRequest $request, Setting $setting)
    {
        DB::beginTransaction();
        try {
            $data = $request->validated();
            if($setting->input_type == 'file')
            {
                if ($request->hasFile('value')) {
                    $data['value'] = $this->uploadFileTrait($request, 'value', 'uploads/');
                }
            }
            $setting->update($data);
            DB::commit();
            toastr()->success($this->updateMsg, 'success', ['timeOut' => 8000]);
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            return $th;
        }
    }

    public function destroy(Setting $setting)
    {
        return $this->crudService->destroy($setting);
    }
}
