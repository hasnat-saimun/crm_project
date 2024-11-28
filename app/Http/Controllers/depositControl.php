<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class depositControl extends Controller
{
    public function depositView(){
        return view('deposito.deposit');
    }
    public function depositadd(){
        return view('deposito.addDeposit');
    }
    public function detailesDeposit(){
        return view('deposito.dipositDetailes');
    }

    public function DipoPaymentGte(){
        return view('deposito.bankPayment');
    }


    
}
