@extends('admin.layouts.admin')
@section('content')
    
<div class="container-fluid  dashboard-content">
    
    <div class="page-header">
        <h2 class="pageheader-title">Tạo bài viết</h2>
    </div>
    <div class="row">
        <div class="list-menu">
            <h3 style="width: 100%; padding: 10px 20px;">Danh sách bài viết</h3>
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Tên</th>
                        <th>Ảnh đại diện</th>
                        <th>Thao tác</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($news as $new)
                        <tr>
                            <td>
                                {{$new->name}}
                            </td>
                            <td>
                                <img src="{{asset('public/uploads/'.$new->path_url)}}">
                            </td>
                            <td>
                                <a href="{{route('admin.deleteNews',['id' => $new->id])}}"><i class="fa fa-trash-alt"></i></a>
                                <a href="{{route('admin.editNews',['id' => $new->slug])}}"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <form action="{{route('admin.createNews')}}" method = "POST" enctype="multipart/form-data" style="width: 100%">       
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <h3>Ảnh bài viết</h3>
                <input type="file" class="form-control" name="photo" required />
            </div>
        </div>
        <div class="col-md-12">
            <div class="sub-products">
                <h3>Thông tin chi tiết</h3>
                <div class="form-group">
                    <label>Tiêu đề bài viết</label>
                    <input type="text" name="name" class="form-control"  placeholder="Nhập tiêu đề" required>
                </div>
                <div class="form-group">
                    <label>Nội dung bài viết</label>
                    <textarea class="form-control" id="new_content" name="content"  rows="3" required></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            {{csrf_field()}}
            <button type="submit" class="btn btn-primary">Tạo mới</button>
        </div>
    </div>
    </form>
</div>
<script src="{{ asset('public/ckeditor/ckeditor.js') }}" charset="utf-8"></script>
<script>
CKEDITOR.replace( 'new_content', {
        filebrowserBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    } );
</script>
@endsection