<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostUserLike;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function index()
    {
        $posts = auth()->user()->likedPosts;
        return view('personal.comment.index',compact('posts'));
    }
    public function destroy(Post $like)
    {

        auth()->user()->likedPosts()->detach($like);
        return redirect()->route('likes.index');
    }
}
