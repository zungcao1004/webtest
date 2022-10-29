<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThongKeController extends Controller
{
   public function index(){
       $sql = "select * from v_soluongsanpham";
       $quantity = DB::select($sql);
       
      return view('admin.thongke',[
        'quantity'=> $quantity
      ]);
   }
}
