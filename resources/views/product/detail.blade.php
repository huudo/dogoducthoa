@extends('layouts.master')
@section('meta-tag')
<?php 
    $img = $product->images;
    $imgContent = $img[0];
?>
    <meta property="og:url"   content="{{route('product.getDetailProduct',['id' => $product->id])}}" />
    <meta property="og:type"  content="Sản phẩm" />
    <meta property="og:title" content="{{$product->title}}" />
    <meta property="og:description" content=" <?php echo substr(strip_tags($product->description),0,300) ;?>" />
    <meta property="og:image" content="{{url('storage/app/'.$imgContent->path_url)}}" />
@endsection
@section('title')
    {{$product->title}}

@endsection
@section('content')
    <div class="grey-background">
        <div class="header-empty-space"></div>
        <div class="container">
            <div class="row">
                <div class="empty-space col-xs-b15 col-sm-b30"></div>
                <div class="col-md-9 col-md-push-3">
                    <section class="info-product-sc">
                        <div class="row">
                            <div class="col-sm-6 col-xs-b30 col-sm-b0">
                                <div class="main-product-slider-wrapper swipers-couple-wrapper">
                                    <div class="swiper-container swiper-control-top">
                                        <div class="swiper-button-prev hidden"></div>
                                        <div class="swiper-button-next hidden"></div>
                                        <div class="swiper-wrapper">
                                            @foreach($product->images as $image)
                                            <div class="swiper-slide">
                                                <div class="swiper-lazy-preloader"></div>
                                                <div class="product-big-preview-entry swiper-lazy" data-background="{{url('storage/app/'.$image->path_url) }}"></div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="4" data-slides-per-view="5" data-center="1" data-click="1">
                                        <div class="swiper-button-prev hidden"></div>
                                        <div class="swiper-button-next hidden"></div>
                                        <div class="swiper-wrapper">
                                            @foreach($product->images as $image)
                                                <div class="swiper-slide">
                                                    <div class="product-small-preview-entry">
                                                        <img src="{{url('storage/app/'.$image->path_url) }}" style="width: 80px;height: 80px;object-fit: cover;" alt="" />
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="simple-article size-3 grey col-xs-b5">{{$product->sub_categories->description}}</div>
                                <div class="h3 col-xs-b25">{{$product->title}}</div>
                                <div class="row col-xs-b25">
                                    <div class="col-sm-6">
                                        <div class="simple-article size-5 grey">GIÁ: <span class="color">{{number_format($product->price,0)}} VNĐ</span></div>        
                                    </div>
                                </div>
                                <div class="simple-article size-3 col-xs-b30">
                                    <?php echo substr(strip_tags($product->description),0,300) ;?>
                                </div>
                                <div class="row col-xs-b40">
                                    <div class="col-sm-3">
                                        <div class="h6 detail-data-title size-1">Số lượng:</div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="quantity-select">
                                            <span class="minus2"></span>
                                            <span class="number">1</span>
                                            <span class="plus2"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m5 col-xs-b40">
                                    <div class="col-sm-6 col-xs-b10 col-sm-b0">
                                        <a class="button size-2 style-3 add-to-card" href="#" data-href="/add-to-cart/5">
                                            <span class="button-wrapper">
                                                <span class="icon"><i class="fa fa-cart-plus"></i></span>
                                                <span class="text">Chọn mua</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="h6 detail-data-title size-2">Chia sẻ:</div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="follow light" style="padding-top: 5px;">
                                           <!-- Your share button code -->
                                              <div class="fb-share-button" 
                                                data-href="{{route('product.getDetailProduct',['id' => $product->id])}}" 
                                                data-layout="button_count">
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="empty-space col-xs-b35 col-md-b30"></div>
                    <section class="description-sc">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="detail-description">
                                    <div class="title-description">
                                        <h2>THÔNG TIN CHI TIẾT</h2>
                                    </div>
                                    <div class="content-description">
                                        <?php echo $product->description ;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="empty-space col-xs-b35 col-md-b70"></div>

                    <div class="swiper-container arrows-align-top">
                        <div class="h4 swiper-title">Ảnh sản xuất</div>
                        <div class="empty-space col-xs-b20"></div>
                        <div class="swiper-button-prev style-1"></div>
                        <div class="swiper-button-next style-1"></div>
                        <div class="swiper-wrapper album-store">
                            <div class="swiper-slide">
                                <div class="banner-shortcode style-1">
                                    <div class="background" style="background-image: url({{asset('public/images/store/sx000.jpg')}});"></div>
                                    <div class="description valign-middle">
                                        <div class="valign-middle-content">
                                            <div class="simple-article size-3 light fulltransparent">ĐỒ GỖ</div>
                                            <div class="banner-title">CHẤT LƯỢNG</div>
                                            <div class="h4 light">Cửa hàng bán đồ gỗ uy tín</div>
                                            <div class="empty-space col-xs-b50"></div>
                                        </div>
                                        <div class="empty-space col-xs-b60 col-sm-b0"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="banner-shortcode style-1">
                                    <div class="background" style="background-image: url({{asset('public/images/store/sx02.jpg')}});"></div>
                                    <div class="description valign-middle">
                                        <div class="valign-middle-content">
                                            <div class="simple-article size-3 light fulltransparent">ĐỒ GỖ</div>
                                            <div class="banner-title">CHẤT LƯỢNG</div>
                                            <div class="h4 light">Cửa hàng bán đồ gỗ uy tín</div>
                                            <div class="empty-space col-xs-b50"></div>
                                        </div>
                                        <div class="empty-space col-xs-b60 col-sm-b0"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="banner-shortcode style-1">
                                    <div class="background" style="background-image: url({{asset('public/images/store/sx0031.jpg')}});"></div>
                                    <div class="description valign-middle">
                                        <div class="valign-middle-content">
                                            <div class="simple-article size-3 light fulltransparent">ĐỒ GỖ</div>
                                            <div class="banner-title">CHẤT LƯỢNG</div>
                                            <div class="h4 light">Cửa hàng bán đồ gỗ uy tín</div>
                                            <div class="empty-space col-xs-b50"></div>
                                        </div>
                                        <div class="empty-space col-xs-b60 col-sm-b0"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="banner-shortcode style-1">
                                    <div class="background" style="background-image: url({{asset('public/images/store/sx0033.jpg')}});"></div>
                                    <div class="description valign-middle">
                                        <div class="valign-middle-content">
                                            <div class="simple-article size-3 light fulltransparent">ĐỒ GỖ</div>
                                            <div class="banner-title">CHẤT LƯỢNG</div>
                                            <div class="h4 light">Cửa hàng bán đồ gỗ uy tín</div>
                                            <div class="empty-space col-xs-b50"></div>
                                        </div>
                                        <div class="empty-space col-xs-b60 col-sm-b0"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination visible-xs"></div>
                    </div>

                    <div class="empty-space col-xs-b35 col-md-b70"></div>
                    <div class="empty-space col-md-b70"></div>
                </div>
                <div class="col-md-3 col-md-pull-9 hidden-xs">
                    @include('partials.left-bar')
                </div>
            </div>
        </div>
    </div>
        <!-- Load Facebook SDK for JavaScript -->
    <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>


    <style type="text/css">
        .categories-menu{
            background: #fff;
        }
        .categories-menu .h4 {
            padding-top: 20px;
            padding-left: 20px;
        }
        .info-product-sc,.description-sc{
            background: #fff;
            padding: 10px;
            padding-bottom: 20px;
        }
        .detail-description .title-description h2{
            font-size: 18px;
            padding: 10px 0px;
            border-bottom: 1px solid #ccc;
        }
        .detail-description .content-description {
            padding-top: 20px;
            padding-left: 20px;
        }
        .detail-description .content-description img{
            max-width: 100%
        }
        .detail-description .content-description p{
            padding-top: 10px;
            line-height: 1.5;
        }
    </style>
@endsection