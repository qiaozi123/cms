<?php

namespace App\Http\Controllers\Admin;

use App\Model\Article;
use App\Model\Articlele_team;
use App\Model\Brands;
use App\Model\Cases;
use App\Model\Studio;
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
        $body =  $request->input('body');
        $articleteam = new Studio();
        $articleteam->name = $name;
        $articleteam->img_url = $en_name;
        $articleteam->body = $body;
        $bool = $articleteam->save();
        if ($bool){
            return response()->json(['status'=>200,'msg'=>'添加商户成功']);
        }else{
            return response()->json(['status'=>500,'msg'=>'添加商户失败']);
        }
    }

    public function list()
    {
        $data = Studio::all();
        return view('admin.merchant.list',compact('data'));
    }

    public function delete(Request $request)
    {
        $id =$request->input('id');

        $post = Studio::find($id);
        $bool = $post->delete();
        if ($bool){
            return response()->json(['status'=>200,'msg'=>'删除成功']);
        }else{
            return response()->json(['status'=>500,'msg'=>'删除失败']);
        }
    }
}
