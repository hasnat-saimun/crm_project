<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logsControl extends Controller
{
    public function crmAudit(){
        return view('logs.crm_audit_logs');
    }

    public function clientLog(){
        return view('logs.client_log');
    }
}
