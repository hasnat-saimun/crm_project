<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class clientControl extends Controller
{
    public function client(){
        $response = Http::withHeaders([
            'Content-Type'  => env('API_CONTENT_TYPE'),
            'Authorization' => env('API_AUTHORIZATION'),
        ])->get(
            rtrim(env('API_BASE_URL'), '/').'/accounts',
            ['accountType' => 'CLIENT'] // better than manually building query string
        );

        if (!$response->successful()) {
            abort(502, 'Broker API error: '.$response->status());
        }

        $json = $response->json();

        // Many APIs return a paged list under "content"; fall back to root if not.
        $items = $json['content'] ?? $json;
        if (!is_array($items)) {
            $items = [];
        }

        // Flatten each item so Blade can use simple keys
        $clients = collect($items)->map(function ($i) {
            return [
                'email'        => data_get($i, 'email'),
                'firstName'    => data_get($i, 'personalDetails.firstname'),
                'lastName'     => data_get($i, 'personalDetails.lastname'),
                'created'      => data_get($i, 'created'),
                'lastContact'  => data_get($i, 'contactDetails.toContact.toContactDate'),
                'status'       => data_get($i, 'verificationStatus') ?? data_get($i, 'leadDetails.status'),
                'manager'      => data_get($i, 'accountConfiguration.accountManager'),
                'affiliate'    => data_get($i, 'accountConfiguration.partnerId'),
                'branch'       => data_get($i, 'accountConfiguration.branchUuid'),
                'country'      => data_get($i, 'addressDetails.country'),
                'phone'        => data_get($i, 'contactDetails.phoneNumber'),
                'language'     => data_get($i, 'personalDetails.language'),
                'role'         => data_get($i, 'accountConfiguration.roleUuid'),
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
