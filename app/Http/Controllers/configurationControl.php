<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class configurationControl extends Controller
{
    // oparation str
    public function oparation(){
        return view('configuration.oparation.oparationPage');
    }

    public function addOparation(){
        return view('configuration.oparation.addOparationPage');
    }

    public function editOparation(){
        return view('configuration.oparation.oparationEditForm');
    }

    public function emailNotification(){
        return view('configuration.oparation.emailNotificationCreate');
    }

    //opration end

    //Offer str
    public function offers(){
        return view('configuration.offer.offersPage');
    }
    
    public function addOffer(){
        return view('configuration.offer.addOffer');
    }
   // Offer end

   //paymentGateway str
    public function paymentGateway(){
        return view('configuration.payment.paymentGateway');
    }

    public function addPaymentGateway(){
        return view('configuration.payment.addPaymentGateway');
    }

    public function editPaymentGateway(){
        return view('configuration.payment.editPaymentGateway');
    }

    
  //paymentGateway end
    public function rolesManagement(){
        return view('configuration.rolesManagement');
    }

    public function mlib(){
        return view('configuration.mlib');
    }

    public function banner(){
        return view('configuration.banner');
    }

    public function poolManagement(){
        return view('configuration.poolManagement');
    }

    public function tramsConditions(){
        return view('configuration.trams&conditions');
    }

    public function leadStatus(){
        return view('configuration.leadStatus');
    }

    public function leadAssignment(){
        return view('configuration.leadAssignment');
    }

    
    public function depositBonuse(){
        return view('configuration.depositBonuse');
    }

    public function cashBack(){
        return view('configuration.cashBack');
    }

    public function branchandUser(){
        return view('configuration.branch$user');
    }

    public function kyc(){
        return view('configuration.kyc');
    }
}
