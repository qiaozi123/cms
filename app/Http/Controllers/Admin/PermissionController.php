<?php

namespace App\Http\Controllers\Admin;

use App\Model\Ico;
use App\Model\Permission;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PermissionController extends Controller
{
    function convertUrlQuery($query)
    {
        $queryParts = explode('&', $query);

        $params = array();
        foreach ($queryParts as $param) {
            $item = explode('=', $param);
            $params[$item[0]] = $item[1];
        }

        return $params;
    }

    public function list(Request $request)
    {
        $belongtoid = $request->input('belongto');
        if (!empty($belongtoid)){
            $permission = Permission::where(['status'=>0,'belongto'=>$belongtoid])->get();
            return view('admin.permission.list',compact('permission','belongtoid'));
        }
        $permission = Permission::where(['status'=>0,'level'=>1])->get();
        return view('admin.permission.list',compact('permission'));
    }

    public function create(Request $request)
    {
        $ico = Ico::all();
        $belongtoid = $request->input('belongto');
        return view('admin.permission.create',compact('permission','ico','belongtoid'));
    }

    public function docreate(Request $request)
    {
        $name =  $request->input('name');
        $slug =  $request->input('slug');
        $description =  $request->input('description');
        $model =  $request->input('model');
        $level =  $request->input('level');
        $belongto =  $request->input('belongto');
        $icon =  $request->input('icon');
        $type =  $request->input('type');
        $status =  $request->input('status');
        $permission = new Permission();
        $permission->name = $name;
        $permission->slug = $slug;
        $permission->description = $description;
        $permission->model = $model;
        $permission->level = $level;
        $permission->belongto = $belongto;
        $permission->icon = $icon;
        $permission->type = $type;
        $permission->status = $status;
        $bool = $permission->save();
        if ($bool){
            return response()->json(['status'=>200,'msg'=>'添加权限成功']);
        }else{
            return response()->json(['status'=>500,'msg'=>'添加权限失败']);
        }
    }
}
