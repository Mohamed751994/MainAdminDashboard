<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainRequest;
use App\Models\Industry;
use App\Services\CrudService;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    protected $views = 'industries';
    protected $crudService;
    public function __construct(CrudService $crudService)
    {
        $this->crudService = $crudService;
    }

    public function index()
    {
        return $this->crudService->index(Industry::class,$this->views);
    }

    public function create()
    {
        return $this->crudService->create($this->views);
    }

    public function store(MainRequest $request)
    {
        return $this->crudService->store($request,Industry::class);
    }

    public function show(Industry $industry)
    {
        return $this->crudService->show($industry,$this->views);
    }

    public function edit(Industry $industry)
    {
        return $this->crudService->edit($industry,$this->views);
    }

    public function update(MainRequest $request, Industry $industry)
    {
        return $this->crudService->update($request,$industry);
    }

    public function destroy(Industry $industry)
    {
        return $this->crudService->destroy($industry);
    }
}
