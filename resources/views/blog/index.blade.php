@extends('layouts.main')
@section('content')

<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Блог</h1>
        <section class="featured-posts-section">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                    <div class="blog-post-thumbnail-wrapper">
                        <img src="{{ 'storage/' . $post->getMainImage('preview_image') }}" alt="blog post">
                    </div>
                    <div class="d-flex justify-content-between">
                    <p class="blog-post-category">{{$post->category->title}}</p>
                        <form action="{{route('posts.likes.store',$post->id)}}" method="Post">
                            @csrf
                            <button type="submit" class="border-0 bg-transparent"><i class="fa-regular fa-heart"></i></button>
                            <input type="hidden" name="user_id">
                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            <p>{{$post->liked->count()}}</p>
                        </form>
                    </div>
                    <a href="{{route('mainPosts.show',$post->id)}}" class="blog-post-permalink">
                        <h6 class="blog-post-title">{{$post->title}}</h6>
                    </a>
                    <div>

                    </div>
                </div>
                @endforeach
                <div>
                    {{$posts->links()}}
                </div>
            </div>
        </section>
        <div class="row">
            @foreach($randomPosts   as $post)
                <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                    <div class="blog-post-thumbnail-wrapper">
                        <img src="{{ 'storage/' . $post->getMainImage('preview_image') }}" alt="blog post">
                    </div>
                    <p class="blog-post-category">{{$post->category->title}}</p>
                    <form action="{{route('posts.likes.store',$post->id)}}" method="Post">
                        @csrf
                        <button type="submit" class="border-0 bg-transparent"><i class="fa-regular fa-heart"></i></button>
                        <input type="hidden" name="user_id">
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                        <p class="mr-3">{{$post->liked->count()}}</p>
                    </form>
                    <a href="#" class="blog-post-permalink">
                        <h6 class="blog-post-title">{{$post->title}}</h6>
                    </a>
                </div>
            @endforeach
            <div class="col-md-4 sidebar" data-aos="fade-left">
                <div class="widget widget-post-list">
                    <h5 class="widget-title">Популярные посты</h5>
                    <ul class="post-list">
                        @foreach($countPosts as $post)
                        <li class="post">
                            <a href="#!" class="post-permalink media">
                                <img src="{{'storage/' . $post->preview_image}}" alt="blog post">
                                <div class="media-body">
                                    <h6 class="post-title">{{$post->title}}</h6>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>

</main>


@endsection
