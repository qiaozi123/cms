<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Designer extends Model
{
      protected $table ='designers';

    public static function HeaderDesinger()
    {
        $designer = Designer::where(['show'=>1])->limit(4)->get();
        return $designer;
    }
}
