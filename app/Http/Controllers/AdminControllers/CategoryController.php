<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainRequest;
use App\Models\Category;
use App\Services\CrudService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $views = 'categories';
    protected $crudService;
    public function __construct(CrudService $crudService)
    {
        $this->crudService = $crudService;
    }

    public function index()
    {
        return $this->crudService->index(Category::class,$this->views);
    }

    public function create()
    {
        return $this->crudService->create($this->views);
    }

    public function store(MainRequest $request)
    {
        return $this->crudService->store($request,Category::class);
    }

    public function show(Category $category)
    {
        return $this->crudService->show($category,$this->views);
    }

    public function edit(Category $category)
    {
        return $this->crudService->edit($category,$this->views);
    }

    public function update(MainRequest $request, Category $category)
    {
        return $this->crudService->update($request,$category);
    }

    public function destroy(Category $category)
    {
        return $this->crudService->destroy($category);
    }
}
