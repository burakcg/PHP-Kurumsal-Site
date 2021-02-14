<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});



Route::redirect('/anasayfa', '/home')->name('anasayfa');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home_');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/referances', [HomeController::class, 'referances'])->name('referances');
Route::get('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/contents/{id}', [HomeController::class, 'contents'])->name('contents');
Route::get('/games/{id}', [HomeController::class, 'games'])->name('games');
Route::get('/videos/{id}', [HomeController::class, 'videos'])->name('videos');
Route::get('/news/{id}', [HomeController::class, 'news'])->name('news');
Route::get('/game-detail/{id}', [HomeController::class, 'game_detail'])->name('gameDetail');


Route::get('/comment/index', [\App\Http\Controllers\CommentController::class, 'index'])->name('comment');
Route::post('/comment', [\App\Http\Controllers\CommentController::class, 'comment'])->name('addComment');
Route::get('/user-comments', [\App\Http\Controllers\HomeController::class, 'user_comments'])->name('userComments');
Route::get('/user-comment-delete/{id}', [\App\Http\Controllers\CommentController::class, 'destroy'])->name('userCommentsDelete');

Route::get('/user-reviews', [\App\Http\Controllers\HomeController::class, 'user_reviews'])->name('user_reviews');
Route::get('/review/index', [\App\Http\Controllers\ReviewController::class, 'index'])->name('review');
Route::get('/new-review/{id}', [\App\Http\Controllers\ReviewController::class, 'create'])->name('createUserReview');
Route::get('/review-view/{id}', [\App\Http\Controllers\ReviewController::class, 'view'])->name('viewUserReview');
Route::post('/review', [\App\Http\Controllers\ReviewController::class, 'review'])->name('storeUserReview');
Route::get('/review-delete/{id}', [\App\Http\Controllers\ReviewController::class, 'destroy'])->name('deleteUserReview');

//Test
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');
//Menu
Route::middleware('admin')->prefix('admin')->group(function(){

    Route::get('/', [\App\Http\Controllers\Admin\AdminController::class,'index'])->name('adminhome');
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
    Route::prefix('comments')->group(function(){
        Route::get('/',[\App\Http\Controllers\Admin\ContentCommentController::class,'index'])->name('admin_comment');
        Route::get('validate/{id}',[\App\Http\Controllers\Admin\ContentCommentController::class,'validateComment'])->name('admin_comment_validate');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\ContentCommentController::class,'destroy'])->name('admin_comment_delete');
    });

    Route::prefix('review')->group(function(){
        Route::get('/',[\App\Http\Controllers\Admin\ContentReviewController::class,'index'])->name('admin_review');
        Route::get('validate/{id}',[\App\Http\Controllers\Admin\ContentReviewController::class,'validateComment'])->name('admin_review_validate');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\ContentReviewController::class,'destroy'])->name('admin_review_delete');
    });
    //Image Gallery
    Route::prefix('image')->group(function(){
        Route::get('create/{content_id}',[\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
        Route::post('store/{content_id}',[\App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
        Route::get('delete/{id}/{content_id}',[\App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
        Route::get('show',[\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_show');
    });
    Route::prefix('user')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_user');
        Route::get('/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_create');
        Route::post('/store', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
        Route::post('/update/{id}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
        Route::post('/role_add/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'role_add'])->name('admin_user_role_add');
        Route::get('/role_edit/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'role_edit'])->name('admin_user_role_edit');
        Route::get('/role_delete/{user_id}/{role_id}', [App\Http\Controllers\Admin\UserController::class, 'role_delete'])->name('admin_user_role_delete');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
        Route::get('/show/{id}', [App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
        Route::get('/destroy/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_destroy');

    });
    //Setting
    Route::get('setting', [\App\Http\Controllers\Admin\SettingContoller::class,'index'])->name('admin_setting');
    Route::post('setting/update', [\App\Http\Controllers\Admin\SettingContoller::class,'update'])->name('admin_setting_update');
});


//Adminlogin
Route::get('/admin/login', [\App\Http\Controllers\Admin\AdminController::class, 'login'])->name('adminlogin');
//Userlogin
Route::get('/user/login', [\App\Http\Controllers\Admin\AdminController::class, 'login'])->name('user_login');
//logincheck
Route::post('/admin/logincheck', [\App\Http\Controllers\Admin\AdminController::class, 'logincheck'])->name('logincheck');
//logout
Route::get('/logout', [\App\Http\Controllers\Admin\AdminController::class, 'logout'])->name('logout');
Route::get('/user-logout', [HomeController::class, 'logout'])->name('userLogout');
//User
Route::middleware('auth')->prefix('myuser')->namespace('myuser')->group(function(){

    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('myprofile');

    Route::prefix('content')->group(function () {
        Route::get('/', [UserController::class, 'mycontent'])->name('user_content');
        Route::get('/image/{id}', [ContentController::class, 'user_content_image'])->name('user_content_image');
        Route::post('/image/store', [ContentController::class, 'user_content_image_store'])->name('user_content_image_store');
        Route::get('/image/destroy/{id}', [ContentController::class, 'user_content_image_destroy'])->name('user_content_image_destroy');
        Route::get('/create', [ContentController::class, 'create'])->name('user_content_create');
        Route::post('/store', [ContentController::class, 'store'])->name('user_content_store');
        Route::post('/update/{id}', [ContentController::class, 'update'])->name('user_content_update');
        Route::get('/edit/{id}', [ContentController::class, 'edit'])->name('user_content_edit');
        Route::get('/show/{id}', [ContentController::class, 'show'])->name('user_content_show');
        Route::get('/destroy/{id}', [ContentController::class, 'destroy'])->name('user_content_destroy');



    });
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
