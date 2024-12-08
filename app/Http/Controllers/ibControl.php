<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ibControl extends Controller
{
    // ib Account etr
    public function ibAcc(){
        return view('ib.ibAccount.ibAccountPage');
    }

    public function commissionEditpage(){
        return view('ib.ibAccount.commissionSetupEdit');
    }


    // ib Account end
    public function commissionSetup(){
        return view('ib.commissionSetup.commissionSetupPage');
    }

    public function addCommiissionSteupForm(){
        return view('ib.commissionSetup.commissionSetupAdd');
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

    public function addCpaProgram(){
        return view('ib.AddCpaProgramForm');
    }
}
