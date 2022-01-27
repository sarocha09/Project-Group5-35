<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;

class UserController extends Controller
{
    
    public function index(){

        $dbUser = User::get();

        $pageElement = [
            'dbUser' => $dbUser
        ];

        return view('admin.user.index', $pageElement);
    }

    public function add(){

        return view('admin.user.add');
    }

    public function store(Request $request){

        $post = $request->all();
        User::create([
            "username" => $post["txtUsername"],
            "phone" => $post["txtPhone"],
            "password" => Hash::make($post["txtPassword"]),
        ]);

        return redirect('admin/user/index');
        
    }

    public function edit($id){

        $dbUser = User::where("id", $id)->first();

        $pageElement = [
            'dbUser' => $dbUser,
        ];

        return view('admin.user.edit', $pageElement);
    }

    public function do_update(Request $request){

        $post = $request->all();

        
        User::where('id', $post["refId"])
            ->update([
                "phone" => $post["txtPhone"],
            ]);

        return redirect('admin/user/index');
        
    }

    public function do_delete($id){

        User::where('id',$id)->delete();
        return redirect('admin/user/index');

    }

}
