@extends('admin.back.master')
@section('content')
    <h5 style="font-weight: bold">Thêm Sản Phẩm</h5>
    <div class="container mt-2">
        <div class="row">
            <div class="col-sm-10">
                {{-- error --}}
                @include('error.error')
                <form action="{{ route('adminpro.store') }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="tendm" style="font-weight: bold">Tên danh mục:</label>
                        <input type="text" name="tendm" id="tendm" class="form-control mt-3">
                    </div>
                    <div class="form-group mb-3">
                        <label for="masp" style="font-weight: bold">Code:</label>
                        <input type="text" name="masp" id="masp" class="form-control mt-3">
                    </div>
                    <div class="form-group mb-3">
                        <label for="tensp" style="font-weight: bold">Tên sản phẩm:</label>
                        <input type="text" name="tensp" id="tensp" class="form-control mt-3">
                    </div>
                    <div class="form-group mb-3">
                        <label for="imgsp" style="font-weight: bold">Chọn hình ảnh:</label>
                        <input type="file" name="imgsp" id="imgsp" class="form-control mt-3">
                    </div>
                    <div class="form-group mb-3">
                        <label for="gia" style="font-weight: bold">Giá:</label>
                        <input type="number" step="0.1" name="gia" id="gia" class="form-control mt-3">
                    </div>
                    {{-- chua xong --}}
                    <div class="form-group">
                        <input class="btn btn-info btn-sm" type="submit" value="Thêm Danh Mục">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
