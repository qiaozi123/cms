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
        $head = Cases::where([])
            ->join('designers','cases.designer_id','=','designers.id')
            ->join('studios','designers.studio_id','=','studios.id')
            ->select('cases.id','cases.name','designers.name as designer_name','studios.name as studio','designers.avatar','cases.see')
            ->first();
       
        $more =  Cases::where('cases.id','>',1)
            ->join('designers','cases.designer_id','=','designers.id')
            ->join('studios','designers.studio_id','=','studios.id')
            ->limit(4)
            ->select('cases.id','cases.name','designers.name as designer_name','studios.name as studio','designers.avatar','cases.see')
            ->get();
        return view('web.index',compact('head','more'));
    }

}
