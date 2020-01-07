@extends('layouts.master')
@section('title')
    Đồ gỗ Đức Thỏa - Bài viết
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
	.banner-shortcode.style-2{
		max-height: 400px;
	}
	.categories-title, .categories-menu{
		display: none;
	}
</style>
@section('content')
<div class="header-empty-space"></div>
<div class="grey-background">
    <div class="empty-space col-xs-b20 col-sm-b30"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
            	<div class="title-news">
            		<h1 class="title-h1">Danh sách bài viết</h1>
            	</div>
            	@foreach($news as $new)
            	<div class="row">
            		<div class="list-news">
            			<div class="col-md-3 no-padding">
            				<div class="preview-new">
            					<img src="{{url('public/uploads/'.$new->path_url) }}" alt="{{$new->name}}" >
            				</div>
            			</div>
            			<div class="col-md-9">
            				<div class="detail-news">
            					<h2><a href="{{route('newsDetail',['slug' => $new->slug])}}">{{$new->name}}</a></h2>
            					<p>
            						<?php 
            							echo strip_tags(substr($new->content,0,700 )). '...'; ;
            						?>
            					</p>
            				</div>
            			</div>
            		</div>
            	</div>
            	@endforeach
            </div>
            <div class="col-md-3 group-sort-new">
            	<div class="title-news">
            		<h1 class="title-h1">Bài viết mới</h1>
            	</div>
            	@foreach($news as $new)
            	<div class="row no-padding no-margin">
            		<div class="list-news">
            			<div class="col-md-4 no-padding">
            				<div class="preview-new">
            					<img src="{{url('public/uploads/'.$new->path_url) }}" alt="{{$new->name}}">
            				</div>
            			</div>
            			<div class="col-md-8">
            				<div class="detail-news">
            					<h3><a href="{{route('newsDetail',['slug' => $new->slug])}}">{{$new->name}}</a></h3>
            				</div>
            			</div>
            		</div>
            	</div>
            	@endforeach
            	@include('partials.left-bar')
            </div>
        </div>
    </div>
    <div class="empty-space col-xs-b35 col-md-b70"></div>
</div>

@endsection