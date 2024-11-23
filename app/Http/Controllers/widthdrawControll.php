<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class widthdrawControll extends Controller
{
    public function widthdrawView(){
        return view('widthDraw.widthdraw');
    }
    public function widthdrawAdd(){
        return view('widthDraw.addWidthdraw');
    }
}
