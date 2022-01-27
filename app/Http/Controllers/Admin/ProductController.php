<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Product;
use App\Typeproduct;

class ProductController extends Controller
{

    public function index()
    {

        $dbProduct = Product::with('type')->get();

        return view('admin.product.index', [
            'dbProduct' => $dbProduct
        ]);
    }

    public function add()
    {

        $dbProduct = Product::orderBy("id_pro", "DESC")->get();
        $dbTypeProduct = Typeproduct::get();

        $productcode = "CF01";
        if (count($dbProduct) > 0) {
            $temp = $dbProduct[0]->product_code;
            $productcode = substr($temp, 0, 2) . str_pad((intval(substr($temp, 2)) + 1), 2, 0, STR_PAD_LEFT);
        }

        $pageElement = [
            'productcode' => $productcode,
            'dbTypeProduct' => $dbTypeProduct,
        ];

        return view('admin.product.add', $pageElement);
    }

    public function store(Request $request)
    {

        // $post = $request->all();
        // $file = $request->file('txtImageFile');
        // $filename = trim($file->getClientOriginalName());
        // $file->move('upload', $filename);

        // Product::create([
        //     "product_code" => $post["txtProductCode"],
        //     "image" => $filename,
        //     "name" => $post["txtProductName"],
        //     "pice" => $post["txtProductPrice"],
        //     "product_type" => $post["txtProductType"],
        //     "detail" => $post["txtProductDesc"],
        //     "created_at" => Auth()->user()->id,
        //     "updated_at" => Auth()->user()->id,
        // ]);

        $post = $request->all();

        $image_name = uniqid() . '.' . $request->file('txtProductimg')->getClientOriginalExtension();
        $request->file('txtProductimg')->storeAs('public/products/', $image_name);
        $path = '/storage/products/' . $image_name;

        Product::create([
            "name" => $post["txtProductName"],
            "pice" => $post["txtProductPrice"],
            "detail" => $post["txtProductDesc"],
            'type_id' => $post['type_id'],
            "image" => $path,
            "created_at" => Auth()->user()->id,
            "updated_at" => Auth()->user()->id,

        ]);

        return redirect('admin/product/index');
    }

    public function edit($id)
    {

        $dbProduct = Product::where("id_pro", $id)->first();
        $dbTypeProduct = Typeproduct::get();

        $pageElement = [
            'dbProduct' => $dbProduct,
            'dbTypeProduct' => $dbTypeProduct,
        ];

        return view('admin.product.edit', $pageElement);
    }

    public function do_update(Request $request, $id)
    {

        $post = $request->all();

        $product = Product::where('id_pro', $id);
            
        $product->update([
            "name" => $post["txtProductName"],
            "pice" => $post["txtProductPrice"],
            'type_id' => $post['type_id'],
            "detail" => $post["txtProductDesc"],
        ]);

            
        if ($request->file('txtProductimg')) {
            $image_name = uniqid() . '.' . $request->file('txtProductimg')->getClientOriginalExtension();
            $request->file('txtProductimg')->storeAs('public/products/', $image_name);
            $path = '/storage/products/' . $image_name;

            $product->update([
                'image' => $path
            ]);
        }

        return redirect('admin/product/index');
    }

    public function do_delete($id)
    {

        Product::find($id)->delete();
        return redirect('admin/product/index');
    }
}
