<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Front\FrontController::class, 'index']);
Route::get('/front/contact', [App\Http\Controllers\Front\ContactController::class, 'index']);
Route::get('/front/service', [App\Http\Controllers\Front\ServiceController::class, 'index']);
Route::get('/front/course', [App\Http\Controllers\Front\CourseController::class, 'index']);






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
  // product 
  Route::resource('/product', App\Http\Controllers\Admin\Product\ProductController::class);
  Route::get('/delete/product/{slug}', [App\Http\Controllers\Admin\Product\ProductController::class, 'delete']);
  Route::get('/search/product', [App\Http\Controllers\Admin\Product\ProductController::class, 'search']);
  // category
  Route::resource('/category', App\Http\Controllers\Admin\Category\CategoryController::class);
  Route::get('/delete/category/{slug}', [App\Http\Controllers\Admin\Category\CategoryController::class, 'delete']);
  Route::get('/search/category', [App\Http\Controllers\Admin\Category\CategoryController::class, 'search']);
  // user
  Route::resource('/user', App\Http\Controllers\Admin\User\UserController::class);
  Route::get('/delete/user/{slug}', [App\Http\Controllers\Admin\User\UserController::class, 'delete']);
  Route::get('/search/user', [App\Http\Controllers\Admin\User\UserController::class, 'search']);
  // Slider
  Route::resource('/slider', App\Http\Controllers\Admin\Slider\SliderController::class);
  Route::get('/delete/slider/{slug}', [App\Http\Controllers\Admin\Slider\SliderController::class, 'delete']);
  Route::get('/search/slider', [App\Http\Controllers\Admin\Slider\SliderController::class, 'search']);
  // contact 
  Route::resource('/contact', App\Http\Controllers\Admin\Contact\ContactController::class);
  Route::get('/delete/contact/{slug}', [App\Http\Controllers\Admin\Contact\ContactController::class, 'delete']);
  Route::get('/search/contact', [App\Http\Controllers\Admin\Contact\ContactController::class, 'search']);
 // course 
 Route::resource('course', App\Http\Controllers\Admin\Course\CourseController::class);
 Route::get('/delete/course/{slug}', [App\Http\Controllers\Admin\Course\CourseController::class, 'delete']);
 Route::get('/search/course', [App\Http\Controllers\Admin\Course\CourseController::class, 'search']);
  // service
  Route::resource('/service', App\Http\Controllers\Admin\Service\ServiceControlller::class);
  Route::get('/delete/service/{slug}', [App\Http\Controllers\Admin\Service\ServiceControlller::class, 'delete']);
  Route::get('/search/service', [App\Http\Controllers\Admin\Service\ServiceControlller::class, 'search']);
  // support
  Route::resource('/support', App\Http\Controllers\Admin\Support\SupportControlller::class,);
  Route::get('/delete/support/{slug}', [App\Http\Controllers\Admin\Support\SupportControlller::class, 'delete']);
  Route::get('/search/support', [App\Http\Controllers\Admin\Support\SupportControlller::class, 'search']);
   // About
   Route::resource('/about', App\Http\Controllers\Admin\About\AboutControlller::class,);
   Route::get('/delete/about/{slug}', [App\Http\Controllers\Admin\About\AboutControlller::class, 'delete']);
   Route::get('/search/about', [App\Http\Controllers\Admin\About\AboutControlller::class, 'search']);
    // Counselling
    Route::resource('/counselling', App\Http\Controllers\Admin\Counselling\CounsellingControlller::class,);
    Route::get('/delete/counselling/{slug}', [App\Http\Controllers\Admin\Counselling\CounsellingControlller::class, 'delete']);
    Route::get('/search/counselling', [App\Http\Controllers\Admin\Counselling\CounsellingControlller::class, 'search']);
     // Getintouch
     Route::resource('/getintouch', App\Http\Controllers\Admin\Getintouch\GetintouchControlller::class,);
     Route::get('/delete/getintouch/{slug}', [App\Http\Controllers\Admin\Getintouch\GetintouchControlller::class, 'delete']);
     Route::get('/search/getintouch', [App\Http\Controllers\Admin\Getintouch\GetintouchControlller::class, 'search']);
  // Bulk option 
  Route::post('/bulk/delete', [App\Http\Controllers\Admin\Bulk\BulkController::class, 'delete']);
});
