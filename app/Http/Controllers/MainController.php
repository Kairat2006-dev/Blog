<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(6);
        $randomPosts = Post::get()->random(5);
        $countPosts = Post::withCount('liked')->orderBy('liked_count','DESC')->get()->take(4);
        $categories = Category::all();
        return view('blog.index',compact('posts','randomPosts','countPosts','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $date = Carbon::parse($post->created_at);
        $categorypost = Post::where('category_id',$post->category_id)->where('id','!=',$post->id)->get()->take(3);
        return view('blog.show',compact('post','date','categorypost'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
