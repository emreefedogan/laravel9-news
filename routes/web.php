<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\AdminNewsController as AdminNewsController;
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

Route::get('/', [HomeController::class,'home'])->name('home');

//Get Controller Function
Route::get('test', [HomeController::class,'test'])->name('test');
//Route::get('home/{id}/{nr}',[HomeController::class,'index'])->name('home');
//Route::post('/save',[HomeController::class,'save'])->name('save');
//Route::get('/page',[HomeController::class,'page'])->name('page');


//Route::get('/product/{id}/{slug}',[HomeController::class,'product'])->name('product');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
//**************ADMIN PANEL CONTROLLER**
Route::prefix('/admin')->name('admin.')->group(function (){

 Route::get('/', [AdminHomeController::class,'index'])->name('index');
//**************ADMIN CATEGORY CONTROLLER**
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');

});
 //**************ADMIN NEWS CONTROLLER**
    Route::prefix('/news')->name('news.')->controller(AdminNewsController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');

    });

});
