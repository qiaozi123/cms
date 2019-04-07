<?php

namespace App\Http\Controllers\Admin;

use App\Model\Lunbo;
use App\Model\Lunbo_team;
use App\Model\Roles;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LunboController extends Controller
{

    public function list()
    {
        $data = Lunbo_team::all();
        return view('admin.lunbo.list',compact('data'));
    }

    public function create()
    {
        return view('admin.lunbo.create');
    }

    public function docreate(Request $request)
    {
        $name = $request->input('name');
        $lunbo = new Lunbo_team();
        $lunbo->name = $name;
        $bool = $lunbo->save();
        if ($bool){
            return response()->json(['status'=>200,'msg'=>'轮播小组创建成功']);
        }else{
            return response()->json(['status'=>500,'msg'=>'轮播创建失败']);
        }
    }

    public function show($id)
    {
        $data = Lunbo::where(['team_id'=>$id])->get();
        return view('admin.lunbo.list.list',compact('data','id'));
    }

    public function createpic(Request $request)
    {
        $id = $request->input('team_id');
        if($request -> hasFile('file')){
            // 使用request 创建文件上传对象
            $profile = $request -> file('file');
            // 获取文件后缀名
            $ext = $profile->getClientOriginalExtension();
            // 处理文件名称
            $temp_name = str_random(20);
            $filename =  $temp_name.'.'.$ext;
            $dirname = date('Ymd',time());
            // 保存文件
            $res = $profile -> move('./uploads/'.$dirname,$filename);
            $lunbo = new Lunbo();
            $lunbo->team_id = $id;
            $lunbo->name = str_random(15);
            $lunbo->img_url = '/uploads/'.$dirname.'/'.$filename;
            $bool = $lunbo->save();
            if ($bool){
                return response()->json(['status'=>200,'msg'=>'数据成功']);
            }else{
                return response()->json(['status'=>500,'msg'=>'数据失败']);
            }
        }
    }

    public function createavatar(Request $request)
    {
        if($request -> hasFile('file')){
            // 使用request 创建文件上传对象
            $profile = $request -> file('file');
            // 获取文件后缀名
            $ext = $profile->getClientOriginalExtension();
            // 处理文件名称
            $temp_name = str_random(20);
            $filename =  $temp_name.'.'.$ext;
            $dirname = date('Ymd',time());
            // 保存文件
            $res = $profile -> move('./uploads/'.$dirname,$filename);
            if (!empty($res)){
                return response()->json(['status'=>200,'msg'=>'成功','url'=>'/uploads/'.$dirname.'/'.$filename]);
            }else{
                return response()->json(['status'=>500,'msg'=>'失败']);
            }
        }
    }

    public function createdesigner(Request $request)
    {
        if($request -> hasFile('file')){
            // 使用request 创建文件上传对象
            $profile = $request -> file('file');
            // 获取文件后缀名
            $ext = $profile->getClientOriginalExtension();
            // 处理文件名称
            $temp_name = str_random(20);
            $filename =  $temp_name.'.'.$ext;
            $dirname = date('Ymd',time());
            // 保存文件
            $res = $profile -> move('./uploads/'.$dirname,$filename);
            if (!empty($res)){
                return response()->json(['status'=>200,'msg'=>'成功','url'=>'/uploads/'.$dirname.'/'.$filename]);
            }else{
                return response()->json(['status'=>500,'msg'=>'失败']);
            }
        }
    }
}
