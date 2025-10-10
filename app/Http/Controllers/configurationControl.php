<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
        
        // Debug the URL construction
        $baseUrl = env('API_BASE_URL');
        $fullUrl = rtrim($baseUrl, '/') . '/offers';
        
        \Log::info('Client API Request:', [
            'base_url' => $baseUrl,
            'full_url' => $fullUrl,
            'authorization' => env('API_AUTHORIZATION')
        ]);

        $response = Http::withHeaders([
            'Content-Type'  => env('API_CONTENT_TYPE'),
            'Authorization' => 'Bearer ' . env('API_AUTHORIZATION'),
        ])->get($fullUrl);

        if (!$response->successful()) {
            abort(502, 'Broker API error: '.$response->status());
        }

        // Convert JSON response into array
        $data = $response->json();
        $offers = $data['offers'] ?? $data['data'] ?? $data;

        // Debug result
        // dd($data);

        return view('configuration.offer.offersPage', ['offers' => $offers]);
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

//lead status str 
    public function leadStatus(){
        return view('configuration.leadStatus.leadStatusPage');  // lead status main page
    }

    public function addLeadStatus(){
        return view('configuration.leadStatus.addLeadStatus');  // lead status add page
    }

    public function editLeadStatus(){
        return view('configuration.leadStatus.editLeadStatus');  // lead status edit page
    }
//lead status end

//lead assignment str
    public function leadAssignment(){
        return view('configuration.leadAssignment.leadAssignmentPage');
    }

    public function addLeadAssignment(){
        return view('configuration.leadAssignment.addLeadAssignment');
    }

    public function editLeadAssignment(){
        return view('configuration.leadAssignment.editLeadAssignment');
    }


//lead assignment end
    
// deposit bonus str
    public function depositBonuse(){
        return view('configuration.depositBonuse.depositBonusePage');
    }

    public function addDepositBonuse(){
        return view('configuration.depositBonuse.addDepositbonuse');
    }

    public function editDepositBonuse(){
        return view('configuration.depositBonuse.editDepositbonuse');
    }

//deposit bonus end

//cash back str
    public function cashBack(){
        return view('configuration.cashBack.cashBackPage'); //cash back main page
    }

    public function addCashBack(){
        return view('configuration.cashBack.addCashback');  //add cash back
    }

    public function editCashBack(){
        return view('configuration.cashBack.editCashback'); //edit cash back
    }
//cash back end
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
