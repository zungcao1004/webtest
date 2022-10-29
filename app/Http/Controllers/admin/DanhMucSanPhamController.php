<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\DanhMucRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DanhMucSanPhamController extends Controller
{
    /*Display a listing of the resource*/
    public function index()
    {
       $danhmucs = DB::table('danhmucsanphams')->get(); 
       //$danhmucs = DB::table('danhmucsanphams')->paginate(5);
       return view('admin.danhmuc.index',['danhmucs'=>$danhmucs]);
    }

    /*Show the form for creating a new resource*/
    public function create()
    {
        return view('admin.danhmuc.add');
    }

    /*Store a newly created resource in storage*/
    public function store(DanhMucRequest $request)
    {
        $params = [
           'tendm' => $request->tendm
        ];
        DB::table('danhmucsanphams')->insert($params);
        return redirect()->route('admincat.index');
    }

    /*Display the specified resource*/
    public function show($id)
    {
        
    }

    /*Show the form for editing the specified resource*/
    public function edit($id)
    {
        $danhmuc = DB::table('danhmucsanphams')->where('iddm',$id)->first();
        return view('admin.danhmuc.edit',['danhmuc'=>$danhmuc]);
    }

    /*Update the specified resource in storage*/
    public function update(Request $request, $id)
    {
       $params = [
          'tendm'=>$request->tendm
       ];
       DB::table('danhmucsanphams')->where('iddm',$id)->update($params);
       return redirect()->route('admincat.index');
    }

    /*Remove the specified resource from storage*/
    public function destroy($id)
    {
       DB::table('danhmucsanphams')->where('iddm',$id)->delete();
       return redirect()->route('admincat.index');
    }
}
