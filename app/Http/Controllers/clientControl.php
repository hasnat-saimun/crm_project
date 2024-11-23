<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientControl extends Controller
{
    public function client(){
        return view('clients.client');
    }

    public function addclient(){
        return view('clients.addClient');
    }
}
