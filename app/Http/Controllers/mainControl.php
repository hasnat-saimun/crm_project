<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainControl extends Controller
{
    public function headercon(){
        return view('sales.salesDashboard');
    }

    public function select(){
        return view('selet');
    }
}
