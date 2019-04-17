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

    public function list()
    {
        $data = Cases::all();
        return view('admin.case.list',compact('data'));
    }

    public function create()
    {
        return view('admin.case.create');
    }

    public function docreate(Request $request)
    {
        $name =  $request->input('name');
        $loupan =  $request->input('loupan');
        $mianji =  $request->input('mianji');
        $style =  $request->input('style');
        $finish_at =  $request->input('finish_at');
        $address =  $request->input('address');
        $jigou =  $request->input('jigou');
        $designer_id =  $request->input('designer_id');
        $articleteam = new Cases();
        $articleteam->loupan = $loupan;
        $articleteam->name = $name;
        $articleteam->mianji = $mianji;
        $articleteam->style = $style;
        $articleteam->finish_at = $finish_at;
        $articleteam->address = $address;
        $articleteam->jigou = $jigou;
        $articleteam->designer_id = $designer_id;
        $bool = $articleteam->save();
        if ($bool){
            return response()->json(['status'=>200,'msg'=>'添加案例成功']);
        }else{
            return response()->json(['status'=>500,'msg'=>'添加案例失败']);
        }
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

    public function lunbolist($id)
    {
        return view('admin.case.lunbo.create',compact('id'));
    }

    public function lunbolistcreate(Request $request)
    {
        $data = $request->all();
        dd($data);
    }


}
