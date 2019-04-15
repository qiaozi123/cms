<?php

namespace App\Http\Controllers\Admin;

use App\Model\Article;
use App\Model\Articlele_team;
use App\Model\Cases;
use App\Model\CaseType;
use App\Model\CaseTypeData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CaseController extends Controller
{

    public function create()
    {
        return view('admin.case.create');
    }

    public function docreate(Request $request)
    {
        $name =  $request->input('name');
        $en_name =  $request->input('en_name');
        $articleteam = new Articlele_team();
        $articleteam->name = $name;
        $articleteam->en_name = $en_name;
        $bool = $articleteam->save();
        if ($bool){
            return response()->json(['status'=>200,'msg'=>'添加权限成功']);
        }else{
            return response()->json(['status'=>500,'msg'=>'添加权限失败']);
        }
    }

    public function list()
    {
        $data = Cases::all();
        return view('admin.case.list',compact('data'));
    }

    public function createlist()
    {
        $data = CaseType::all();
        return view('admin.case.type.list',compact('data'));
    }

    public function createtype()
    {
        $data = CaseType::all();
        return view('admin.case.type.create',compact('data'));
    }

    public function docreatetype(Request $request)
    {
        $name = $request->input('name');
        $data = new CaseType();
        $data->name = $name;
        $bool = $data->save();
        if ($bool){
            return response()->json(['status'=>200,'msg'=>'分类创建成功']);
        }else{
            return response()->json(['status'=>500,'msg'=>'分类创建失败']);
        }
    }

    public function typedelete(Request $request)
    {
        $id = $request->input('id');
        $data = CaseType::find($id);
        $bool = $data->delete();
        if ($bool){
            return response()->json(['status'=>200,'msg'=>'分类删除成功']);
        }else{
            return response()->json(['status'=>500,'msg'=>'分类删除失败']);
        }
    }


    public function typedatalist($id)
    {
        $data = CaseTypeData::where(['type_id'=>$id])->get();
        return view('admin.case.type.data.list',compact('data','id'));
    }

    public function typdatecreate($id)
    {
        return view('admin.case.type.data.create',compact('id'));
    }

    public function dotypdatecreate(Request $request)
    {
        $id =  $request->input('id');
        $name =  $request->input('name');
        $data = new  CaseTypeData();
        $data->name = $name;
        $data->type_id = $id;
        $bool =  $data->save();
        if ($bool){
            return response()->json(['status'=>200,'msg'=>'分类细分数据创建成功']);
        }else{
            return response()->json(['status'=>500,'msg'=>'分类细分数据创建失败']);
        }
    }

    public function typdatedelete(Request $request)
    {
        $id = $request->input('id');
        $data = CaseTypeData::find($id);
        $bool = $data->delete();
        if ($bool){
            return response()->json(['status'=>200,'msg'=>'分类细分数据删除成功']);
        }else{
            return response()->json(['status'=>500,'msg'=>'分类细分数据删除失败']);
        }
    }


}
