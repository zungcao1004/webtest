@extends('admin.back.master')
@section('content')
<h5 style="font-weight: bold">Sửa Danh Mục</h5>
<div class="container mt-3">
    <div class="row">
        <div class="col-sm-10">
                <form action="{{ route('admincat.update',$danhmuc->iddm) }}" method="post">
                  @csrf
                  @method('PUT')
                  <div class="form-group">
                    <label for="categoryname" style="font-weight: bold">Tên Danh Mục:</label>
                    <input type="text" name="tendm" id="tendm" class="form-control mt-3" value={{ $danhmuc->tendm }}>
                  </div>
                  <div class="form-group mt-3">
                    <input class="btn btn-info btn-sm" type="submit" value="Lưu">
                  </div>
                </form>
        </div>
    </div>
</div>
@endsection