<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Roles extends Model
{
    protected $table = 'roles';

    public static function IsRole($slug)
    {
        $userid = Auth::guard('admin')->user()->id;
        $data = UserRole::where(['user_roles.user_id'=>$userid,'roles.slug'=>$slug])
            ->join('users','user_id','users.id')
            ->join('roles','roles.id','user_roles.role_id')
            ->select('roles.slug')
            ->first();
        if (empty($data)){
            return false;
        }else{
            return true;
        }
    }
}
