@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Обновить пост</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('mains.index')}}">Home</a></li>

                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            {{--        Create--}}

{{--

{{--                READ-All --}}
            <form action="{{route('posts.update',$post->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('Patch')
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Enter title" name="title" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    {{--                        <form method="post">--}}
                    <label>Content</label>
                    <textarea id="summernote" name="content" value="{{$post->content}}"></textarea>
                    {{--                        </form>--}}
                    <div class="form-group w-50">
                        <label for="exampleInputFile">Изменить превью</label>
                        <div class="input-group">
                            <div>
                                <img src="{{asset('storage/' . $post->getMainImage('preview-image'))}}" alt="" class="w-25 mb-2">
                            </div>
                            <div class="custom-file">

                                <input  type="file" class="custom-file-input" id="exampleInputFile" name="preview-image">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group w-50">
                        <label for="exampleInputFile">Изменить главное изображение</label>
                        <div>
                            <img src="{{asset('storage/' . $post->getMainImage('main-image'))}}" alt="" class="w-25 mb-2">
                        </div>
                        <div class="input-group">

                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name="main-image">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group w-50">
                        <!-- select -->
                        <div class="form-group">
                            <label>Категории</label>
                            <select class="form-control" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}"  {{$category->id == old('category_id')?' selected':''}}>
                                        {{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Multiple</label>
                            <select class="select2"  name="tag_ids[]" multiple="multiple"
                                    data-placeholder="Select a State" style="width: 100%;">
                                @foreach($tags as $tag)
                                    <option
                                        {{is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? ' selected' : ''}}
                                        value="{{$tag->id}}">{{$tag->title}}</option>
                            @endforeach
                        </div>
                    </div>

                </div>
                <input type="submit" class="btn btn-primary mt-2" value="Добавить">
            </form>







                <!-- Small boxes (Stat box) -->

                <!-- ./col -->

        </section>
        <!-- /.content -->
    </div>
@endsection
