<?php

use App\Http\Controllers\APIControllers\CMSController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


//WEBSITE API'S
Route::middleware(['trust', 'language'])->group(function () {

    //CMS
    Route::get('/services', [CMSController::class, 'services'])->name('services');
    Route::get('/service/{slug}', [CMSController::class, 'service'])->name('service');
    Route::get('/solutions', [CMSController::class, 'solutions'])->name('solutions');
    Route::get('/solution/{slug}', [CMSController::class, 'solution'])->name('solution');
    Route::get('/industries', [CMSController::class, 'industries'])->name('industries');
    Route::get('/industry/{slug}', [CMSController::class, 'industry'])->name('industry');
    Route::get('/careers', [CMSController::class, 'careers'])->name('careers');
    Route::get('/career/{slug}', [CMSController::class, 'career'])->name('career');
    Route::get('/team', [CMSController::class, 'team'])->name('team');
    Route::get('/categories', [CMSController::class, 'categories'])->name('categories');
    Route::get('/blogs', [CMSController::class, 'blogs'])->name('blogs');
    Route::get('/blog/{slug}', [CMSController::class, 'blog'])->name('blog');
    Route::get('/faqs', [CMSController::class, 'faqs'])->name('faqs');
    Route::get('/abouts', [CMSController::class, 'abouts'])->name('abouts');
    Route::get('/features', [CMSController::class, 'features'])->name('features');
    Route::get('/testimonials', [CMSController::class, 'testimonials'])->name('testimonials');
    Route::get('/news', [CMSController::class, 'news'])->name('news');
    Route::get('/news/{slug}', [CMSController::class, 'news_single'])->name('news_single');
    //Settings
    Route::get('/settings', [CMSController::class, 'settings'])->name('settings');
    Route::get('/seo', [CMSController::class, 'seo'])->name('seo');

    //Form Request
    Route::post('/store-order-data', [CMSController::class, 'saveOrder'])->name('saveOrder');

});
