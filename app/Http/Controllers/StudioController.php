<?php

namespace App\Http\Controllers;

use App\Model\Designer;
use App\Model\Gongzhang;
use App\Model\Studio;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudioController extends Controller
{
    public function index($id)
    {
        $data = Studio::find($id);
        $cell = Designer::where(['studio_id'=>$id])->get();
        return view('web.studio.index',compact('data','cell'));
    }


}
