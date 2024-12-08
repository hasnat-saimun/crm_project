<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tradingControl extends Controller
{
    public function tradingView(){
        return view('trading.tradingSite');
    }

    public function addTrading(){
        return view('trading.addTrading');
    }

    public function tradingDepo(){
        return view('trading.tradingDeposit');
    }

    public function tradingWidth(){
        return view('trading.tradingWidthdraw');
    }

    public function tradingAccountDetailes(){
        return view('trading.idSectionEdit.trandingAccount_AccountDetail');
    }

    public function tradingOffer(){
        return view('trading.offer');
    }
}
