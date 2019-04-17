<?php

namespace App\Http\Controllers;

use App\Model\Cases;
use App\Model\CasesPic;
use App\Model\CaseType;
use App\Model\Designer;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AnliController extends Controller
{
    public function index()
    {
        $case = Cases::where([])
            ->join('designers','cases.designer_id','=','designers.id')
            ->select('cases.id','cases.name','cases.mianji','cases.style','designers.name as designer_name','designers.studio','designers.avatar','cases.see')
            ->paginate(15);
        return view('web.anli',compact('case'));
    }

    public function show($id)
    {
        $data =  Cases::find($id);
        $data->see = $data->see+1;
        $data->save();
        $pic = CasesPic::where(['case_id'=>$id])->get();
        $designer = Designer::find($id);
        return view('web.anli.show',compact('data','pic','designer'));
    }

    public function type($id)
    {
        $case = Cases::where(['cases.type_id'=>$id])
            ->join('designers','cases.designer_id','=','designers.id')
            ->select('cases.id','cases.name','cases.mianji','cases.style','designers.name as designer_name','designers.studio','designers.avatar','cases.see')
            ->paginate(15);
        return view('web.anli',compact('case'));
    }

}
