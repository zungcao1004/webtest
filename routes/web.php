<?php
use App\Http\Controllers\admin\DanhMucSanPhamController;
use App\Http\Controllers\admin\DashController;
use App\Http\Controllers\admin\FindController;
use App\Http\Controllers\admin\SanPhamController;
use App\Http\Controllers\admin\ThongKeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
     return view('home',[HomeController::class,'index']);
});

Route::name('admin')->group(function(){
     Route::prefix('admin')->group(function(){
        //Route::resource('/',DashController::class);
        Route::resources([
           'cat'=>DanhMucSanPhamController::class,
           'pro'=>SanPhamController::class
        ]);
        Route::get('/',[DashController::class,'index']);
        Route::get('thongke',[ThongKeController::class,'index'])
        ->name('Thongke');
        Route::post('timkiem',[FindController::class,'find'])
        ->name('Timkiem');
     });
});

