<?php

namespace App\Http\Controllers\Admin;

use App\Model\UserRole;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function list(Request $request)
    {
        $roleid = $request->input('roleid');
        if (!empty($roleid)){
            $user = UserRole::where(['role_id'=>$roleid])
                ->join('users','user_id','users.id')
                ->join('roles','roles.id','user_roles.role_id')
                ->select('users.id','users.name','users.email','roles.name as rolename')
                ->orderby('users.id','desc')
                ->paginate(15);
            return view('admin.user.index',compact('user'));
        }else{
            $user = UserRole::where([])
                ->join('users','user_id','users.id')
                ->join('roles','roles.id','user_roles.role_id')
                ->select('users.id','users.name','users.email','roles.name as rolename')
                ->orderby('users.id','desc')
                ->paginate(15);
            return view('admin.user.list',compact('user'));
        }

    }

}
