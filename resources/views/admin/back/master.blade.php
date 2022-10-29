<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Laptop Shop</title>
    @include('libs\thuvien')
    <style>
        h4,h5{
            color:#CF8507;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                @include('admin.back.header')
            </div>
        </div><!--Header-->
        <div class="row">
            <div class="col-md-3">
                @include('admin.back.left')
            </div><!--Left-->
            <div class="col-md-9">
                @yield('content')
            </div><!--Content-->
        </div><!--Main-->
        <div class="row">
            <div class="col-md-12">
                @include('admin.back.footer')
            </div>
        </div><!--Footer-->
    </div>
</body>
</html>