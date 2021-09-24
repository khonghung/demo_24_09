@extends('layouts.app')
@section('title', 'Them moi nguoi dung')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DataTables</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Thêm mới người dùng</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('users.store') }}" class="form" method="post">
                                @csrf
                                <div class="form-group">
                                    <lable>Tên</lable>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <lable>Email</lable>
                                    <input type="email" class="form-control" name="email">
                                </div>

                                <div class="form-group">
                                    <lable>Group</lable>
                                   <select name="group_id">
                                       @foreach($groups as $group)
                                       <option value="{{ $group->id }}">{{ $group->name }}</option>
                                       @endforeach
                                   </select>
                                </div>

                                <div class="form-group">
                                    <lable>Mật khẩu</lable>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
