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
        $head = Cases::where([]) ->first();
        $more =  Cases::where('cases.id','>',1)->get();
        return view('web.index',compact('head','more'));
    }

}
