<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainRequest;
use App\Models\Order;
use App\Services\CrudService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $views = 'orders';
    protected $crudService;
    public function __construct(CrudService $crudService)
    {
        $this->crudService = $crudService;
        $this->middleware('permission:orders-index', ['only' => ['index']]);
        $this->middleware('permission:orders-create', ['only' => ['create','store']]);
        $this->middleware('permission:orders-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:orders-show', ['only' => ['show']]);
        $this->middleware('permission:orders-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $searchParam = ['type', 'seen'];
        return $this->crudService->index(Order::class,$this->views,$searchParam);
    }

    public function show(Order $order)
    {
        ($order->getRawOriginal('seen') == 0) ? $order->update(['seen' => 1]) : '';
        return $this->crudService->show($order,$this->views);
    }

    public function destroy(Order $order)
    {
        return $this->crudService->destroy($order);
    }
}
