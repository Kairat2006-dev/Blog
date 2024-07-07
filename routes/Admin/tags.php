<?php


use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Tag','prefix'=>'tags'],function (){
    Route::get('/create',[\App\Http\Controllers\Admin\Tag\TagController::class,'create'])->name('tags.create');
    Route::post('/',[\App\Http\Controllers\Admin\Tag\TagController::class,'store'])->name('tags.store');
    Route::get('/',[\App\Http\Controllers\Admin\Tag\TagController::class,'index'])->name('tags.index');
    Route::get('/{tag}',[\App\Http\Controllers\Admin\Tag\TagController::class,'show'])->name('tags.show');
    Route::get('/{tag}/edit',[\App\Http\Controllers\Admin\Tag\TagController::class,'edit'])->name('tags.edit');
    Route::patch('/{tag}',[\App\Http\Controllers\Admin\Tag\TagController::class,'update'])->name('tags.update');
    Route::delete('/{tag}',[\App\Http\Controllers\Admin\Tag\TagController::class,'delete'])->name('tags.delete');
});
