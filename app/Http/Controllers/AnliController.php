<?php

namespace App\Http\Controllers;

use App\Model\CaseType;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AnliController extends Controller
{
    public function index()
    {
        return view('web.anli');
    }

}
