<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::redirect('/anasayfa', '/home')->name('anasayfa');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');

//Test
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');
//Menu
Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('/home', [\App\Http\Controllers\Admin\MenuController::class,'index'])->name('admin_home');

    Route::get('menu', [\App\Http\Controllers\Admin\MenuController::class,'index'])->name('admin_category');
    Route::get('menu/add', [\App\Http\Controllers\Admin\MenuController::class,'add'])->name('admin_category_add');
    Route::get('menu/update', [\App\Http\Controllers\Admin\MenuController::class,'update'])->name('admin_category_update');
    Route::get('menu/delete', [\App\Http\Controllers\Admin\MenuController::class,'destroy'])->name('admin_category_delete');
    Route::get('menu/show', [\App\Http\Controllers\Admin\MenuController::class,'show'])->name('admin_category_show');
});
//Admin
Route::get('/admin', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->middleware('auth')->name('adminhome');
//Adminlogin
Route::get('/admin/login', [\App\Http\Controllers\Admin\AdminController::class, 'login'])->name('adminlogin');
//logincheck
Route::post('/admin/logincheck', [\App\Http\Controllers\Admin\AdminController::class, 'logincheck'])->name('logincheck');
//logout
Route::post('/admin/logout', [\App\Http\Controllers\Admin\AdminController::class, 'logout'])->name('logout');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
