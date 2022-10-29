<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FindController extends Controller
{
    public function find(Request $request){
        $sql = "call timkiem(:condition)";
        $params = ['condition'=>$request->txtSearch];
        $result = DB::select($sql,$params);

        return view('admin.timkiem',['result'=>$result]);
    }
}
