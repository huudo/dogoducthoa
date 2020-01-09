@extends('layouts.master')
@section('title')
    Đồ gỗ Đức Thỏa
@endsection
@section('content')
    <div class="header-empty-space"></div>
    <div class="slider-wrapper">
        <div class="swiper-button-prev visible-lg"></div>
        <div class="swiper-button-next visible-lg"></div>
        <div class="swiper-container" data-parallax="1" data-auto-height="1">
           <div class="swiper-wrapper">
                <div class="swiper-slide swiper-slide-01">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="cell-view page-height">
                                    
                                    <div data-swiper-parallax-x="-500">
                                        <h1 class="h1">Bền đẹp - Chất lượng</h1>
                                        <div class="title-underline left"><span></span></div>
                                    </div>
                                    <div data-swiper-parallax-x="-400">
                                        <div class="simple-article size-4 white">Chúng tôi sẽ lựa chọn loại gỗ tốt nhất và sản xuất tỉ mỉ từng chi tiết sản phẩm cho bạn dù là nhỏ nhất.</div>
                                        <div class="col-xs-b30"></div>
                                    </div>
                                    <div data-swiper-parallax-x="-300">
                                        <div class="buttons-wrapper">
                                            <a class="button size-2 style-2" href="">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="#" alt=""></span>
                                                    <span class="text">Chi tiết</span>
                                                </span>
                                            </a>
                                            <a class="button size-2 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><i class="fa fa-cart-plus"></i></span>
                                                    <span class="text">Chọn mua</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-b80 col-sm-b80"></div>
                                </div>
                            </div>
                        </div>
                        <div class="empty-space col-xs-b80 col-sm-b0"></div>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-02">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="cell-view page-height">
                                    <div class="col-xs-b40 col-sm-b80"></div>
                                    <div data-swiper-parallax-x="-500">
                                        <h1 class="h1">uy tín - trách nhiệm</h1>
                                        <div class="title-underline left"><span></span></div>
                                    </div>
                                    <div data-swiper-parallax-x="-400">
                                        <div class="simple-article size-4 white">Mang đồ gỗ đến với mỗi gia đình, bằng việc cung cấp các sản phẩm chất lượng, dịch vụ và giá cả tốt nhất.</div>
                                        <div class="col-xs-b30"></div>
                                    </div>
                                    <div data-swiper-parallax-x="-300">
                                        <div class="buttons-wrapper">
                                            <a class="button size-2 style-2" href="">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="#" alt=""></span>
                                                    <span class="text">Chi tiết</span>
                                                </span>
                                            </a>
                                            <a class="button size-2 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><i class="fa fa-cart-plus"></i></span>
                                                    <span class="text">Chọn mua</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-b40 col-sm-b80"></div>
                                </div>
                            </div>
                        </div>
                        <div class="empty-space col-xs-b80 col-sm-b0"></div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <div class="grey-background">
        <div class="empty-space col-xs-b20 col-sm-b30"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-12 col-md-push-2">
                    <div class="tabs-block">
                        <div class="tab-entry visible">
                            <div class="row nopadding">
                                @foreach ($products as $product)
                                <div class="col-sm-3 col-md-2">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <!-- <div class="simple-article size-1 color col-xs-b5"><a href="#">{{$product->title}}</a></div> -->
                                            <div class="h6 animate-to-green"><a href="{{route('product.getDetailProduct',['id'=>$product->slug])}}">{{$product->title}}</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="{{url('storage/app/'.$product->images->first()->path_url) }}" alt="{{$product->title}}" />
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="{{route('product.getDetailProduct',['id'=>$product->slug])}}">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><i class="fas fa-eye"></i></span>
                                                            <span class="text">Chi tiết</span>
                                                        </span>
                                                    </a>
                                                    <a class="button size-2 style-3 add-to-card" href="#" data-href = "/add-to-cart/{{$product->id}}">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><i class="fa fa-cart-plus"></i></span>
                                                            <span class="text">Chọn mua</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 dark">Giá: {{number_format($product->price,0)}} VNĐ</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">
                                                <?php echo substr(strip_tags($product->description),0,100) ; ?>
                                            </div>                                        
                                        </div>
                                    </div>  
                                </div>
                                @endforeach

                            </div>
                            <div class="row nopadding">
                                <div class="pagination-row" style="text-align: center;">
                                    {{ $products->links() }}
                                </div>
                            </div>
                        </div>
                    </div>

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

                    <div class="swiper-container arrows-align-top" data-breakpoints="1" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lt-slides="2" data-slides-per-view="2">
                        <div class="h4 swiper-title">Sản phẩm yêu thích</div>
                        <div class="empty-space col-xs-b20"></div>
                        <div class="swiper-button-prev style-1"></div>
                        <div class="swiper-button-next style-1"></div>
                        <div class="swiper-wrapper">
                            @foreach($hot_products as $product)
                            <div class="swiper-slide">
                                <div class="product-shortcode style-3">
                                    <div class="simple-article size-5 grey col-xs-b20">GIÁ TỐT: <span class="color">{{number_format($product->price,0)}} VNĐ</span></div>
                                    <div class="products-line col-xs-b25">
                                        <div class="row">
                                            <div class="product-shortcode style-1">
                                                <div class="preview">
                                                    <img src="{{url('storage/app/'.$product->images->first()->path_url) }}" alt="{{$product->title}}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-container" data-loop="1" data-touch="0">
                                        <div class="swiper-button-prev style-1"></div>
                                        <div class="swiper-button-next style-1"></div>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="" alt="" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h6 animate-to-green"><a href="#">{{$product->title}}</a></div>
                                    <div class="empty-space col-xs-b10"></div>
                                    <div class="description">
                                        <div class="simple-article size-2"><?php echo substr(strip_tags($product->description),0,200) ; ?></div>
                                    </div>
                                    <div class="empty-space col-xs-b20"></div>
                                    <div class="preview-buttons">
                                        <div class="buttons-wrapper">
                                            <a class="button size-2 style-2" href="{{route('product.getDetailProduct',['id'=>$product->slug])}}">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="" alt=""></span>
                                                    <span class="text">Chi tiết</span>
                                                </span>
                                            </a>
                                            <a class="button size-2 style-3 add-to-card" href="#" data-href = "/add-to-cart/{{$product->id}}">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="" alt=""></span>
                                                    <span class="text">Chọn mua</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination relative-pagination visible-xs"></div>
                    </div>
                    <div class="empty-space col-xs-b35 col-md-b70"></div>
                </div>
                <div class="col-md-2 col-md-pull-10 col-sm-pull-12 hidden-sm">
                    @include('partials.left-bar')
                </div>
            </div>
        </div>
    </div>
@endsection