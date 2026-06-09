<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    /**
     * Returns products index view
     * */
    public function index(){
        return view('reports.desktop.index');
    }
} // end of controller
