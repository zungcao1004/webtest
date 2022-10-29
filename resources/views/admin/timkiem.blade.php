@extends('admin.back.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <h5>Danh Sách Sản Phẩm Sau Khi Tìm</h5>
            <table class="table table-bordered table-sm">
                <thead class="thead-light">
                    <th>Tên Danh Mục</th>
                    <th>Mã Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá</th>
                </thead>
                <tbody>
                    @foreach($result as $row)
                    <tr>
                        <td>{{ $row->tendm }}</td>
                        <td>{{ $row->masp }}</td>
                        <td>{{ $row->tensp }}</td>
                        <td>{{ $row->gia }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>      
        </div>
    </div>
</div>
@endsection