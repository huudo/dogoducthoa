@extends('admin.layouts.admin')

@section('content')
<div class="container-fluid  dashboard-content">
	<div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        	<div class="page-header">
                <h2 class="pageheader-title">{{$sub->description}}</h2>
                <p class="pageheaders-text">Danh sách sản phẩm thuộc <strong style="text-transform: uppercase;">{{$sub->description}}</strong>.</p>
                <!-- <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
                        </ol>
                    </nav>
                </div> -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProduct" style="float: right;margin-bottom: 10px; margin-top: 30px;">
					<i class="fas fa-plus"></i> Thêm sản phẩm
				</button>
                <div class="form-group has-error">
                    @if ( $errors->any() )
                        <h3 class="text-danger">Đăng sản phẩm không thành công</h3>
                        @foreach ($errors->all() as $error)
                            <span class="text-danger">{{ $error }}</span>
                        @endforeach   
                    @endif  
                </div>
                  
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered" style="text-align: center;">
                <thead>
                    <tr>
                        <th style="max-width: 50px">Mã SP</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Giá nhập</th>
                        <th>Giá bán</th>
                        <th>Mô tả</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td><a href="{{route('product.getDetailProduct',['id'=>$product->slug])}}">{{$product->title}}</a></td>
                            <td><img src="{{url('storage/app/'.$product->images->first()->path_url) }}" style="width: 80px; height: auto;"></td>
                            <td>{{number_format($product->price_in)}}</td>
                            <td>{{number_format($product->price)}}</td>
                            <td><?php echo substr(strip_tags($product->description),0,100) ;?></td>
                            <td>
                                <a href="{{route('admin.editProduct',['id'=>$product->id])}}">
                                    <span class="edit-product"><i class="fas fa-edit"></i></span>
                                </a>
                                <a href="{{route('admin.deleteProduct',['id'=>$product->id])}}">
                                    <span class="delete-product"><i class="fas fa-trash"></i></span>
                                </a>                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="addProductLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm cho <strong style="text-transform: uppercase;">{{$sub->description}}</strong></h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		</div>
       	<form action="{{route('admin.addProduct',['id'=>$sub->id])}}" method="POST" enctype="multipart/form-data">
	      	<div class="modal-body">
	       
	        	<div class="form-group">
				    <label>Tên sản phẩm</label>
				    <input type="text" name ="title" class="form-control">
				</div>
				<div class="form-group">
				    <label>Giá nhập</label>
				    <input type="text" name ="price-in" class="form-control">
				</div>
                <div class="form-group">
                    <label>Giá bán</label>
                    <input type="text" name ="price" class="form-control">
                </div>
				<div class="form-group">
				    <label>Mô tả</label>
				    <textarea name="description" id="description-editor">
                                
                    </textarea>
				</div>
				<div class="form-group">
				    <label>Ảnh sản phẩm</label>
                    <input type="file" class="form-control" name="photos[]" multiple />
				</div>
	      	</div>
	      	<div class="modal-footer">
	      		{{csrf_field()}}
		        <button type="submit" class="btn btn-primary">Tạo mới</button>
	      	</div>

      	</form>
    </div>
  </div>
</div>
<script src="{{ asset('public/ckeditor/ckeditor.js') }}" charset="utf-8"></script>
<script>
CKEDITOR.replace( 'description-editor', {
        filebrowserBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    } );
</script>
@endsection