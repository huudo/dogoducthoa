<!-- FOOTER -->
<?php 
    use App\News;
    $newsFooter = News::take(3)->orderBy('id','DESC')->get();
?>
<footer>
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-sm-6 col-md-3 col-xs-b30 col-md-b0">
                    <img id="logo" src="{{asset('public/images/logo.png')}}" alt="Đồ gỗ Đức Thỏa - Thái Bình" />
                    <div class="empty-space col-xs-b20"></div>
                    <div class="simple-article size-2 light fulltransparent">Đồ gỗ Đức Thỏa, cung cấp các sản phẩm đồ gỗ chất lượng cao, uy tín. Bán bàn ghế, tủ, giường, trường kỷ gỗ đẹp, bền </div>
                    <div class="empty-space col-xs-b20"></div>
                    <div class="footer-contact"><i class="fa fa-mobile" aria-hidden="true"></i> Liên hệ: <a href="tel:0986131268">0986 131 268</a></div>
                    <div class="footer-contact"><i class="fa fa-envelope"></i> Email: <a href="mailto:longkhang.tb@gmail.com">longkhang.tb@gmail.com</a></div>
                    <div class="footer-contact"><i class="fa fa-map-marker" aria-hidden="true"></i> Địa chỉ: <a href="#">Lô 6 cụm làng nghề Nguyên Xá, Vũ Thư, Thái Bình</a></div>
                </div>
                <div class="clear visible-sm"></div>
                <div class="col-sm-6 col-md-3 col-xs-b30 col-sm-b0">
                    <h6 class="h6 light">Bài viết</h6>
                    <div class="empty-space col-xs-b20"></div>
                    @foreach($newsFooter as $new)
                    <div class="footer-post-preview clearfix">
                        <a class="image" href="{{route('newsDetail',['slug' => $new->slug])}}">
                            <img src="{{url('public/uploads/'.$new->path_url) }}" alt="{{$new->name}}" />
                        </a>
                        <div class="description">
                            <div class="date">{{$new->created_at}}</div>
                            <a class="title">{{$new->name}}</a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-sm-6 col-md-6">
                    <h6 class="h6 light">Bản đồ</h6>
                    <div class="empty-space col-xs-b20"></div>
                    <div class="map-area">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12578.62388321654!2d106.28715078910176!3d20.39742901423173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135e384b1549f9b%3A0x50176fd7c732a62c!2zTmd1ecOqbiBYw6EsIFbFqSBUaMawIERpc3RyaWN0LCBUaGFpIEJpbmgsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1557288695608!5m2!1sen!2s" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="row">
                <div class="col-lg-8 col-xs-text-center col-lg-text-left col-xs-b20 col-lg-b0">
                    <div class="copyright">&copy; 2015 All rights reserved. Development by <a href="http://themeforest.net/user/unionagency" target="_blank">UnionAgency</a></div>
                    <div class="follow">
                        <a class="entry" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="entry" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="entry" href="#"><i class="fa fa-linkedin"></i></a>
                        <a class="entry" href="#"><i class="fa fa-google-plus"></i></a>
                        <a class="entry" href="#"><i class="fa fa-pinterest-p"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-text-center col-lg-text-right">
                    <div class="footer-payment-icons">
                        <a class="entry"><img src="#" alt="" /></a>
                        <a class="entry"><img src="#" alt="" /></a>
                        <a class="entry"><img src="#" alt="" /></a>
                        <a class="entry"><img src="#" alt="" /></a>
                        <a class="entry"><img src="#" alt="" /></a>
                        <a class="entry"><img src="#" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
