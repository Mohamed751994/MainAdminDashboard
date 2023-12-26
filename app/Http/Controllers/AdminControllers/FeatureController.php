<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainRequest;
use App\Models\Feature;
use App\Services\CrudService;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    protected $views = 'features';
    protected $crudService;
    public function __construct(CrudService $crudService)
    {
        $this->crudService = $crudService;
        $this->middleware('permission:features-index', ['only' => ['index']]);
        $this->middleware('permission:features-create', ['only' => ['create','store']]);
        $this->middleware('permission:features-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:features-show', ['only' => ['show']]);
        $this->middleware('permission:features-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        return $this->crudService->index(Feature::class,$this->views);
    }

    public function create()
    {
        return $this->crudService->create($this->views);
    }

    public function store(MainRequest $request)
    {
        return $this->crudService->store($request,Feature::class);
    }

    public function show(Feature $feature)
    {
        return $this->crudService->show($feature,$this->views);
    }

    public function edit(Feature $feature)
    {
        return $this->crudService->edit($feature,$this->views);
    }

    public function update(MainRequest $request, Feature $feature)
    {
        return $this->crudService->update($request,$feature);
    }

    public function destroy(Feature $feature)
    {
        return $this->crudService->destroy($feature);
    }
}
