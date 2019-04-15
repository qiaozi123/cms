<?php

namespace App\Http\Controllers\Admin;

use App\Model\Article;
use App\Model\Articlele_team;
use App\Model\Brands;
use App\Model\Cases;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MerchantController extends Controller
{

    public function create()
    {
        return view('admin.merchant.create');
    }

    public function docreate(Request $request)
    {
        $name =  $request->input('name');
        $en_name =  $request->input('img_url');
        $address =  $request->input('address');
        $do =  $request->input('do');
        $zhuying =  $request->input('zhuying');
        $articleteam = new Brands();
        $articleteam->name = $name;
        $articleteam->img_url = $en_name;
        $articleteam->address = $address;
        $articleteam->do = $do;
        $articleteam->zhuying = $zhuying;
        $bool = $articleteam->save();
        if ($bool){
            return response()->json(['status'=>200,'msg'=>'添加商户成功']);
        }else{
            return response()->json(['status'=>500,'msg'=>'添加商户失败']);
        }
    }

    public function list()
    {
        $data = Brands::all();
        return view('admin.merchant.list',compact('data'));
    }

    public function delete(Request $request)
    {
        $id =$request->input('id');

        $post = Brands::find($id);
        $bool = $post->delete();
        if ($bool){
            return response()->json(['status'=>200,'msg'=>'删除成功']);
        }else{
            return response()->json(['status'=>500,'msg'=>'删除失败']);
        }
    }
}
