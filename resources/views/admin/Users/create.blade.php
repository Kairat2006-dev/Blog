@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Создать пользователя</h1>
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
        <div class="container-fluid">
            <div class="row-4">

                <form action="{{route('users.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Имя</label>
                        <input type="text" class="form-control" placeholder="Enter name" name="name">
                        @error('title')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Почта</label>
                        <input type="text" class="form-control" placeholder="Enter email" name="email">
                        @error('email')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>


                    <div class="form-group">
                    <label>Роли</label>
                    <select class="form-control" name="role">
                        @foreach($roles as $id => $role)
                            <option value="{{$id}}" {{$id == old('role')?' selected':''}}>
                                {{$role}}</option>
                        @endforeach
                    </select>
                     </div>


                    <input type="submit" class="btn btn-primary" value="Добавить">
                </form>
            </div>
            <!-- Small boxes (Stat box) -->


        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
