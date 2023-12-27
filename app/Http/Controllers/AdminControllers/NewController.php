<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainRequest;
use App\Models\News;
use App\Services\CrudService;
use Illuminate\Http\Request;

class NewController extends Controller
{
    protected $views = 'news';
    protected $crudService;
    public function __construct(CrudService $crudService)
    {
        $this->crudService = $crudService;
        $this->middleware('permission:news-index', ['only' => ['index']]);
        $this->middleware('permission:news-create', ['only' => ['create','store']]);
        $this->middleware('permission:news-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:news-show', ['only' => ['show']]);
        $this->middleware('permission:news-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        return $this->crudService->index(News::class,$this->views);
    }

    public function create()
    {
        return $this->crudService->create($this->views);
    }

    public function store(MainRequest $request)
    {
        return $this->crudService->store($request,News::class);
    }

    public function show(News $news)
    {
        return $this->crudService->show($news,$this->views);
    }

    public function edit(News $news)
    {
        return $this->crudService->edit($news,$this->views);
    }

    public function update(MainRequest $request, News $news)
    {
        return $this->crudService->update($request,$news);
    }

    public function destroy(News $news)
    {
        return $this->crudService->destroy($news);
    }
}
