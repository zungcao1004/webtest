<header>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h4>My Laptop Shop</h4>
            </div>
            <div class="col-md-5 text-end">
                <form style="margin:0px;" action="{{ route('adminTimkiem') }}" method="post">
                    @csrf
                    <input type="text" name="txtSearch" class="form-control-sm">
                    <input type="submit" value="Tìm kiếm" class="btn btn-info btn-sm mb-1">
                </form>
            </div>
        </div>
    </div>
</header>
<hr class="border-dark">