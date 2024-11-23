<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class brokerControl extends Controller
{
    public function brokerCon(){
        return view('broker.brokerAnalytics');
    }
}
