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
                    <div class="entry"><b>email:</b> <a href="mailto:huudt.dev@gmail.com">huudt.dev@gmail.com</a></div>
                </div>
                <div class="col-md-7 col-md-text-right">
                    @if(!Auth::check())
                    <div class="entry"><a class="open-popup " data-toggle="modal" data-target="#myModalLogin" data-rel="1">
                        <b>Đăng nhập</b></a>&nbsp; or &nbsp;<a class="open-popup" data-rel="2"><b>Đăng ký</b></a>
                    </div>
                    @else
                    <div class="entry">
                        <b>{{Auth::user()->name}}</b>
                    </div>
                    @endif
                    <div class="entry hidden-xs hidden-sm cart">
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
                    <a id="logo" href="index1.html"><img src="#" alt="" /></a>  
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
                                                @foreach($category->subcategories as $sub)                    <a href="#">{{$sub->description}}</a>
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="services1.html">Liên hệ</a>
                                </li>
                                <li>
                                    <a href="blog3.html">blog</a>
                                    <div class="menu-toggle"></div>
                                    <ul>
                                        <li>
                                            <a href="blog3.html">Blog Landing Pages</a>
                                            <div class="menu-toggle"></div>
                                            <ul>
                                                <li><a href="blog3.html">Blog Landing 1</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="blogdetail1.html">Blog Detail Pages</a>
                                            <div class="menu-toggle"></div>
                                            <ul>
                                                <li><a href="blogdetail1.html">Blog Detail 1</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact1.html">contact</a></li>
                            </ul>
                            <div class="navigation-title">
                                Navigation
                                <div class="hamburger-icon active">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </nav>
                    </div>
                   <!--  <div class="header-bottom-icon toggle-search"><i class="fa fa-search" aria-hidden="true"></i></div> -->
                    <div class="header-bottom-icon visible-rd"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
                    <!-- <div class="header-bottom-icon visible-rd">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                        <span class="cart-label">5</span>
                    </div> -->
                </div>
            </div>
            <!-- <div class="header-search-wrapper">
                <div class="header-search-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
                                <form>
                                    <div class="search-submit">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                        <input type="submit"/>
                                    </div>
                                    <input class="simple-input style-1" type="text" value="" placeholder="Enter keyword" />
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="button-close"></div>
                </div>
            </div> -->
        </div>
    </div>
</header>