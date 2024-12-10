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

  //rolse management str
    public function rolesManagement(){
        return view('configuration.rolesManagement.rolesManagementPage');  // rolse management page
    }

    public function addRolesManagement(){
        return view('configuration.rolesManagement.addRolesManagement');  // ADD rolse management page
    }


    public function editRolesManagement(){
        return view('configuration.rolesManagement.editRolesManagement');  // EDIT rolse management page
    }


//rolse management end
    public function mlib(){
        return view('configuration.mlib');
    }
// Banner str
    public function banner(){
        return view('configuration.banner.bannerPage');    //banner main page
    }
    

    public function addBanner(){
        return view('configuration.banner.addBanner');    // Add banner  page
    }
    //banner end

    //pool management str
    public function poolManagement(){
        return view('configuration.poolManagement.poolManagementPage');  //poolManagement main page
    }

    
    public function addPoolManagement(){
        return view('configuration.poolManagement.addPoolManagement');  //poolManagement Add
    }

      //pool management end

      // trams & conditon Str
    public function tramsConditions(){
        return view('configuration.tram&condition.trams&conditionsPage');  // trams & conditon mani page
    }

    public function addTramsConditions(){
        return view('configuration.tram&condition.addTrams&conditions');  // trams & conditon add page
    }

    public function editTramsConditions(){
        return view('configuration.tram&condition.editTrams&conditions');  // trams & conditon edit page
    }
// trams & conditon end
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
//Branch and User str
    public function branchandUser(){
        return view('configuration.branch&User.branch&user');  //barnch & user main page
    }
    
    public function addBranch(){
        return view('configuration.branch&User.addBranch');  //ADD barnch 
    }

    public function editBranch(){
        return view('configuration.branch&User.editBranch');  //EDIT barnch 
    }

    public function addUser(){
        return view('configuration.branch&User.addUser');  //add User 
    }

//Branch and User end
    public function kyc(){
        return view('configuration.kyc');
    }
}
