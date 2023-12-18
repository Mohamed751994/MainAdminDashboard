<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainRequest;
use App\Models\Career;
use App\Services\CrudService;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    protected $views = 'careers';
    protected $crudService;
    public function __construct(CrudService $crudService)
    {
        $this->crudService = $crudService;
        $this->middleware('permission:careers-index', ['only' => ['index']]);
        $this->middleware('permission:careers-create', ['only' => ['create','store']]);
        $this->middleware('permission:careers-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:careers-show', ['only' => ['show']]);
        $this->middleware('permission:careers-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        return $this->crudService->index(Career::class,$this->views);
    }

    public function create()
    {
        $compact['job_time'] = collect(['full_time' =>'Full Time', 'part_time' => 'Part Time', 'freelance' =>'Freelance']);
        $compact['job_type'] = collect(['on_site' =>'Onsite', 'remotely' => 'Remotely', 'hybrid' =>'Hybrid']);
        return $this->crudService->create($this->views, $compact);
    }

    public function store(MainRequest $request)
    {
        return $this->crudService->store($request,Career::class);
    }

    public function show(Career $career)
    {
        return $this->crudService->show($career,$this->views);
    }

    public function edit(Career $career)
    {
        $compact['job_time'] = collect(['full_time' =>'Full Time', 'part_time' => 'Part Time', 'freelance' =>'Freelance']);
        $compact['job_type'] = collect(['on_site' =>'Onsite', 'remotely' => 'Remotely', 'hybrid' =>'Hybrid']);
        return $this->crudService->edit($career,$this->views,$compact);
    }

    public function update(MainRequest $request, Career $career)
    {
        return $this->crudService->update($request,$career);
    }

    public function destroy(Career $career)
    {
        return $this->crudService->destroy($career);
    }
}
