<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
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

Route::get('admin', [AdminHomeController::class,'index'])->name('admin');

//**************ADMIN CATEGORY CONTROLLER**
Route::get('/admin/category', [AdminCategoryController::class,'index'])->name('admin_category');
Route::get('/admin/category/create', [AdminCategoryController::class,'create'])->name('admin_category_create');
Route::post('/admin/category/store', [AdminCategoryController::class,'store'])->name('admin_category_store');
Route::get('/admin/category/edit/{id}', [AdminCategoryController::class,'edit'])->name('admin_category_edit');
