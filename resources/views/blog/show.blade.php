@extends('layouts.main')
@section('content')

    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{$post->title}}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">Автор {{$post->user->name}}•
                {{$date->translatedFormat('F')}} {{$date->day}}, {{$date->year}} {{$date->format('H:i')}}• {{$post->comments->count()}} Коментариев</p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{asset('storage/' . $post->preview_image)}}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                        <p><div>{!!$post->content!!}</div></p>
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <section class="related-posts">
                        <h2 class="section-title mb-4" data-aos="fade-up">Похожие посты</h2>
                        <div class="row">
                            @foreach($categorypost as $categorypost)
                            <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                                <img src="{{asset('storage/' . $categorypost->preview_image)}}" alt="related post" class="post-thumbnail">
                                <p class="post-category">{{$categorypost->category->title}}</p>
                                <a href="{{route('mainPosts.show',$categorypost->id)}}" class="blog-post-permalink">
                                    <h6 class="blog-post-title">{{$categorypost->title}}</h6>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </section>
                    <div class="comment-text">
                    <span class="username mb-5">
                         <div class="mb-2">Комментарии {{$post->comments->count()}}</div>
                         @foreach($post->comments as $comment)

                        <div>{{$comment->user->name}}</div>
                      <span class="text-muted float-right mb-2">{{$comment->getDateAsAtributs()->diffForHumans()}}</span>

                    </span><!-- /.username -->
                        {!! $post->content !!}
                    </div>
                    @endforeach
                    @auth()
                    <section class="comment-section">
                        <h2 class="section-title mb-5" data-aos="fade-up">Оставить коментарий</h2>
                        <form action="{{route('posts.comments.store',$post->id)}}" method="Post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12" data-aos="fade-up">
                                    <textarea name="content" id="comment" class="form-control" placeholder="Comment" rows="10"></textarea>
                                </div>
                                @error('content')
                                <div>{{$message}}</div>
                                @enderror
                            </div>
                           <div>
                               <input type="hidden" name="post_id">
                               <input type="hidden" name="user_id">
                                <div class="col-12" data-aos="fade-up">
                                    <input type="submit" value="Добавить" class="btn btn-warning">
                                </div>
                            </div>
                        </form>
                    </section>
                    @endauth
                </div>
            </div>
        </div>
    </main>
@endsection
