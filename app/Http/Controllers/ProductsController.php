<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductsController extends Controller
{

    /**
     * Returns products index view
     * */
    public function index(){

        $products = Product::all();
        return view('products.desktop.index', compact('products'));
    }

    public function create(){
        dd('to be implemented');
    }

    public function edit(int $product_id){
        dd('to be implemented', $product_id);
    }

    public function store(Request $request){
        dd($request->all());
    }

    public function update(Request $request, int $product_id){
        dd($request->all(), $product_id);
    }

} // end of controller
