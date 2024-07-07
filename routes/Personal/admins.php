<?php


use Illuminate\Support\Facades\Route;
Route::group(['prefix'=>'personal','middleware'=>['auth','verified']],function ()
{

    Route::get('/',[\App\Http\Controllers\Personal\Main\MainController::class,'index']);
    Route::resource('likes',\App\Http\Controllers\Personal\LikeController::class)->names('likes');
//    Route::get('/likes', [\App\Http\Controllers\Personal\LikeController::class,'index'])->name('likes.index');
    Route::resource('comments',\App\Http\Controllers\Personal\CommentController::class)->names('comments');
    Route::resource('myposts',\App\Http\Controllers\Personal\MyPostcontroller::class)->names('myposts');



});

