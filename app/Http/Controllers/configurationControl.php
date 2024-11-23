<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class configurationControl extends Controller
{
    public function oparation(){
        return view('configuration.oparation');
    }

    public function offers(){
        return view('configuration.offers');
    }

    public function paymentGateway(){
        return view('configuration.paymentGateway');
    }

    public function rolesManagement(){
        return view('configuration.rolesManagement');
    }

    public function mlib(){
        return view('configuration.mlib');
    }

    public function banner(){
        return view('configuration.banner');
    }

    public function poolManagement(){
        return view('configuration.poolManagement');
    }

    public function tramsConditions(){
        return view('configuration.trams&conditions');
    }

    public function leadStatus(){
        return view('configuration.leadStatus');
    }

    public function leadAssignment(){
        return view('configuration.leadAssignment');
    }

    
    public function depositBonuse(){
        return view('configuration.depositBonuse');
    }

    public function cashBack(){
        return view('configuration.cashBack');
    }

    public function branchandUser(){
        return view('configuration.branch$user');
    }

    public function kyc(){
        return view('configuration.kyc');
    }
}
