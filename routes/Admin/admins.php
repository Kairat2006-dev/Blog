<?php


use Illuminate\Support\Facades\Route;
Route::group(['namespace'=>'Admin', 'prefix'=>'admins','middleware'=>['auth','verified','isAdmin']],function ()
{
    require_once('categories.php');
    require_once('mains.php');
    require_once('tags.php');
    require_once('posts.php');
    require_once('users.php');
});

