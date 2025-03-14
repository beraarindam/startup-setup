<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\PageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about.us');

Route::group(['prefix'=>'service'], function(){
    Route::get('/', [PageController::class, 'service'])->name('service');
    Route::get('website-design', [PageController::class, 'webDesign'])->name('web.design');
    Route::get('website-development', [PageController::class, 'webDevelopment'])->name('web.development');
    Route::get('cms', [PageController::class, 'cms'])->name('cms');
    Route::get('e-commerce', [PageController::class, 'ecommerce'])->name('ecommerce');
    Route::get('ui-ux', [PageController::class, 'uiUx'])->name('uiUx');
    Route::get('wprdpress-development', [PageController::class, 'wordpressDevelopment'])->name('wordpress.development');
    Route::get('website-redesign', [PageController::class, 'websiteRedesign'])->name('website.redesign');
    Route::get('website-maintenance', [PageController::class, 'websiteMaintenance'])->name('website.maintenance');
});
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/project', [PageController::class, 'project'])->name('project');
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contact');
Route::get('/testimonial', [PageController::class, 'testimonial'])->name('testimonial');
