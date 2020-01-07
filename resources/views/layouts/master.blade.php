<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
    @yield('meta-tag')
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{asset('public/images/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Questrial|Raleway:700,900" rel="stylesheet">

    <link href="{{ asset('public/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/css/bootstrap.extension.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/css/swiper.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/css/sumoselect.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="{{ asset('public/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{ asset('public/js/bootstrap.min.js')}}"></script>
</head>
<body>

@include('partials.header')
<div class="main">
    @yield('content')
</div>
@include('partials.footer')
<div class="bs-example">
    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Chọn mua thành công</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Đã thêm sản phẩm vào giỏ hàng</p>
                    <p class="text-secondary"><small>Vào giỏ hàng hoặc tiếp tục mua sắm</small></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tiếp tục</button>
                    <a href="{{route('product.shoppingCart')}}" class="btn btn-primary">Vào giỏ hàng</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('public/js/swiper.jquery.min.js')}}"></script>
<script src="{{ asset('public/js/global.js')}}"></script>

<!-- styled select -->
<script src="{{ asset('public/js/jquery.sumoselect.min.js')}}"></script>

<!-- counter -->
<script src="{{ asset('public/js/jquery.classycountdown.js')}}"></script>
<script src="{{ asset('public/js/jquery.knob.js')}}"></script>
<script src="{{ asset('public/js/jquery.throttle.js')}}"></script>
<script src="{{ asset('public/js/jquery-ui.min.js')}}"></script>
<script src="{{ asset('public/js/jquery.ui.touch-punch.min.js')}}"></script>

</body>
</html>