<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ibControl extends Controller
{
    public function ibAcc(){
        return view('ib.ibAccount');
    }

    public function commissionSetup(){
        return view('ib.commissionSetup');
    }

    public function ibCommission(){
        return view('ib.ibCommission');
    }

    public function ibRequest(){
        return view('ib.ibRequest');
    }

    public function cpaProgram(){
        return view('ib.cpaProgram');
    }
}
