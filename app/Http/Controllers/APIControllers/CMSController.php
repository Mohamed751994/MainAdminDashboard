<?php

namespace App\Http\Controllers\APIControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Http\Traits\HelperTrait;
use App\Models\Blog;
use App\Models\Career;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Industry;
use App\Models\Order;
use App\Models\Seo;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Solution;
use App\Models\Team;
use App\Services\ApiService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class CMSController extends Controller
{
    use HelperTrait;

    protected $apiService;
    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }
    //******************************** Services ********************************
    public function services()
    {
        return $this->apiService->getAllRecords(Service::class,'الخدمات');
    }
    public function service($slug)
    {
        return $this->apiService->getSingleRecord(Service::class,'صفحة الخدمة الواحدة',$slug);
    }
    //******************************** End Services ********************************

    //******************************** Solutions ********************************
    public function solutions()
    {
        return $this->apiService->getAllRecords(Solution::class,'الحلول');
    }
    public function solution($slug)
    {
        return $this->apiService->getSingleRecord(Solution::class,'صفحة الحلول الواحدة',$slug);
    }
    //******************************** End Solutions ********************************

    //******************************** Industries ********************************
    public function industries()
    {
        return $this->apiService->getAllRecords(Industry::class,'الصناعات');
    }
    public function industry($slug)
    {
        return $this->apiService->getSingleRecord(Industry::class,'صفحة الصناعة الواحدة',$slug);
    }
    //******************************** End Industries ********************************

    //******************************** Careers ********************************
    public function careers()
    {
        return $this->apiService->getAllRecords(Career::class,'الوظائف');
    }
    public function career($slug)
    {
        return $this->apiService->getSingleRecord(Career::class,'صفحة الوظيفة الواحدة',$slug);
    }
    //******************************** End Careers ********************************

    //******************************** Team ********************************
    public function team()
    {
        return $this->apiService->getAllRecords(Team::class,'فريق العمل');
    }
    //******************************** End Team ********************************

    //******************************** Blogs ********************************
    public function categories()
    {
        return $this->apiService->getAllRecords(Category::class,'أقسام المقالات');
    }
    public function blogs()
    {
        return $this->apiService->getAllRecords(Blog::class,'المقالات');
    }
    public function blog($slug)
    {
        return $this->apiService->getSingleRecord(Blog::class,'صفحة المقالة الواحدة',$slug);
    }
    //******************************** End Blogs ********************************

    //******************************** Faqs ********************************
    public function faqs()
    {
        return $this->apiService->getAllRecords(Faq::class,'الأسئلة الشائعة');
    }
    //******************************** End Faqs ********************************



    //******************************** Settings And SEO ********************************
    public function settings()
    {
        $settings = Setting::pluck("value", "key");
        return $this->successResponse('الإعدادات',$settings);
    }
    public function seo()
    {
        $seo = Seo::first();
        return $this->successResponse('محركات البحث',$seo);
    }
    //******************************** End Settings And SEO ********************************


    //******************************** saveOrder ********************************
    public function saveOrder(OrderRequest $request)
    {
        try {
            $data = $request->validated();
            if ($request->hasFile('cv')) {
                $data['cv'] = $this->uploadFileTrait($request, 'cv', 'uploads/');
            }
            Order::create($data);
            return $this->successResponse(__('text.successMessage'));
        } catch (\Throwable $th) {
            return $this->errorResponse($th);
        }
    }
    //******************************** End saveOrder ********************************



}
