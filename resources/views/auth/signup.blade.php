@extends('layouts.master')
<style type="text/css">
    .invalid-feedback{
        color: red;
        font-weight: normal !important;
        font-size: 12px;
        margin-top: 5px;
    }
    .title-h1{
        font-size: 24px;
        padding-left: 10px;
        border-left: 10px solid #f6951d;
        position: relative;
        line-height: 1.2;
        margin-bottom: 20px;
        margin-top: 26px;
        text-transform: uppercase;
        color: #cc0000;
    }
</style>
@section('content')
<div class="col-xs-b40 col-sm-b80"></div>
<div class="header-empty-space"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="title-h1">Tạo tài khoản để mua hàng</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('signup') }}" method="post">
                        <div class="form-group row">
                            <label for="full-name" class="col-sm-4 col-form-label text-md-right">Họ tên</label>

                            <div class="col-md-6">
                                <input id="full-name" type="text" class="form-control" name="full-name"  required >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required autofocus>
                            </div>
                            @if ($errors->has('email'))
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                                <p class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </p>
                            </div>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">Số điện thoại</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control" name="phone" required autofocus>
                            </div>
                            @if ($errors->has('phone'))
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                                <p class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </p>
                            </div>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Mật khẩu</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Nhập lại mật khẩu</label>

                            <div class="col-md-6">
                                <input id="re-password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="re-password" required>
                            </div>
                            @if ($errors->has('password'))
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                                <p class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </p>
                            </div>
                            @endif
                        </div>
                        {{ csrf_field() }}
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Đăng ký
                                </button>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <h2>Đăng nhập nếu đã có tài khoản <a href="{{route('signin')}}" style="color:green">Đăng nhập</a> ?</h2>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection