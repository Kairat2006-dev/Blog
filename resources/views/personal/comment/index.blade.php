@extends('personal.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Коментарии</h1>
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


{{--                Название таблицы--}}


{{--                READ-All --}}


                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th><ya-tr-span data-index="55-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="ID" data-translation="ID" data-ch="0" data-type="trSpan" style="visibility: initial !important;">ID</ya-tr-span></th>
                                <th><ya-tr-span data-index="56-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="User" data-translation="Название" data-ch="0" data-type="trSpan" style="visibility: initial !important;">Контент</ya-tr-span></th>
                                <th><ya-tr-span data-index="57-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Date" data-translation="Дата" data-ch="0" data-type="trSpan" style="visibility: initial !important;">Удалить</ya-tr-span></th>

                             </tr>
                            </thead>
                            <tbody>


                            @foreach($comments as $comment)
                            <tr>
                                <td>{{$comment->id}}</td>
                                <td><ya-tr-span data-index="70-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Mike Doe" data-translation="Майк Доу" data-ch="0" data-type="trSpan" style="visibility: initial !important;">{{$comment->content}}</ya-tr-span></td>
                                <td>
                                <form action="{{ route('comments.destroy', $comment->id) }}" method="Post">
                                    @csrf
                                    @method('Delete')
                                    <button type="submit" class="btn btn-link p-0">
                                        <i class="fa-solid fa-person-digging text-danger"></i>
                                    </button>
                                </form>
                                </td>

                            </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>


                <!-- Small boxes (Stat box) -->

                <!-- ./col -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
