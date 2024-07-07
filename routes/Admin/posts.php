<?php


use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Post','prefix'=>'posts'],function (){
    Route::get('/create',[\App\Http\Controllers\Admin\Post\PostController::class,'create'])->name('posts.create');
    Route::post('/',[\App\Http\Controllers\Admin\Post\PostController::class,'store'])->name('posts.store');
    Route::get('/',[\App\Http\Controllers\Admin\Post\PostController::class,'index'])->name('posts.index');
    Route::get('/{post}',[\App\Http\Controllers\Admin\Post\PostController::class,'show'])->name('posts.show');
    Route::get('/{post}/edit',[\App\Http\Controllers\Admin\Post\PostController::class,'edit'])->name('posts.edit');
    Route::patch('/{post}',[\App\Http\Controllers\Admin\Post\PostController::class,'update'])->name('posts.update');
    Route::delete('/{post}',[\App\Http\Controllers\Admin\Post\PostController::class,'destroy'])->name('posts.delete');
});
