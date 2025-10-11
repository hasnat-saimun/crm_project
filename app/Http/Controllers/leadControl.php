<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\leadManage;

class leadControl extends Controller
{
    public function leads(){
        // Debug the URL construction
        $baseUrl = env('API_BASE_URL');
        $fullUrl = rtrim($baseUrl, '/') . '/accounts';
        
        \Log::info('Leads API Request:', [
            'base_url' => $baseUrl,
            'full_url' => $fullUrl,
            'authorization' => env('API_AUTHORIZATION')
        ]);

        $response = Http::withHeaders([
            'Content-Type' => env('API_CONTENT_TYPE'),
            'Authorization' => env('API_AUTHORIZATION'),
        ])->get($fullUrl, [
            'accountType' => 'LEAD'
        ]);

        if (!$response->successful()) {
            \Log::error('Leads API Error:', [
                'status' => $response->status(),
                'response' => $response->body(),
                'url' => $fullUrl
            ]);
            
            // Fallback to sample data for testing
            $leads = $this->getSampleLeads();
            return view('leads.lead', compact('leads'));
        }

        $json = $response->json();

        // Debug the API response structure
        \Log::info('Leads API Response Structure:', [
            'response' => $json,
            'content_count' => count($json['content'] ?? [])
        ]);

        // Many APIs return a paged list under "content"; fall back to root if not.
        $items = $json['content'] ?? $json;
        if (!is_array($items)) {
            $items = [];
        }

        // Helper function to safely get string values
        $safeString = function($value) {
            if (is_array($value) || is_object($value)) {
                return json_encode($value);
            }
            return $value ? (string) $value : null;
        };

        // Map API response to match the lead data structure
        $leads = collect($items)->map(function ($i) use ($safeString) {
            return [
                'uuid'           => $safeString(data_get($i, 'uuid')),
                'email'          => $safeString(data_get($i, 'email')),
                'firstName'      => $safeString(data_get($i, 'personalDetails.firstname')),
                'lastName'       => $safeString(data_get($i, 'personalDetails.lastname')),
                'created'        => $safeString(data_get($i, 'created')),
                'updated'        => $safeString(data_get($i, 'updated')),
                'verificationStatus' => $safeString(data_get($i, 'verificationStatus')),
                'type'           => $safeString(data_get($i, 'type')),
                'alreadyContacted' => data_get($i, 'contactDetails.toContact.alreadyContacted', false),
                'toContactDate'  => $safeString(data_get($i, 'contactDetails.toContact.toContactDate')),
                'phoneNumber'    => $safeString(data_get($i, 'contactDetails.phoneNumber')),
                'country'        => $safeString(data_get($i, 'addressDetails.country')),
                'city'           => $safeString(data_get($i, 'addressDetails.city')),
                'language'       => $safeString(data_get($i, 'personalDetails.language')),
                'leadStatus'     => $safeString(data_get($i, 'leadDetails.statusUuid')),
                'leadSource'     => $safeString(data_get($i, 'leadDetails.source')),
                'becomeActiveTime' => $safeString(data_get($i, 'leadDetails.becomeActiveClientTime')),
                'accountManager' => $safeString(data_get($i, 'accountConfiguration.accountManager.email')),
                'managerName'    => $safeString(data_get($i, 'accountConfiguration.accountManager.name')),
                'branchUuid'     => $safeString(data_get($i, 'accountConfiguration.branchUuid')),
                'roleUuid'       => $safeString(data_get($i, 'accountConfiguration.roleUuid')),
                'partnerId'      => $safeString(data_get($i, 'accountConfiguration.partnerId')),
                'citizenship'    => $safeString(data_get($i, 'personalDetails.citizenship')),
                'dateOfBirth'    => $safeString(data_get($i, 'personalDetails.dateOfBirth')),
                'maritalStatus'  => $safeString(data_get($i, 'personalDetails.maritalStatus')),
            ];
        })->all();
        
        \Log::info('Final Leads Data:', [
            'leads_count' => count($leads),
            'first_lead' => $leads[0] ?? 'No leads found'
        ]);

        return view('leads.lead', compact('leads'));
    }

    private function getSampleLeads()
    {
        return [
            [
                'uuid' => '0044eb05-6964-40e1-a920-c6a3e8258569',
                'email' => 'integration-demo@match-trade.com',
                'firstName' => 'Demo',
                'lastName' => 'Integration Account',
                'created' => '2024-04-05T13:37:54.014Z',
                'updated' => '2024-04-05T13:37:54.014Z',
                'verificationStatus' => 'NEW',
                'type' => 'RETAIL',
                'alreadyContacted' => false,
                'toContactDate' => null,
                'phoneNumber' => '+1111111111',
                'country' => 'US',
                'city' => 'New York',
                'language' => 'en',
                'leadStatus' => '77092554-9ab3-44ab-a5c9-49fcc7c459fa',
                'leadSource' => 'Client Referral',
                'becomeActiveTime' => '2024-04-05T13:37:53.953Z',
                'accountManager' => 'conversion@roles.test',
                'managerName' => 'Conversion Manager',
                'branchUuid' => 'd3318c30-8c90-4018-ac25-fe2d8444d77e',
                'roleUuid' => '1e7c3cc4-0780-4dcf-850e-b9b444bcc561',
                'partnerId' => null,
                'citizenship' => 'US',
                'dateOfBirth' => '2000-01-01',
                'maritalStatus' => 'Married',
            ],
            [
                'uuid' => '1144eb05-6964-40e1-a920-c6a3e8258570',
                'email' => 'test@example.com',
                'firstName' => 'John',
                'lastName' => 'Doe',
                'created' => '2024-10-01T10:30:00.000Z',
                'updated' => '2024-10-01T10:30:00.000Z',
                'verificationStatus' => 'PENDING',
                'type' => 'RETAIL',
                'alreadyContacted' => true,
                'toContactDate' => '2024-10-05T14:00:00.000Z',
                'phoneNumber' => '+1234567890',
                'country' => 'UK',
                'city' => 'London',
                'language' => 'en',
                'leadStatus' => '88092554-9ab3-44ab-a5c9-49fcc7c459fb',
                'leadSource' => 'Website Form',
                'becomeActiveTime' => '2024-10-01T10:30:00.000Z',
                'accountManager' => 'sales@roles.test',
                'managerName' => 'Sales Manager',
                'branchUuid' => 'e4418c30-8c90-4018-ac25-fe2d8444d77f',
                'roleUuid' => '2f8c3cc4-0780-4dcf-850e-b9b444bcc562',
                'partnerId' => 'PARTNER001',
                'citizenship' => 'UK',
                'dateOfBirth' => '1985-05-15',
                'maritalStatus' => 'Single',
            ]
        ];
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
