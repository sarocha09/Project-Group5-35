<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;


class AdminController extends Controller
{
    public function index(){

        $user = user::all();
        return view('admin.index',compact('user'));
    }

}
