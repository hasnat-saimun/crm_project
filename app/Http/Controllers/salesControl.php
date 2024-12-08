<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class salesControl extends Controller
{
    public function salesCon(){
        return view('sales.salesDashboard');
    }

    public function taskForm(){
        return view('sales.taskform');
    }

    public function clientProfile(){
        return view('sales.clientDashbord.clientProfile');
    }

    public function offerForm(){
        return view('sales.clientDashbord.accountPart.editOffer');
    }

    public function addTradingAcc(){
        return view('sales.clientDashbord.accountPart.addTradingAccount');
    }

    public function addDepositAcc(){
        return view('sales.clientDashbord.accountPart.addDepositAccount');
    }

    public function addWidthdrawAcc(){
        return view('sales.clientDashbord.accountPart.addWidthdrawAccount');
    }

    public function trandingAccountDetail(){
        return view('sales.clientDashbord.accountPart.idSection.trandingAccount_AccountDetail');
    }

    public function depositRequest(){
        return view('sales.clientDashbord.dipo&widthPart.dipositRequest');
    }

    public function depositPayment(){
        return view('sales.clientDashbord.dipo&widthPart.depositPayment');
    }

    public function widthdrawPayment(){
        return view('sales.clientDashbord.dipo&widthPart.widthdrawPayment');
    }

    public function widthdrawRequest(){
        return view('sales.clientDashbord.dipo&widthPart.widthdrawRequest');
    }
}
