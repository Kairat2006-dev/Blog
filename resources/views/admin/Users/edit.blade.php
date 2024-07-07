@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Обновить пользователя</h1>
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
            <form action="{{route('users.update',$user->id)}}" method="POST">
                @csrf
                @method('Patch')
                <div class="form-group">
                    <label>Имя</label>
                    <input type="text" class="form-control" placeholder="Enter title" name="name"
                           value="{{$user->name}}">
                    @error('name')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Почта</label>
                    <input type="text" class="form-control" placeholder="Enter title" name="email"
                           value="{{$user->email}}">
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
                <div class="form-group">
                    <input type="hidden" name="user_id" value="{{$user->id}}">
                </div>
                <input type="submit" class="btn btn-primary" value="Обновить">
            </form>


            <!-- Small boxes (Stat box) -->

            <!-- ./col -->

        </section>
        <!-- /.content -->
    </div>
@endsection
