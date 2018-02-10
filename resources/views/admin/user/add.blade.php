@extends('admin.layout.index')

@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm
                            <small>Thành viên</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(session('notifi'))
                            <div class="alert alert-success">
                                {{ session('notifi') }}
                            </div>
                        @endif
                         <form action="admin/user/add" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" name="name" placeholder="Nhập họ tên" value="{{old('name')}}" />
                                 @if ($errors->has('name'))
                                    <div class="alert alert-danger">{{$errors->first('name')}}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control"  type="email" name="email" placeholder="Nhập địa chỉ email" value="{{old('email')}}" />
                                 @if ($errors->has('email'))
                                    <div class="alert alert-danger">{{$errors->first('email')}}</div>
                                @endif
                            </div>
                             <div class="form-group">
                                <label>Mật khẩu</label>
                                <input class="form-control" type="password" name="password" placeholder="Nhập mật khẩu" value="{{old('password')}}" />
                                 @if ($errors->has('password'))
                                    <div class="alert alert-danger">{{$errors->first('password')}}</div>
                                @endif
                            </div>
                             <div class="form-group">
                                <label>Xác nhận mật khẩu </label>
                                <input class="form-control"  type="password" name="password2" placeholder="Xác nhận mật khẩu" value="{{old('password2')}}" />
                                 @if ($errors->has('password2'))
                                    <div class="alert alert-danger">{{$errors->first('password2')}}</div>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Làm lại</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

@endsection