<?php

use App\Http\Controllers\AdminControllers\AuthController;
use App\Http\Controllers\AdminControllers\MenuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControllers\DashboardController;


Route::get('/login', [AuthController::class, 'login_page'])->name('admin.login_page');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login');

Route::get("switch-language/{lang}", function ($lang) {
    app()->setLocale($lang);
    session()->put('locale', $lang);
    return redirect()->back();
})->name('switch-language');
/*All Admin Routes List*/
Route::middleware(['auth','switch-language'])->namespace('App\Http\Controllers\AdminControllers')->group(function () {

    //Default
    Route::post('/logout_admin', [DashboardController::class, 'logout'])->name('logout_admin');
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/quickChange', [DashboardController::class, 'quickChange'])->name('admin.quickChange');
    Route::post('/deleteSelectedItems', [DashboardController::class, 'deleteSelectedItems'])->name('admin.deleteSelectedItems');
    Route::get('/user-profile', [DashboardController::class, 'userProfile'])->name('admin.userProfile');
    Route::put('/updateUserProfile', [DashboardController::class, 'updateUserProfile'])->name('admin.updateUserProfile');
    Route::resource('menus', 'MenuController');


    //Routes
Route::resource('news', 'NewController');
Route::resource('features', 'FeatureController');
Route::resource('testimonials', 'TestimonialController');
Route::resource('abouts', 'AboutController');
    Route::resource('faqs', 'FaqController');
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('seos', 'SeoController');
    Route::resource('orders', 'OrderController');
    Route::resource('settings', 'SettingController');
    Route::resource('careers', 'CareerController');
    Route::resource('blogs', 'BlogController');
    Route::resource('categories', 'CategoryController');
    Route::resource('industries', 'IndustryController');
    Route::resource('solutions', 'SolutionController');
    Route::resource('services', 'ServiceController');
    Route::resource('teams', 'TeamController');

});




