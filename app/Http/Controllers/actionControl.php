<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class actionControl extends Controller
{
    public function accRemoval(){
        return view('action.accountRemoval');
    }

    public function tradingAc(){
        return view('action.tradingAccount');
    }

    public function kycSite(){
        return view('action.kyc');
    }

    public function moneyManager(){
        return view('action.moneyManager');
    }

    public function mailing(){
        return view('action.mailing');
    }

    public function branchEditform(){
        return view('action.branchEditForm');
    }

    public function tradingAcRqForm(){
        return view('action.tradingAccountRequestForm');
    }
}
