<?php

namespace App\Http\Controllers;

use App\Model\Designer;
use App\Model\Gongzhang;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GongzhangController extends Controller
{
    public function index()
    {
        $data = Designer::all();
        return view('web.gongzhang',compact('data'));
    }

    public function show($id)
    {
        $data = Designer::find($id);
        return view('web.gongzhang.show',compact('data','id'));
    }

    public function price($id)
    {
        $data = Designer::where(['designer_prices.id'=>$id])
            ->join('designer_times','designer_times.id','=','designers.time_id')
            ->join('designer_styles','designer_styles.id','=','designers.style_id')
            ->join('designer_prices','designer_prices.id','=','designers.price_id')
            ->join('studios','studios.id','=','designers.studio_id')
            ->select('designers.id','designers.name','designer_times.times','designer_styles.style','studios.name as studio','designers.avatar','designer_prices.price')
            ->paginate(15);
        return view('web.gongzhang',compact('data'));
    }

    public function style($id)
    {
        $data = Designer::where(['designer_styles.id'=>$id])
            ->join('designer_times','designer_times.id','=','designers.time_id')
            ->join('designer_styles','designer_styles.id','=','designers.style_id')
            ->join('designer_prices','designer_prices.id','=','designers.price_id')
            ->join('studios','studios.id','=','designers.studio_id')
            ->select('designers.id','designers.name','designer_times.times','designer_styles.style','studios.name as studio','designers.avatar','designer_prices.price')
            ->paginate(15);

        return view('web.gongzhang',compact('data'));
    }

    public function time($id)
    {
        $data = Designer::where(['designer_times.id'=>$id])
            ->join('designer_times','designer_times.id','=','designers.time_id')
            ->join('designer_styles','designer_styles.id','=','designers.style_id')
            ->join('designer_prices','designer_prices.id','=','designers.price_id')
            ->join('studios','studios.id','=','designers.studio_id')
            ->select('designers.id','designers.name','designer_times.times','designer_styles.style','studios.name as studio','designers.avatar','designer_prices.price')
            ->paginate(15);
        return view('web.gongzhang',compact('data'));
    }
}
