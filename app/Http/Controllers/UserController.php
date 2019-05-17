<?php

namespace App\Http\Controllers;

use App\Model\Baojia;
use App\Model\UserPost;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function dologin(Request $request)
    {
        $rules=[
            'name'=>'required',
            'password'=>'required',
        ];
        $message=[
            'username.required'=>'用户名不能为空',
            'password.required'=>'密码不能为空',
        ];
        $validator=$this->validate($request,$rules,$message);
        $captcha = $request->input('captcha');
        $username = $request->input('name');
        $password = $request->input('password');
        $loginbool = Auth::guard('admin')->attempt(['name'=>$username,'password'=>$password]);
        if ($loginbool){
            return redirect('/admin/home');
        }else{
            return redirect('/admin') ->withErrors(['用户名或密码不正确！']);
        }
    }

    public function index()
    {
        return view('admin.index');
    }

    public function list()
    {
        return view('admin.list');
    }

    public function post(Request  $request)
    {
        $telphone = $request->input('telphone');
        $content = $request->input('content');
        $userpost = new UserPost();
        $userpost->content = $content;
        $userpost->telphone = $telphone;
        $bool = $userpost->save();
        if ($bool){
            return response()->json(['msg'=>'您的需求提交成功','status'=>200]);
        }else{
            return response()->json(['msg'=>'提交失败','status'=>500]);
        }
    }

    public function baojia()
    {
        return view('web.baojia');
    }

    public function dobaojia(Request $request)
    {
         $loupan = $request->input('loupan');
         $area = $request->input('area');
         $shi= $request->input('shi');
         $ting = $request->input('ting');
         $chu = $request->input('chu');
         $wei = $request->input('wei');
         $yangtai = $request->input('yangtai');
         $name = $request->input('name');
         $telphone = $request->input('telphone');
         $baojia = new Baojia();
         $baojia->loupan =$loupan;
         $baojia->area =$area;
         $baojia->shi =$shi;
         $baojia->ting =$ting;
         $baojia->chu =$chu;
         $baojia->wei =$wei;
         $baojia->yangtai =$yangtai;
         $baojia->name =$name;
         $baojia->telphone =$telphone;
         $bool = $baojia->save();
         if ($bool){
             return response()->json(['msg'=>'您的需求提交成功','status'=>200]);
         }else{
             return response()->json(['msg'=>'提交失败','status'=>500]);
         }
    }


}
