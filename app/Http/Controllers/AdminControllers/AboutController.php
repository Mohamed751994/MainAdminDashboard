<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainRequest;
use App\Models\About;
use App\Services\CrudService;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    protected $views = 'abouts';
    protected $crudService;
    public function __construct(CrudService $crudService)
    {
        $this->crudService = $crudService;
        $this->middleware('permission:abouts-index', ['only' => ['index']]);
        $this->middleware('permission:abouts-create', ['only' => ['create','store']]);
        $this->middleware('permission:abouts-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:abouts-show', ['only' => ['show']]);
        $this->middleware('permission:abouts-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        return $this->crudService->index(About::class,$this->views);
    }

    public function create()
    {
        return $this->crudService->create($this->views);
    }

    public function store(MainRequest $request)
    {
        return $this->crudService->store($request,About::class);
    }

    public function show(About $about)
    {
        return $this->crudService->show($about,$this->views);
    }

    public function edit(About $about)
    {
        return $this->crudService->edit($about,$this->views);
    }

    public function update(MainRequest $request, About $about)
    {
        return $this->crudService->update($request,$about);
    }

    public function destroy(About $about)
    {
        return $this->crudService->destroy($about);
    }
}
