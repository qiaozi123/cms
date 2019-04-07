<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Nav extends Model
{
    protected $table ='navs';

    public static function nav()
    {
        $nav = Nav::where(['use_type'=>1])->get();
        return $nav;
    }
}
