<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected  $table ='permissions';

    public static function nav($perid)
    {
        $data =  Permission::where(['belongto'=>$perid,'status'=>0])->get();
        return $data;
    }
}
