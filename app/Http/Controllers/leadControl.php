<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\leadManage;

class leadControl extends Controller
{
    public function leads(){
        return view('leads.lead');
    }
    public function addLead(){
        return view('leads.addLead');
    }

    public function saveLead(Request $requ){
        $chk = leadManage::where(['email'=>$requ->mail])->get();
        if(!empty($chk) && count($chk)>1):
            return back()->with('error','Sorry! User already exist');
        endif;

        $lead = new leadManage();
        $lead->fullName = $requ->fullName;
        if($lead->save()):
            return back()->with('success','Great! Data saved successfully');
        else:
            return back()->with('error','Sorry! An error occoured');
        endif;
    }
}
