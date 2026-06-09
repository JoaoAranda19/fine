<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompaniesController extends Controller
{

    /**
     * Returns products index view
     * */
    public function index(){
        return view('companies.desktop.index');
    }

} // end of controller
