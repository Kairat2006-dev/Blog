<?php


use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'User','prefix'=>'users'],function (){
    Route::get('/create',[\App\Http\Controllers\Admin\UserController::class,'create'])->name('users.create');
    Route::post('/',[\App\Http\Controllers\Admin\UserController::class,'store'])->name('users.store');
    Route::get('/',[\App\Http\Controllers\Admin\UserController::class,'index'])->name('users.index');
    Route::get('/{user}',[\App\Http\Controllers\Admin\UserController::class,'show'])->name('users.show');
    Route::get('/{user}/edit',[\App\Http\Controllers\Admin\UserController::class,'edit'])->name('users.edit');
    Route::patch('/{user}',[\App\Http\Controllers\Admin\UserController::class,'update'])->name('users.update');
    Route::delete('/{user}',[\App\Http\Controllers\Admin\UserController::class,'delete'])->name('users.delete');
});
