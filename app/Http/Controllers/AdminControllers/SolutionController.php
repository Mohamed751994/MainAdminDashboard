<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainRequest;
use App\Models\Solution;
use App\Services\CrudService;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    protected $views = 'solutions';
    protected $crudService;
    public function __construct(CrudService $crudService)
    {
        $this->crudService = $crudService;
    }

    public function index()
    {
        return $this->crudService->index(Solution::class,$this->views);
    }

    public function create()
    {
        return $this->crudService->create($this->views);
    }

    public function store(MainRequest $request)
    {
        return $this->crudService->store($request,Solution::class);
    }

    public function show(Solution $solution)
    {
        return $this->crudService->show($solution,$this->views);
    }

    public function edit(Solution $solution)
    {
        return $this->crudService->edit($solution,$this->views);
    }

    public function update(MainRequest $request, Solution $solution)
    {
        return $this->crudService->update($request,$solution);
    }

    public function destroy(Solution $solution)
    {
        return $this->crudService->destroy($solution);
    }
}
