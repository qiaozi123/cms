<?php

namespace App\Http\Controllers;

use App\Model\Cases;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        $head = Cases::where(['cases.id'=>1])
            ->join('designers','cases.designer_id','=','designers.id')
            ->select('cases.id','cases.name','cases.mianji','cases.style','designers.name as designer_name','designers.studio','designers.avatar','cases.see','cases.house_type')
            ->first();

        $more =  Cases::where('cases.id','>',1)
            ->join('designers','cases.designer_id','=','designers.id')
            ->limit(4)
            ->select('cases.id','cases.name','cases.mianji','cases.style','designers.name as designer_name','designers.studio','designers.avatar','cases.see')
            ->first();
        return view('web.index',compact('head','more'));
    }

}
