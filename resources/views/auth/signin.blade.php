@extends('layouts.master')
<style type="text/css">
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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="title-h1">Đăng nhập để mua hàng</h1>
                </div>
                <div class="card-body">
                     <form action="{{ route('signin') }}" method="post">
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{ csrf_field() }}
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Đăng nhập
                                </button>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <h2>Đăng ký nếu chưa có tài khoản <a href="{{route('signup')}}" style="color:green">Đăng ký</a> ?</h2>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection