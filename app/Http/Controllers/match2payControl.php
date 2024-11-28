<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class match2payControl extends Controller
{
    public function matchPay(){
        return view('match2pay.match2payPage');
    }
}
