@extends('admin.back.master')
@section('content')
    <h5 style="font-weight: bold">Danh Sách Sản Phẩm</h5>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <table class="table table-hover table-border">
                    <thead>
                        <tr>
                            <th>ID SP</th>
                            <th>ID DM</th>
                            <th>Mã SP</th>
                            <th>Tên SP</th>
                            <th>Mô tả</th>
                            <th>Giá</th>
                            <th>Ảnh</th>
                            <th>Hành Động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sanphams as $sanpham)
                            <tr>
                                <td>{{ $sanpham->idsp }}</td>
                                <td>{{ $sanpham->iddm }}</td>
                                <td>{{ $sanpham->masp }}</td>
                                <td>{{ $sanpham->tensp }}</td>
                                <td>{{ $sanpham->mota }}</td>
                                <td>{{ $sanpham->gia }}</td>
                                <td>{{ $sanpham->anh }}</td>
                                <td>
                                    <a href="{{ route('adminpro.edit', $sanpham->idsp) }}"
                                        class="btn btn-warning btn-sm">Sửa</a>
                                    <form class="d-inline-block" action="{{ route('adminpro.destroy', $sanpham->idsp) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Xoá" class="btn btn-danger btn-sm">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- <div class="d-flex justify-content-center">{{ $danhmucs->links() }}</div> --}}
                <p class="d-flex justify-content-end">
                    <a class="btn btn-info btn-sm" href="{{ route('adminpro.create') }}">Thêm sản phẩm</a>
                </p>
            </div>
        </div>
    </div>
@endsection
