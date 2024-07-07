<?php

namespace App\Http\Controllers;

use App\Http\Requests\Like\StoreRequest;
use App\Models\Post;
use App\Models\PostUserLike;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(StoreRequest $request,Post $post)
    {
        $data = $request->validated();
        $data['user_id']=auth()->user()->id;
        PostUserLike::firstOrCreate($data);
        return redirect()->route('mainPosts.index');
    }
}
