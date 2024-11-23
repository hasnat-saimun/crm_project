<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainControl extends Controller
{
    public function headercon(){
        return view('header');
    }

    public function select(){
        return view('selet');
    }
}
