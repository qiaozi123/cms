<?php

namespace App\Http\Controllers\Admin;

use App\Model\Permission;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{


    public function login()
    {
//        $user = new User();
//        $user->name = 'admin';
//        $user->email = 'admin@qq.com';
//        $user->password = Hash::make('admin');
//        $user->save();
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

    public function Logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }

    public function index()
    {
        $nav = Permission::where(['level'=>1,'status'=>0])->get();
        return view('admin.index',compact('nav'));
    }

    public function list()
    {
        return view('admin.list');
    }

}
