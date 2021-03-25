<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        $products = Product::all();
        print_r($products);
        return view('products_list', ['products' => $products]);
    }

    public function add(){

        Product::create([
            'name' => $request->input('name')
        ]);
        //echo "test add";
    }


}

?>