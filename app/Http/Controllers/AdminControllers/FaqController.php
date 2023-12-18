<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainRequest;
use App\Models\Faq;
use App\Services\CrudService;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    protected $views = 'faqs';
    protected $crudService;
    public function __construct(CrudService $crudService)
    {
        $this->crudService = $crudService;
        $this->middleware('permission:faqs-index', ['only' => ['index']]);
        $this->middleware('permission:faqs-create', ['only' => ['create','store']]);
        $this->middleware('permission:faqs-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:faqs-show', ['only' => ['show']]);
        $this->middleware('permission:faqs-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        return $this->crudService->index(Faq::class,$this->views);
    }

    public function create()
    {
        return $this->crudService->create($this->views);
    }

    public function store(MainRequest $request)
    {
        return $this->crudService->store($request,Faq::class);
    }

    public function show(Faq $faq)
    {
        return $this->crudService->show($faq,$this->views);
    }

    public function edit(Faq $faq)
    {
        return $this->crudService->edit($faq,$this->views);
    }

    public function update(MainRequest $request, Faq $faq)
    {
        return $this->crudService->update($request,$faq);
    }

    public function destroy(Faq $faq)
    {
        return $this->crudService->destroy($faq);
    }
}
