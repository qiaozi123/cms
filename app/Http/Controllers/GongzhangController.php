<?php

namespace App\Http\Controllers;

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
        $data = Gongzhang::all();
        return view('web.gongzhang',compact('data'));
    }

    public function show($id)
    {
        $data = Gongzhang::find($id);
        return view('web.gongzhang.show',compact('data'));
    }

}
