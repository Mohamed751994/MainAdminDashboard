<?php

namespace App\Http\Controllers\AdminControllers;
use App\Models\Blog;
use App\Models\Career;
use App\Models\Industry;
use App\Models\Order;
use App\Models\Service;
use App\Models\Solution;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        //counts
        //Enhancements
        $data = DB::table('services')->where('status',1)
            ->selectRaw('COUNT(*) as services_count')
            ->addSelect(DB::raw('(SELECT COUNT(*) FROM solutions WHERE status=1) as solutions_count'))
            ->addSelect(DB::raw('(SELECT COUNT(*) FROM blogs WHERE status=1) as blogs_count'))
            ->addSelect(DB::raw('(SELECT COUNT(*) FROM industries WHERE status=1) as industries_count'))
            ->addSelect(DB::raw('(SELECT COUNT(*) FROM careers WHERE status=1) as careers_count'))
            ->addSelect(DB::raw('(SELECT COUNT(*) FROM orders) as orders_count'))
            ->first();
        $services = $data->services_count;
        $solutions = $data->solutions_count;
        $blogs = $data->blogs_count;
        $industries = $data->industries_count;
        $careers = $data->careers_count;
        $orders = $data->orders_count;

        //ordersChart
        //Enhancements
        $ordersType = Order::groupBy('type')
            ->selectRaw('type, COUNT(*) as count')
            ->pluck('count', 'type');

        $orders_contact = $ordersType->get('contact', 0);
        $orders_services = $ordersType->get('service', 0);
        $orders_solutions = $ordersType->get('solution', 0);
        $orders_industries = $ordersType->get('industry', 0);
        $orders_careers = $ordersType->get('career', 0);


        $data = [
            'services' =>$services,
            'solutions' =>$solutions,
            'blogs' =>$blogs,
            'industries' =>$industries,
            'careers' =>$careers,
            'orders' =>$orders,
            'orders_contact' =>$orders_contact,
            'orders_services' =>$orders_services,
            'orders_solutions' =>$orders_solutions,
            'orders_industries' =>$orders_industries,
            'orders_careers' =>$orders_careers
        ];
        return view('admin_dashboard.dashboard', compact('data'));
    }


    public function quickChange(Request $request)
    {
        $item =  app("App\Models\\".$request->item);
        $id = $request->id;
        $val = $request->val;
        $col = $request->col;
        $item::whereId($id)->update([$col=> $val]);
        return response()->json(['success'=>true]);
    }
    public function deleteSelectedItems(Request $request)
    {
        $model =  app("App\Models\\".$request->model);
        $ids = $request->ids;
        $model::whereIn('id',$ids)->delete();
        toastr()->success('تم حذف الأعمدة المحددة بنجاح', 'نجح', ['timeOut' => 8000]);
        return response()->json(['success'=>true]);
    }


    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('admin.login_page');
    }


}
