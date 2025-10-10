<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class clientControl extends Controller
{
    public function client(){
        // Debug the URL construction
        $baseUrl = env('API_BASE_URL');
        $fullUrl = rtrim($baseUrl, '/') . '/accounts';
        
        \Log::info('Client API Request:', [
            'base_url' => $baseUrl,
            'full_url' => $fullUrl,
            'authorization' => env('API_AUTHORIZATION')
        ]);

        $response = Http::withHeaders([
            'Content-Type'  => env('API_CONTENT_TYPE'),
            'Authorization' => 'Bearer ' . env('API_AUTHORIZATION'),
        ])->get(
            $fullUrl,
            ['accountType' => 'CLIENT']
        );

        if (!$response->successful()) {
            abort(502, 'Broker API error: '.$response->status());
        }

        $json = $response->json();

        // Debug the API response structure
        \Log::info('API Response Structure:', [
            'response' => $json
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

        // Flatten each item so Blade can use simple keys
        $clients = collect($items)->map(function ($i) use ($safeString) {
            return [
                'email'        => $safeString(data_get($i, 'email')),
                'firstName'    => $safeString(data_get($i, 'personalDetails.firstname')),
                'lastName'     => $safeString(data_get($i, 'personalDetails.lastname')),
                'created'      => $safeString(data_get($i, 'created')),
                'lastContact'  => $safeString(data_get($i, 'contactDetails.toContact.toContactDate')),
                'status'       => $safeString(data_get($i, 'verificationStatus') ?? data_get($i, 'leadDetails.status')),
                'manager'      => $safeString(data_get($i, 'accountConfiguration.accountManager')),
                'affiliate'    => $safeString(data_get($i, 'accountConfiguration.partnerId')),
                'branch'       => $safeString(data_get($i, 'accountConfiguration.branchUuid')),
                'country'      => $safeString(data_get($i, 'addressDetails.country')),
                'phone'        => $safeString(data_get($i, 'contactDetails.phoneNumber')),
                'language'     => $safeString(data_get($i, 'personalDetails.language')),
                'role'         => $safeString(data_get($i, 'accountConfiguration.roleUuid')),
                // These fields don't exist in your sample; keep as null (or compute elsewhere)
                'lastOnline'     => null,
                'freeMargin'     => null,
                'equity'         => null,
                'marginLevel'    => null,
                'totalDeposits'  => null,
                'totalWithdrawals'=> null,
                'lastDeposit'    => null,
            ];
        })->all();

        return view('clients.client', compact('clients'));
    }

    public function addclient(){
        return view('clients.addClient');
    }
}
