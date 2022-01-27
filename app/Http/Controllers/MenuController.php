<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Product;

class MenuController extends Controller
{

    public function index()
    {

        $dbProduct = Product::with('type')->get();
        

        return view('layouts.front_end.menu', [
            'dbProduct' => $dbProduct
        ]);
    }

 
}
