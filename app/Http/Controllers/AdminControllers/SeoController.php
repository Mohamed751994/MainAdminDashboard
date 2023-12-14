<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SeoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $content = Seo::first() ?? '';
        return view('admin_dashboard.seos.index' , compact('content'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $allParams = [$request->except('_token','id')];
            Seo::updateOrCreate(['id' => $request->get('id')],$allParams[0]);
            toastr()->success($this->updateMsg, 'success', ['timeOut' => 8000]);
            return redirect()->back();
        } catch (\Exception $e) {
            toastr()->error($e, 'error', ['timeOut' => 8000]);
            return redirect()->back();
        }
    }
}
