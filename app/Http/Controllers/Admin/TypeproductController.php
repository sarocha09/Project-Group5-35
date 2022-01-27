<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Typeproduct;

class TypeproductController extends Controller
{

    public function index(){

        $dbTypeproduct = Typeproduct::get();

        $pageElement = [
            'dbTypeproduct' => $dbTypeproduct
        ];

        return view('admin.typeproduct.index', $pageElement);
    }

    public function add(){

        return view('admin.typeproduct.add');
    }

    public function store(Request $request){

        $post = $request->all();
        
        Typeproduct::create([
            "name" => $post["txtTypeName"],
        ]);

        return redirect('admin/typeproduct/index');
        
    }

    public function edit($id){

        $dbTypeproduct = Typeproduct::where("id_type", $id)->first();

        $pageElement = [
            'dbTypeproduct' => $dbTypeproduct,
        ];

        return view('admin.typeproduct.edit', $pageElement);
    }

    public function do_update(Request $request){

        $post = $request->all();

        
        Typeproduct::where('id_type', $post["refId"])
            ->update([
                "name" => $post["txtTypeName"],
            ]);

        return redirect('admin/typeproduct/index');
        
    }

    public function do_delete($id){

        Typeproduct::where('id_type',$id)->delete();
        return redirect('admin/typeproduct/index');

    }
    
}
