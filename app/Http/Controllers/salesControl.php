<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class salesControl extends Controller
{
    public function salesCon(){
        return view('sales.salesDashboard');
    }

    public function taskForm(){
        return view('sales.taskform');
    }

    public function clientProfile($email = null){
        // Default email if none provided in URL
        if (!$email) {
            $email = request()->get('email', 'integration-demo@match-trade.com');
        }
        
        // Debug the URL construction
        $baseUrl = env('API_BASE_URL');
        $fullUrl = rtrim($baseUrl, '/') . '/accounts/by-email/' . $email;
        
        \Log::info('Client Profile API Request:', [
            'base_url' => $baseUrl,
            'full_url' => $fullUrl,
            'email' => $email,
            'authorization' => env('API_AUTHORIZATION')
        ]);

        // Make API request to get client data by email
        $response = Http::withHeaders([
            'Content-Type' => env('API_CONTENT_TYPE'),
            'Authorization' => env('API_AUTHORIZATION'),
        ])->get($fullUrl);

        \Log::info('Client Profile API Response:', [
            'status' => $response->status(),
            'successful' => $response->successful(),
            'body' => $response->body()
        ]);

        if (!$response->successful()) {
            \Log::error('Client Profile API Error:', [
                'status' => $response->status(),
                'response' => $response->body(),
                'url' => $fullUrl
            ]);
            
            // Fallback to sample data or empty array
            $clientData = [
                'email' => $email,
                'error' => 'Unable to fetch client data',
                'status' => $response->status()
            ];
        } else {
            $json = $response->json();
            
            \Log::info('Raw API JSON Response:', ['json' => $json]);
            
            // Helper function to safely get string values
            $safeString = function($value) {
                if (is_array($value) || is_object($value)) {
                    return json_encode($value);
                }
                return $value ? (string) $value : null;
            };

            // Map the client data structure to match the exact API response format
            $clientData = [
                // Main account information
                'uuid' => $safeString(data_get($json, 'uuid')),
                'created' => $safeString(data_get($json, 'created')),
                'updated' => $safeString(data_get($json, 'updated')),
                'email' => $safeString(data_get($json, 'email')),
                'verificationStatus' => $safeString(data_get($json, 'verificationStatus')),
                'type' => $safeString(data_get($json, 'type')),
                
                // Personal Details structure
                'personalDetails' => [
                    'firstname' => $safeString(data_get($json, 'personalDetails.firstname')),
                    'lastname' => $safeString(data_get($json, 'personalDetails.lastname')),
                    'dateOfBirth' => $safeString(data_get($json, 'personalDetails.dateOfBirth')),
                    'citizenship' => $safeString(data_get($json, 'personalDetails.citizenship')),
                    'language' => $safeString(data_get($json, 'personalDetails.language')),
                    'maritalStatus' => $safeString(data_get($json, 'personalDetails.maritalStatus')),
                    'passport' => [
                        'number' => $safeString(data_get($json, 'personalDetails.passport.number')),
                        'country' => $safeString(data_get($json, 'personalDetails.passport.country'))
                    ],
                    'taxIdentificationNumber' => $safeString(data_get($json, 'personalDetails.taxIdentificationNumber'))
                ],
                
                // Contact Details structure
                'contactDetails' => [
                    'email' => $safeString(data_get($json, 'email')), // Main email from top level
                    'phoneNumber' => $safeString(data_get($json, 'contactDetails.phoneNumber')),
                    'faxNumber' => $safeString(data_get($json, 'contactDetails.faxNumber')),
                    'contactDate' => $safeString(data_get($json, 'contactDetails.toContact.toContactDate')),
                    'toContact' => [
                        'toContactDate' => $safeString(data_get($json, 'contactDetails.toContact.toContactDate')),
                        'alreadyContacted' => data_get($json, 'contactDetails.toContact.alreadyContacted', false)
                    ]
                ],
                
                // Account Configuration structure  
                'accountConfiguration' => [
                    'partnerId' => data_get($json, 'accountConfiguration.partnerId'),
                    'branchUuid' => $safeString(data_get($json, 'accountConfiguration.branchUuid')),
                    'roleUuid' => $safeString(data_get($json, 'accountConfiguration.roleUuid')),
                    'verificationStatus' => $safeString(data_get($json, 'verificationStatus')), // From top level
                    'accountType' => $safeString(data_get($json, 'type')), // From top level 'type' field
                    'role' => 'USER', // Default role since not in API response
                    'branch' => 'Main Branch', // Default branch since not in API response
                    'ibAccount' => $safeString(data_get($json, 'accountConfiguration.ibParentTradingAccountUuid')),
                    'createdAt' => $safeString(data_get($json, 'created')),
                    'lastLoginIp' => 'N/A', // Not available in API
                    'lastLoginTime' => $safeString(data_get($json, 'updated')), // Use updated time
                    'weather' => 'N/A', // Not available in API
                    'localTime' => date('H:i'), // Current server time as fallback
                    'balance' => 0, // Default values for financial data
                    'credit' => 0,
                    'equity' => 0,
                    'freeMargin' => 0,
                    'totalDeposits' => 0,
                    'totalWithdrawals' => 0,
                    'accountManager' => [
                        'uuid' => $safeString(data_get($json, 'accountConfiguration.accountManager.uuid')),
                        'email' => $safeString(data_get($json, 'accountConfiguration.accountManager.email')),
                        'name' => $safeString(data_get($json, 'accountConfiguration.accountManager.name'))
                    ],
                    'ibParentTradingAccountUuid' => $safeString(data_get($json, 'accountConfiguration.ibParentTradingAccountUuid')),
                    'crmUserScope' => [
                        'branchScope' => data_get($json, 'accountConfiguration.crmUserScope.branchScope', []),
                        'managerPools' => data_get($json, 'accountConfiguration.crmUserScope.managerPools', [])
                    ],
                    'accountTypeContact' => data_get($json, 'accountConfiguration.accountTypeContact', false)
                ],
                
                // Address Details structure
                'addressDetails' => [
                    'country' => $safeString(data_get($json, 'addressDetails.country')),
                    'state' => $safeString(data_get($json, 'addressDetails.state')),
                    'city' => $safeString(data_get($json, 'addressDetails.city')),
                    'postCode' => $safeString(data_get($json, 'addressDetails.postCode')),
                    'address' => $safeString(data_get($json, 'addressDetails.address'))
                ],
                
                // Banking Details structure
                'bankingDetails' => [
                    'bankAddress' => $safeString(data_get($json, 'bankingDetails.bankAddress')),
                    'bankSwiftCode' => $safeString(data_get($json, 'bankingDetails.bankSwiftCode')),
                    'bankAccount' => $safeString(data_get($json, 'bankingDetails.bankAccount')),
                    'bankName' => $safeString(data_get($json, 'bankingDetails.bankName')),
                    'accountName' => $safeString(data_get($json, 'bankingDetails.accountName'))
                ],
                
                // Lead Details structure
                'leadDetails' => [
                    'statusUuid' => $safeString(data_get($json, 'leadDetails.statusUuid')),
                    'leadStatus' => $safeString(data_get($json, 'leadDetails.status')), // From API response
                    'leadSource' => $safeString(data_get($json, 'leadDetails.source')), // From API response
                    'leadProvider' => $safeString(data_get($json, 'leadDetails.providerUuid')),
                    'convertedFromLeadAt' => $safeString(data_get($json, 'leadDetails.becomeActiveClientTime')),
                    'source' => $safeString(data_get($json, 'leadDetails.source')),
                    'providerUuid' => $safeString(data_get($json, 'leadDetails.providerUuid')),
                    'becomeActiveClientTime' => $safeString(data_get($json, 'leadDetails.becomeActiveClientTime'))
                ]
            ];
            
            \Log::info('Processed Client Data Structure:', [
                'email' => $clientData['contactDetails']['email'] ?? 'missing',
                'firstname' => $clientData['personalDetails']['firstname'] ?? 'missing',
                'lastname' => $clientData['personalDetails']['lastname'] ?? 'missing',
                'country' => $clientData['addressDetails']['country'] ?? 'missing',
                'verification' => $clientData['accountConfiguration']['verificationStatus'] ?? 'missing'
            ]);
        }

        \Log::info('Final clientData passed to view:', ['clientData' => $clientData]);

        return view('sales.clientDashbord.clientProfile', compact('clientData', 'email'));
    }

    public function offerForm(){
        return view('sales.clientDashbord.accountPart.editOffer');
    }

    public function addTradingAcc(){
        return view('sales.clientDashbord.accountPart.addTradingAccount');
    }

    public function addDepositAcc(){
        return view('sales.clientDashbord.accountPart.addDepositAccount');
    }

    public function addWidthdrawAcc(){
        return view('sales.clientDashbord.accountPart.addWidthdrawAccount');
    }

    public function trandingAccountDetail(){
        return view('sales.clientDashbord.accountPart.idSection.trandingAccount_AccountDetail');
    }

    public function depositRequest(){
        return view('sales.clientDashbord.dipo&widthPart.dipositRequest');
    }

    public function depositPayment(){
        return view('sales.clientDashbord.dipo&widthPart.depositPayment');
    }

    public function widthdrawPayment(){
        return view('sales.clientDashbord.dipo&widthPart.widthdrawPayment');
    }

    public function widthdrawRequest(){
        return view('sales.clientDashbord.dipo&widthPart.widthdrawRequest');
    }
}
