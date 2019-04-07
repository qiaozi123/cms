<?php

namespace App\Http\Controllers\Admin;

use App\Model\Roles;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RolesController extends Controller
{

    public function list()
    {
        $role = Roles::all();
        return view('admin.role.list',compact('role'));
    }



}
