<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->input('username');
        $passowrd = $request->input('password');

        $bool = Auth::attempt(['name'=>$username,'password'=>$passowrd]);
        if ($bool){
            return response()->json(['msg'=>'登陆成功','status'=>200]);
        }else{
            return response()->json(['msg'=>'登陆失败','status'=>500]);
        }
    }

    public function regist(Request $request)
    {
        $username = $request->input('username');
        $passowrd = $request->input('password');
        $data = User::where(['name'=>$username])->first();
        if (!empty($data)){
            return response()->json(['msg'=>'该用户名已经注册','status'=>500]);
        }
        $user = new User();
        $user->name = $username;
        $user->password = Hash::make($passowrd);
        $bool = $user->save();
        if ($bool){
            $bool = Auth::attempt(['name'=>$username,'password'=>$passowrd]);
            if($bool){
                return response()->json(['msg'=>'注册成功','status'=>200]);
            }else{
                return response()->json(['msg'=>'注册失败','status'=>500]);
            }
        }else{
            return response()->json(['msg'=>'注册失败','status'=>500]);
        }
    }

    public function logout()
    {
        Auth::logout();
    }
}
