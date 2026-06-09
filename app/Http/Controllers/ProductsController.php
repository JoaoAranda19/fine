<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

    /**
     * Returns products index view
     * */
    public function index(){
        return view('products.desktop.index');
    }

} // end of controller
