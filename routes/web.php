<?php

use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeUserController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\AdminNewsController as AdminNewsController;
use App\Http\Controllers\AdminPanel\ImageController as AdminImageController;
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

    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/references', [HomeController::class, 'references'])->name('references');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');
    Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
    Route::post('/storecomment', [HomeController::class, 'storecomment'])->name('storecomment');
    Route::view('/loginuser', 'home.login');
    Route::view('/registeruser', 'home.register');
    Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
    Route::view('/loginadmin', 'admin.login')->name('loginadmin');
    Route::post('/loginadmincheck', [HomeController::class, 'loginadmincheck'])->name('loginadmincheck');



//Get Controller Function
Route::get('test', [HomeController::class,'test'])->name('test');
//Route::get('home/{id}/{nr}',[HomeController::class,'index'])->name('home');
//Route::post('/save',[HomeController::class,'save'])->name('save');
//Route::get('/page',[HomeController::class,'page'])->name('page');
//Route::get('/product/{id}/{slug}',[HomeController::class,'product'])->name('product');

Route::get('/news/{id}',[HomeController::class,'news'])->name('news');
Route::get('/categorynews/{id}/{slug}',[HomeController::class,'categorynews'])->name('categorynews');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function (){

    //**************USER Routes CONTROLLER**
    Route::prefix('userpanel')->name('userpanel.')->controller(UserController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::get('/reviews','reviews')->name('reviews');
        Route::get('/news','news')->name('news');
        Route::get('/reviewdestroy/{id}','reviewdestroy')->name('reviewdestroy');

    });

    Route::prefix('/user')->name('user.')->controller(HomeUserController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');

    });

//**************ADMIN PANEL CONTROLLER**
    Route::middleware('admin')->prefix('/admin')->name('admin.')->group(function (){

        Route::get('/', [AdminHomeController::class,'index'])->name('index');
//**************General Routes CONTROLLER**
        Route::get('/setting', [AdminHomeController::class,'setting'])->name('setting');
        Route::post('/setting', [AdminHomeController::class,'settingupdate'])->name('setting.update');
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

    //**************ADMIN NEWS IMAGE GALLERY CONTROLLER**
    Route::prefix('/image')->name('image.')->controller(AdminImageController::class)->group(function (){
        Route::get('/{nid}','index')->name('index');
        Route::post('/store/{nid}', 'store')->name('store');
        Route::get('/destroy/{nid}/{id}', 'destroy')->name('destroy');


    });

    //**************ADMIN MESSAGE CONTROLLER**
    Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');


    });

    //**************ADMIN FAQ CONTROLLER**
    Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');

    });

    //**************ADMIN COMMENTS CONTROLLER**
    Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');


    });

    //**************ADMIN USER CONTROL CONTROLLER**
    Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::post('/addrole/{id}', 'addrole')->name('addrole');
        Route::get('/destroyrole/{uid}/{rid}', 'destroyrole')->name('destroyrole');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');

    });
});
});
