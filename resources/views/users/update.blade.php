@extends('layouts.app')
@section('title', 'Thay doi thong tin')
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
                            <h3 class="card-title">Thay đổi thông tin người dùng</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('users.update', $users[0]->id) }}" class="form" method="post">
                                @csrf
                                <div class="form-group">
                                    <lable>Tên</lable>
                                    <input type="text" class="form-control" name="name" value="{{ $users[0]->name }}">
                                </div>
                                <div class="form-group">
                                    <lable>Email</lable>
                                    <input type="email" class="form-control" name="email" value="{{ $users[0]->email }}">
                                </div>
                            
                                <button type="submit" class="btn btn-primary">Update</button>
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
