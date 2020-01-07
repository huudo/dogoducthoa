<?php 
    use App\Category;
    $categories = Category::all();
?>
<header>
    <div class="header-top">
        <div class="content-margins">
            <div class="row">
                <div class="col-md-5 hidden-xs hidden-sm">
                    <div class="entry"><b>Liên hệ:</b> <a href="tel:0904075992">0904 075 992</a></div>
                    <div class="entry"><b>email:</b> <a href="mailto:longkhang.tb@gmail.com">hienltt.hust@gmail.com</a></div>
                </div>
                <div class="col-md-7 col-md-text-right">
                    @if(!Auth::check())
                    <!-- <div class="entry"><a class="open-popup " data-toggle="modal" data-target="#myModalLogin" data-rel="1">
                        <b>Đăng nhập</b></a>&nbsp; or &nbsp;<a class="open-popup" data-rel="2"><b>Đăng ký</b></a>
                    </div> -->
                    @else
                    <div class="entry">
                        <b>{{Auth::user()->name}}</b>
                    </div>
                    @endif
                    <div class="entry cart">
                        <a href="{{route('product.shoppingCart')}}">
                            <b class="hidden-xs">Giỏ hàng</b>
                            <span class="cart-icon">
                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                <span class="cart-label">{{ Session::has('cart') ? Session::get('cart')->totalQty : 0 }}</span>
                            </span>
                            
                        </a>
                    </div>
                    <div class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-3 col-sm-1 col-md-3">
                    <a id="logo" href="{{route('main')}}">
                        <img src="{{asset('public/images/logo.png')}}" alt="Đồ gỗ Đức Thỏa - Thái Bình" />
                    </a>  
                </div>
                <div class="col-xs-9 col-sm-11 text-right col-md-9">
                    <div class="nav-wrapper">
                        <div class="nav-close-layer"></div>
                        <nav>
                            <ul>
                                <li class="active">
                                    <a href="{{route('main')}}">Trang chủ</a>
                                </li>
                                <li>
                                    <a href="#">Giới thiệu</a>
                                </li>
                                <li class="megamenu-wrapper">
                                    <a href="#">Sản phẩm</a>
                                    <div class="menu-toggle"></div>
                                    <div class="megamenu">
                                        <div class="links">
                                            @foreach($categories as $category)
                                                @foreach($category->subcategories as $sub)                    
                                                <a href="{{route('product.getCategory',['id' =>$sub->id])}}">{{$sub->description}}</a>
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">Liên hệ</a>
                                </li>
                                <li>
                                    <a href="{{route('news')}}">Bài viết</a>
                                </li>
                            </ul>
                            <div class="navigation-title">
                                Danh mục
                                <div class="hamburger-icon active">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>