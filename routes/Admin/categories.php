<?php


use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Category','prefix'=>'categories'],function (){
        Route::get('/create',[\App\Http\Controllers\Admin\Category\CategoryController::class,'create'])->name('categories.create');
        Route::post('/',[\App\Http\Controllers\Admin\Category\CategoryController::class,'store'])->name('categories.store');
        Route::get('/',[\App\Http\Controllers\Admin\Category\CategoryController::class,'index'])->name('categories.index');
        Route::get('/{category}',[\App\Http\Controllers\Admin\Category\CategoryController::class,'show'])->name('categories.show');
        Route::get('/{category}/edit',[\App\Http\Controllers\Admin\Category\CategoryController::class,'edit'])->name('categories.edit');
        Route::patch('/{category}',[\App\Http\Controllers\Admin\Category\CategoryController::class,'update'])->name('categories.update');
        Route::delete('/{category}',[\App\Http\Controllers\Admin\Category\CategoryController::class,'delete'])->name('categories.delete');
    });
