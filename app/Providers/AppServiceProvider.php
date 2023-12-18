<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Order;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
        //Menu SideBar
        View::share('menuData', Menu::orderBy('sort', 'asc')->orderBy('name', 'asc')->whereStatus(0)->get());

        //Notifications
        View::share('notifications', Order::whereSeen(0)->latest()->select(['id','name', 'type', 'created_at'])->get());
    }
}
