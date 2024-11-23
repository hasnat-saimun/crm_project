<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reportControl extends Controller
{
    public function leadSource(){
        return view('report.leadSource');
    }

    public function leadProvider(){
        return view('report.leadProviders');
    }

    public function accountManager(){
        return view('report.accountManager');
    }

    public function ibReport(){
        return view('report.ibReport');
    }

    public function cpaReport(){
        return view('report.cpaReport');
    }
}
