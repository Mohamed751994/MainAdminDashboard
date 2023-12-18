<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainRequest;
use App\Models\Service;
use App\Services\CrudService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    protected $views = 'services';
    protected $crudService;
    public function __construct(CrudService $crudService)
    {
        $this->crudService = $crudService;
        $this->middleware('permission:services-index', ['only' => ['index']]);
        $this->middleware('permission:services-create', ['only' => ['create','store']]);
        $this->middleware('permission:services-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:services-show', ['only' => ['show']]);
        $this->middleware('permission:services-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        return $this->crudService->index(Service::class,$this->views);
    }

    public function create()
    {
        return $this->crudService->create($this->views);
    }

    public function store(MainRequest $request)
    {
        return $this->crudService->store($request,Service::class);
    }

    public function show(Service $service)
    {
        return $this->crudService->show($service,$this->views);
    }

    public function edit(Service $service)
    {
        return $this->crudService->edit($service,$this->views);
    }

    public function update(MainRequest $request, Service $service)
    {
        return $this->crudService->update($request,$service);
    }

    public function destroy(Service $service)
    {
        return $this->crudService->destroy($service);
    }

}
