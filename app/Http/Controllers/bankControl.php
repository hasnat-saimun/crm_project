<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bankControl extends Controller
{
    public function paymentGte(){
        return view('bankForm.bankPayment');
    }

    // public function paymentGteW(){
    //     return view('bankFormW.bankPayment');
    // }
}
