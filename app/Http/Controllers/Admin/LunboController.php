<?php

namespace App\Http\Controllers\Admin;

use App\Model\CasesPic;
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


    public function createmerchant(Request $request)
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
            $res = $profile -> move('./uploads/merchant/'.$dirname,$filename);
            if (!empty($res)){
                return response()->json(['status'=>200,'msg'=>'成功','url'=>'/uploads/merchant/'.$dirname.'/'.$filename]);
            }else{
                return response()->json(['status'=>500,'msg'=>'失败']);
            }
        }
    }


    public function createcase(Request $request)
    {
        if($request -> hasFile('file')){
            // 使用request 创建文件上传对象
            $profile = $request -> file('file');
            $id = $request -> input('id');
            // 获取文件后缀名
            $ext = $profile->getClientOriginalExtension();
            // 处理文件名称
            $temp_name = str_random(20);
            $filename =  $temp_name.'.'.$ext;
            $dirname = date('Ymd',time());
            // 保存文件
            $res = $profile -> move('./uploads/case/'.$dirname,$filename);
            if (!empty($res)){
                $case = new CasesPic();
                $case->img_url = '/uploads/case/'.$dirname.'/'.$filename;
                $case->case_id = $id;
                $case->save();
                return response()->json(['status'=>200,'msg'=>'成功','url'=>'/uploads/case/'.$dirname.'/'.$filename]);
            }else{
                return response()->json(['status'=>500,'msg'=>'失败']);
            }
        }
    }

    public function delete(Request $request)
    {
        $id= $request->input('id');
        $data =  Lunbo::find($id);
        $bool =  $data->delete();
        if ($bool){
            return response()->json(['status'=>200,'msg'=>'轮播图片删除成功']);
        }else{
            return response()->json(['status'=>500,'msg'=>'轮播图片删除失败']);
        }
    }

    public function updatearticle(Request $request)
    {
        $id = $request->input('id');
        return view('admin.lunbo.article.show',compact('id'));
    }

    public function doupdatearticle(Request $request)
    {
        $id = $request->input('id');
        $articleid = $request->input('article_id');
        $lunbo = Lunbo::find($id);
        $lunbo->article_id = $articleid;
        $bool =  $lunbo->save();
        if ($bool){
            return response()->json(['status'=>200,'msg'=>'轮播文章绑定成功']);
        }else{
            return response()->json(['status'=>500,'msg'=>'轮播文章绑定失败']);
        }
    }
}
