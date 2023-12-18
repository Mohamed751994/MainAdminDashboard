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
        $this->middleware('permission:solutions-index', ['only' => ['index']]);
        $this->middleware('permission:solutions-create', ['only' => ['create','store']]);
        $this->middleware('permission:solutions-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:solutions-show', ['only' => ['show']]);
        $this->middleware('permission:solutions-delete', ['only' => ['destroy']]);
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
