@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Категория</h1>
                        <form action="{{ route('categories.delete', $category->id) }}" method="Post">
                            @csrf
                            @method('Delete')
                            <button type="submit" class="btn btn-link p-0">
                                <i class="fa-solid fa-person-digging text-danger"></i>
                            </button>
                        </form>
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
            <div class="container-fluid">
                <div class="row-4">
                    <form action="{{route('categories.create')}}">
                        <div class="d-grid gap-2 d-md-block ">
                            <button class="btn btn-primary" type="submit">Cоздать</button>
                        </div>
                    </form>
                </div>

{{--                Название таблицы--}}
                <div class="card-header">
                    <h3 class="card-title"><ya-tr-span data-index="54-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Responsive Hover Table" data-translation="Адаптивная таблица Наведения курсора мыши" data-ch="0" data-type="trSpan" style="visibility: initial !important;">Категории</ya-tr-span></h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Поиск">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

{{--                READ-All --}}


                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th><ya-tr-span data-index="55-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="ID" data-translation="ID" data-ch="0" data-type="trSpan" style="visibility: initial !important;">ID</ya-tr-span></th>
                                <th><ya-tr-span data-index="56-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="User" data-translation="Название" data-ch="0" data-type="trSpan" style="visibility: initial !important;">Название</ya-tr-span></th>
                                <th><ya-tr-span data-index="57-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Date" data-translation="Дата" data-ch="0" data-type="trSpan" style="visibility: initial !important;">Дата</ya-tr-span></th>
                                <th><ya-tr-span data-index="57-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Date" data-translation="Дата" data-ch="0" data-type="trSpan" style="visibility: initial !important;">Изменить</ya-tr-span></th>
                                <th><ya-tr-span data-index="57-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Date" data-translation="Дата" data-ch="0" data-type="trSpan" style="visibility: initial !important;">Удалить</ya-tr-span></th>

                             </tr>
                            </thead>
                            <tbody>



                            <tr>
                                <td>{{$category->id}}</td>
                                <td><ya-tr-span data-index="70-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Mike Doe" data-translation="Майк Доу" data-ch="0" data-type="trSpan" style="visibility: initial !important;">{{$category->title}}</ya-tr-span></td>
                                <td>{{$category->created_at}}</td>

                                <td><a href="{{route('tags.edit',$category->id)}}"><i class="fa-solid fa-file-lines"></i></a></td><td>
                                    <form action="{{ route('tags.delete', $category->id) }}" method="Post">
                                        @csrf
                                        @method('Delete')
                                        <button type="submit" class="btn btn-link p-0">
                                            <i class="fa-solid fa-person-digging text-danger"></i>
                                        </button>
                                    </form>
                                </td>

                            </tr>
                            </tbody>

                        </table>
                    </div>


                <!-- Small boxes (Stat box) -->

                <!-- ./col -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
