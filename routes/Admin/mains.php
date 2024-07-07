<?php


use Illuminate\Support\Facades\Route;
Route::group(['namespace'=>'Main','prefix'=>'mains'],function (){
Route::get('/',[\App\Http\Controllers\Admin\Main\MainController::class,'index'])->name('mains.index');
});
