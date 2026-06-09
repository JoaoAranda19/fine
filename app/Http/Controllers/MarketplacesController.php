<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketplacesController extends Controller
{

    /**
     * Returns products index view
     * */
    public function index(){
        return view('marketplaces.desktop.index');
    }

} // end of controller
