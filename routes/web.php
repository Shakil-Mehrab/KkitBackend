<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Front\FrontController::class, 'index']);
Route::get('/front/contact', [App\Http\Controllers\Front\ContactController::class, 'index']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
  // product 
  Route::get('/view/product', [App\Http\Controllers\Admin\Product\ProductController::class, 'view']);
  Route::get('/create/product', [App\Http\Controllers\Admin\Product\ProductController::class, 'create']);
  Route::post('/store/product', [App\Http\Controllers\Admin\Product\ProductController::class, 'store']);
  Route::get('/delete/product/{slug}', [App\Http\Controllers\Admin\Product\ProductController::class, 'delete']);
  Route::get('/edit/product/{slug}', [App\Http\Controllers\Admin\Product\ProductController::class, 'edit']);
  Route::post('/update/product/{slug}', [App\Http\Controllers\Admin\Product\ProductController::class, 'update']);
  Route::get('/search/product', [App\Http\Controllers\Admin\Product\ProductController::class, 'search']);
  // category
  Route::get('/view/category', [App\Http\Controllers\Admin\Category\CategoryController::class, 'view']);
  Route::get('/create/category', [App\Http\Controllers\Admin\Category\CategoryController::class, 'create']);
  Route::post('/store/category', [App\Http\Controllers\Admin\Category\CategoryController::class, 'store']);
  Route::get('/delete/category/{slug}', [App\Http\Controllers\Admin\Category\CategoryController::class, 'delete']);
  Route::get('/edit/category/{slug}', [App\Http\Controllers\Admin\Category\CategoryController::class, 'edit']);
  Route::post('/update/category/{id}', [App\Http\Controllers\Admin\Category\CategoryController::class, 'update']);
  Route::get('/search/category', [App\Http\Controllers\Admin\Category\CategoryController::class, 'search']);
  // user
  Route::get('/view/user', [App\Http\Controllers\Admin\User\UserController::class, 'view']);
  Route::get('/delete/user/{slug}', [App\Http\Controllers\Admin\User\UserController::class, 'delete']);
  Route::get('/edit/user/{slug}', [App\Http\Controllers\Admin\User\UserController::class, 'edit']);
  Route::post('/update/user/{slug}', [App\Http\Controllers\Admin\User\UserController::class, 'update']);
  Route::get('/search/user', [App\Http\Controllers\Admin\User\UserController::class, 'search']);
  // Slider
  Route::get('/view/slider', [App\Http\Controllers\Admin\Slider\SliderController::class, 'view']);
  Route::get('/create/slider', [App\Http\Controllers\Admin\Slider\SliderController::class, 'create']);
  Route::post('/store/slider', [App\Http\Controllers\Admin\Slider\SliderController::class, 'store']);
  Route::get('/delete/slider/{slug}', [App\Http\Controllers\Admin\Slider\SliderController::class, 'delete']);
  Route::get('/edit/slider/{slug}', [App\Http\Controllers\Admin\Slider\SliderController::class, 'edit']);
  Route::post('/update/slider/{slug}', [App\Http\Controllers\Admin\Slider\SliderController::class, 'update']);
  Route::get('/search/slider', [App\Http\Controllers\Admin\Slider\SliderController::class, 'search']);
  // contact 
  Route::get('/view/contact', [App\Http\Controllers\Admin\Contact\ContactController::class, 'view']);
  Route::get('/create/contact', [App\Http\Controllers\Admin\Contact\ContactController::class, 'create']);
  Route::post('/store/contact', [App\Http\Controllers\Admin\Contact\ContactController::class, 'store']);
  Route::get('/delete/contact/{slug}', [App\Http\Controllers\Admin\Contact\ContactController::class, 'delete']);
  Route::get('/edit/contact/{slug}', [App\Http\Controllers\Admin\Contact\ContactController::class, 'edit']);
  Route::post('/update/contact/{slug}', [App\Http\Controllers\Admin\Contact\ContactController::class, 'update']);
  Route::get('/search/contact', [App\Http\Controllers\Admin\Contact\ContactController::class, 'search']);
 // course 
 Route::get('/view/course', [App\Http\Controllers\Admin\Course\CourseController::class, 'view']);
 Route::get('/create/course', [App\Http\Controllers\Admin\Course\CourseController::class, 'create']);
 Route::post('/store/course', [App\Http\Controllers\Admin\Course\CourseController::class, 'store']);
 Route::get('/delete/course/{slug}', [App\Http\Controllers\Admin\Course\CourseController::class, 'delete']);
 Route::get('/edit/course/{slug}', [App\Http\Controllers\Admin\Course\CourseController::class, 'edit']);
 Route::post('/update/course/{slug}', [App\Http\Controllers\Admin\Course\CourseController::class, 'update']);
 Route::get('/search/course', [App\Http\Controllers\Admin\Course\CourseController::class, 'search']);
  // service
  Route::get('/view/service', [App\Http\Controllers\Admin\Service\ServiceControlller::class, 'view']);
  Route::get('/create/service', [App\Http\Controllers\Admin\Service\ServiceControlller::class, 'create']);
  Route::post('/store/service', [App\Http\Controllers\Admin\Service\ServiceControlller::class, 'store']);
  Route::get('/delete/service/{slug}', [App\Http\Controllers\Admin\Service\ServiceControlller::class, 'delete']);
  Route::get('/edit/service/{slug}', [App\Http\Controllers\Admin\Service\ServiceControlller::class, 'edit']);
  Route::post('/update/service/{slug}', [App\Http\Controllers\Admin\Service\ServiceControlller::class, 'update']);
  Route::get('/search/service', [App\Http\Controllers\Admin\Service\ServiceControlller::class, 'search']);
  // Bulk option 
  Route::post('/bulk/delete', [App\Http\Controllers\Admin\Bulk\BulkController::class, 'delete']);
});
