<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainRequest;
use App\Models\Testimonial;
use App\Services\CrudService;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    protected $views = 'testimonials';
    protected $crudService;
    public function __construct(CrudService $crudService)
    {
        $this->crudService = $crudService;
        $this->middleware('permission:testimonials-index', ['only' => ['index']]);
        $this->middleware('permission:testimonials-create', ['only' => ['create','store']]);
        $this->middleware('permission:testimonials-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:testimonials-show', ['only' => ['show']]);
        $this->middleware('permission:testimonials-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        return $this->crudService->index(Testimonial::class,$this->views);
    }

    public function create()
    {
        return $this->crudService->create($this->views);
    }

    public function store(MainRequest $request)
    {
        return $this->crudService->store($request,Testimonial::class);
    }

    public function show(Testimonial $testimonial)
    {
        return $this->crudService->show($testimonial,$this->views);
    }

    public function edit(Testimonial $testimonial)
    {
        return $this->crudService->edit($testimonial,$this->views);
    }

    public function update(MainRequest $request, Testimonial $testimonial)
    {
        return $this->crudService->update($request,$testimonial);
    }

    public function destroy(Testimonial $testimonial)
    {
        return $this->crudService->destroy($testimonial);
    }
}
