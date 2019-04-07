<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lunbo extends Model
{
    protected $table = 'lunbos';

    public static function get($id)
    {
        $lunbo = Lunbo::where(['team_id'=>$id])->get();
        return $lunbo;
    }
}
