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
        return view('sales.clientDashbord.offer');
    }
}
