<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class leadControl extends Controller
{
    public function leads(){
        return view('leads.lead');
    }
    public function addLead(){
        return view('leads.addLead');
    }
}
