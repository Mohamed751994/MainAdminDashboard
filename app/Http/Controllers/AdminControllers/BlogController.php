<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainRequest;
use App\Models\Category;
use App\Models\Blog;
use App\Services\CrudService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $views = 'blogs';
    protected $crudService;
    public function __construct(CrudService $crudService)
    {
        $this->crudService = $crudService;
    }

    public function index()
    {
        return $this->crudService->index(Blog::class,$this->views);
    }

    public function create()
    {
        $compact['category_id'] = Category::whereStatus(1)->pluck('title_ar','id');
        return $this->crudService->create($this->views,$compact);
    }

    public function store(MainRequest $request)
    {
        return $this->crudService->store($request,Blog::class);
    }

    public function show(Blog $blog)
    {
        return $this->crudService->show($blog,$this->views);
    }

    public function edit(Blog $blog)
    {
        $compact['category_id'] = Category::whereStatus(1)->pluck('title_ar','id');
        return $this->crudService->edit($blog,$this->views,$compact);
    }

    public function update(MainRequest $request, Blog $blog)
    {
        return $this->crudService->update($request,$blog);
    }

    public function destroy(Blog $blog)
    {
        return $this->crudService->destroy($blog);
    }
}
