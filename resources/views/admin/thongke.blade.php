@extends('admin.back.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <h5>Thông kê sản phẩm theo danh mục</h5>
            <table class="table table-bordered table-sm">
                <thead class="thead-light">
                    <th>Tên Danh Mục</th>
                    <th>Số Lượng</th>
                </thead>
                <tbody>
                    @foreach($quantity as $row)
                    <tr>
                        <td>{{ $row->tendm }}</td>
                        <td>{{ $row->soluong }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>      
        </div>
    </div>
</div>

@endsection