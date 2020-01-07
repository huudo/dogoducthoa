@extends('layouts.master')
@section('title')
    Đồ gỗ Đức Thỏa - Hỗ trợ
@endsection
<style type="text/css">
	.list-news {
		float: left;
		width: 100%;
		border-bottom: 1px solid #CCC;
		padding-bottom: 20px;
		margin-bottom: 20px;
	}
	.list-news .preview-new img{
		width: 100%;
		height: auto;
	}
	.list-news .detail-news h2{
		font-size: 20px;
    	color: #d46316;
    	margin-bottom: 10px;
	}
	.list-news .detail-news p{
		line-height: 1.2;
	}
	.no-padding{
		padding: 0px !important;
		padding-left: 0px !important;
		padding-right: 0px !important
	}
	.no-margin{
		margin-left: 0px !important;
		margin-right: 0px !important
	}
	.list-news .detail-news h3{
		font-size: 14px;
    	color: #d46316;
    	line-height: 1.5
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
<div class="header-empty-space"></div>
<div class="grey-background">
    <div class="empty-space col-xs-b20 col-sm-b30"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            	<div class="title-news">
            		<h1 class="title-h1">Mua hàng thành công</h1>
            		<h2>Cám ơn quý khách hàng đã lựa chọn và tin tưởng sản phẩm của chúng tôi. Đồ gỗ Đức Thỏa sẽ liên lạc và hỗ trợ quý khách sớm nhất</h2>
            	</div>
            </div>
        </div>
    </div>
    <div class="empty-space col-xs-b35 col-md-b70"></div>
</div>

@endsection