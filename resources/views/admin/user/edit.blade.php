@extends('admin.layout.index')

@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa
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
                         <form action="admin/user/edit/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" name="name" placeholder="Nhập họ tên" value="{{ $user->name }}" />
                                 @if ($errors->has('name'))
                                    <div class="alert alert-danger">{{$errors->first('name')}}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control"  type="email" name="email" placeholder="Nhập địa chỉ email" value="{{ $user->email }}" />
                                 @if ($errors->has('email'))
                                    <div class="alert alert-danger">{{$errors->first('email')}}</div>
                                @endif
                            </div>
                             <div class="form-group">
                                <input type="checkbox" name="ChangePass" id="check_change">
                                <label>Đổi mật khẩu</label>
                                <input class="form-control password" type="password" name="password" placeholder="Nhập mật khẩu"
                                disabled="" 
                                  />
                                 @if ($errors->has('password'))
                                    <div class="alert alert-danger">{{$errors->first('password')}}</div>
                                @endif
                            </div>
                             <div class="form-group">
                                <label>Xác nhận mật khẩu </label>
                                <input class="form-control password"  type="password" name="password2" placeholder="Xác nhận mật khẩu" 
                                disabled=""
                                 />
                                 @if ($errors->has('password2'))
                                    <div class="alert alert-danger">{{$errors->first('password2')}}</div>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Làm lại</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $("#check_change").change(function(){
                if($(this).is(":checked"))
                {
                    $(".password").removeAttr('disabled');
                }
                else
                {
                    $(".password").attr('disabled','');
                }
            });
        });
    </script>
@endsection 