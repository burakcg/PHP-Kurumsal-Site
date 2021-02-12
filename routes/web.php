<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::redirect('/anasayfa', '/home')->name('anasayfa');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/referances', [HomeController::class, 'referances'])->name('referances');

//Test
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');
//Menu
Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('/home', [\App\Http\Controllers\Admin\AdminController::class,'index'])->name('admin_home');

    Route::get('menu', [\App\Http\Controllers\Admin\MenuController::class,'index'])->name('admin_menu');
    Route::get('menu/add', [\App\Http\Controllers\Admin\MenuController::class,'add'])->name('admin_menu_add');
    Route::post('menu/create', [\App\Http\Controllers\Admin\MenuController::class,'create'])->name('admin_menu_create');
    Route::get('menu/edit/{id}', [\App\Http\Controllers\Admin\MenuController::class,'edit'])->name('admin_menu_edit');
    Route::post('menu/update/{id}', [\App\Http\Controllers\Admin\MenuController::class,'update'])->name('admin_menu_update');
    Route::get('menu/delete/{id}', [\App\Http\Controllers\Admin\MenuController::class,'destroy'])->name('admin_menu_delete');
    Route::get('menu/show', [\App\Http\Controllers\Admin\MenuController::class,'show'])->name('admin_menu_show');

//Content
    Route::prefix('content')->group(function(){
        Route::get('/',[\App\Http\Controllers\Admin\ContentController::class,'index'])->name('admin_content');
        Route::get('create',[\App\Http\Controllers\Admin\ContentController::class,'create'])->name('admin_content_add');
        Route::post('store',[\App\Http\Controllers\Admin\ContentController::class,'store'])->name('admin_content_store');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\ContentController::class,'edit'])->name('admin_content_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\ContentController::class,'update'])->name('admin_content_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\ContentController::class,'destroy'])->name('admin_content_delete');
        Route::get('show',[\App\Http\Controllers\Admin\ContentController::class,'create'])->name('admin_content_show');
    });
    //Image Gallery
    Route::prefix('image')->group(function(){
        Route::get('create/{content_id}',[\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
        Route::post('store/{content_id}',[\App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
        Route::get('delete/{id}/{content_id}',[\App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
        Route::get('show',[\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_show');
    });
    //Setting
    Route::get('setting', [\App\Http\Controllers\Admin\SettingContoller::class,'index'])->name('admin_setting');
    Route::post('setting/update', [\App\Http\Controllers\Admin\SettingContoller::class,'update'])->name('admin_setting_update');
});


//Admin
Route::get('/admin', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->middleware('auth')->name('adminhome');
//Adminlogin
Route::get('/admin/login', [\App\Http\Controllers\Admin\AdminController::class, 'login'])->name('adminlogin');
//Userlogin
Route::get('/user/login', [\App\Http\Controllers\Admin\AdminController::class, 'login'])->name('user_login');
//logincheck
Route::post('/admin/logincheck', [\App\Http\Controllers\Admin\AdminController::class, 'logincheck'])->name('logincheck');
//logout
Route::get('/logout', [\App\Http\Controllers\Admin\AdminController::class, 'logout'])->name('logout');
//User
Route::middleware('auth')->prefix('myuser')->namespace('myuser')->group(function(){

    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('myprofile');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
