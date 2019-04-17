@extends('layouts.master')
@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="header-empty-space"></div>
    <div class="grey-background">
        <div class="empty-space col-xs-b20 col-sm-b30"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-push-3">
                    <div class="tabs-block">
                        <div class="tab-entry visible">
                            <div class="row nopadding">
                                @foreach ($subCategory->products as $product)
                                <div class="col-sm-4">
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
                        </div>
                        <div class="tab-entry">
                            <div class="row nopadding">
                                <div class="col-sm-4">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="#" alt="" />
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
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
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="#" alt="" />
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
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
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="" alt="" />
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
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
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-entry">
                            <div class="row nopadding">
                                <div class="col-sm-4">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="#" alt="" />
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="#" alt=""></span>
                                                            <span class="text">Chi tiết</span>
                                                        </span>
                                                    </a>
                                                    <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="#" alt=""></span>
                                                            <span class="text">Chọn mua</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="" alt="" />
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="#" alt=""></span>
                                                            <span class="text">Chi tiết</span>
                                                        </span>
                                                    </a>
                                                    <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="#" alt=""></span>
                                                            <span class="text">Chọn mua</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="" alt="" />
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="#" alt=""></span>
                                                            <span class="text">Chi tiết</span>
                                                        </span>
                                                    </a>
                                                    <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="#" alt=""></span>
                                                            <span class="text">Chọn mua</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="empty-space col-xs-b35 col-md-b70"></div>     
                </div>
                <div class="col-md-3 col-md-pull-9 hidden-xs">
                    @include('partials.left-bar')
                </div>
            </div>
        </div>
    </div>
@endsection