<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    //
    protected $table = 'cases';

    public static function Head()
    {
        return  Cases::find(1);
    }

    public static function Case()
    {
        return  Cases::where('id','>',1)->get();
    }
}
