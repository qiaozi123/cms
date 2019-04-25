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
            ->join('studios','designers.studio_id','=','studios.id')
            ->select('cases.id','cases.name','cases.area_id','cases.style_id','designers.name as designer_name','studios.name as studio','designers.avatar','cases.see')
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
        $case = Cases::where(['cases.housetype_id'=>$id])
            ->join('designers','cases.designer_id','=','designers.id')
            ->join('case_house_styles','cases.housetype_id','=','case_house_styles.id')
            ->join('studios','designers.studio_id','=','studios.id')
            ->select('cases.id','cases.name','cases.area_id','cases.style_id','designers.name as designer_name','studios.name as studio','designers.avatar','cases.see')
            ->paginate(15);
        return view('web.anli',compact('case'));
    }

    public function style($id)
    {
        $case = Cases::where(['cases.style_id'=>$id])
            ->join('designers','cases.designer_id','=','designers.id')
            ->join('case_styles','cases.style_id','=','case_styles.id')
            ->join('studios','designers.studio_id','=','studios.id')
            ->select('cases.id','cases.name','cases.area_id','cases.style_id','designers.name as designer_name','studios.name as studio','designers.avatar','cases.see')
            ->paginate(15);
        return view('web.anli',compact('case'));
    }

    public function area($id)
    {
        $case = Cases::where(['cases.area_id'=>$id])
            ->join('designers','cases.designer_id','=','designers.id')
            ->join('studios','designers.studio_id','=','studios.id')
            ->join('case_areas','cases.area_id','=','case_areas.id')
            ->select('cases.id','cases.name','cases.area_id','cases.style_id','designers.name as designer_name','studios.name as studio','designers.avatar','cases.see')
            ->paginate(15);
        return view('web.anli',compact('case'));
    }

}
