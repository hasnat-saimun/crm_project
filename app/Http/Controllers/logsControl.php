<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logsControl extends Controller
{

    public function crmAudit(){
        return view('logs.crmAudit.crm_audit_logs');
    }
    public function viewAuditlog(){
        return view('logs.crmAudit.viewAuditlog');
    }
// crm log str
    public function clientLog(){
        return view('logs.crmLog.client_log');
    }

    public function viewClienlog(){
        return view('logs.crmLog.viewClientlog');
    }

    // crm log end
}
