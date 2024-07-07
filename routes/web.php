<?php

//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(['prefix' => 'posts'], function () {
    Route::get('/',[\App\Http\Controllers\MainController::class,'index'])->name('mainPosts.index');
    Route::get('/{post}',[\App\Http\Controllers\MainController::class,'show'])->name('mainPosts.show');
    Route::post('/{post}/comments',[\App\Http\Controllers\CommentController::class,'store'])->name('posts.comments.store');
    Route::post('/{post}/likes',[\App\Http\Controllers\LikeController::class,'store'])->name('posts.likes.store');

});

Route::get('/',[\App\Http\Controllers\PostController::class,'index']);
//роуты админки
require_once('Admin/admins.php');
require_once('Personal/admins.php');



Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
