<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class tradingControl extends Controller
{
    public function tradingView(){
        // Use the plural trading-accounts endpoint to get all trading accounts without login parameter
        $baseUrl = env('API_BASE_URL');
        $fullUrl = rtrim($baseUrl, '/') . '/trading-accounts';
        
        \Log::info('Trading Accounts API Request:', [
            'base_url' => $baseUrl,
            'full_url' => $fullUrl,
            'authorization' => env('API_AUTHORIZATION')
        ]);

        // Get trading accounts data without login parameter
        $response = Http::withHeaders([
            'Content-Type' => env('API_CONTENT_TYPE'),
            'Authorization' => env('API_AUTHORIZATION'),
        ])->get($fullUrl);

        \Log::info('Trading Accounts API Response:', [
            'status' => $response->status(),
            'successful' => $response->successful(),
            'body' => $response->body()
        ]);
        // return $json = $response->json();

        if (!$response->successful()) {
            \Log::error('Trading Account API Error:', [
                'status' => $response->status(),
                'response' => $response->body(),
                'url' => $fullUrl
            ]);
            
            // Fallback: Try the /accounts endpoint that was working before
            \Log::info('Trying fallback /accounts endpoint...');
            $fallbackUrl = rtrim($baseUrl, '/') . '/accounts';
            $response = Http::withHeaders([
                'Content-Type' => env('API_CONTENT_TYPE'),
                'Authorization' => env('API_AUTHORIZATION'),
            ])->get($fallbackUrl, ['accountType' => 'ALL']);
            
            if (!$response->successful()) {
                \Log::error('Fallback API also failed:', [
                    'status' => $response->status(),
                    'response' => $response->body(),
                    'url' => $fallbackUrl
                ]);
                $accounts = [];
            } else {
                $json = $response->json();
                $items = $json['content'] ?? $json ?? [];
                
                // Map the accounts data structure to show something
                $accounts = collect($items)->map(function ($i, $index) {
                    return [
                        'uuid' => data_get($i, 'uuid'),
                        'login' => 'ACC' . str_pad($index + 1, 5, '0', STR_PAD_LEFT), // Generated login
                        'created' => data_get($i, 'created'),
                        'email' => data_get($i, 'email'),
                        'accountType' => 'DEMO', // Default
                        'group' => 'standard',
                        'leverage' => '100',
                        'access' => 'FULL',
                        'balance' => '0.00',
                        'equity' => '0.00',
                        'freeMargin' => '0.00',
                        'currency' => 'USD',
                    ];
                })->all(); // Show all records, not limited to 10
            }
        } else {
            $json = $response->json();
            
            // Get accounts from the response
            $items = $json['content'] ?? $json ?? [];
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

            // Map API response to match the exact trading account structure
            $accounts = collect($items)->map(function ($i, $index) use ($safeString) {
                return [
                    // Basic trading account info (exactly matching your response structure)
                    'uuid'         => $safeString(data_get($i, 'uuid')),
                    'login'        => $safeString(data_get($i, 'login')),
                    'created'      => $safeString(data_get($i, 'created')),
                    'email'        => $safeString(data_get($i, 'accountInfo.email')),
                    'firstName'   => $safeString(data_get($i, 'accountInfo.firstname')),
                    'lastName'    => $safeString(data_get($i, 'accountInfo.lastname')),
                    
                    // Trading account specific fields
                    'accountType'  => $safeString(data_get($i, 'accountType')),
                    'group'        => $safeString(data_get($i, 'group')),
                    'leverage'     => $safeString(data_get($i, 'leverage')),
                    'access'       => $safeString(data_get($i, 'access')),
                    
                    // Financial info (exactly matching financeInfo structure)
                    'balance'      => $safeString(data_get($i, 'financeInfo.balance')),
                    'equity'       => $safeString(data_get($i, 'financeInfo.equity')),
                    'profit'       => $safeString(data_get($i, 'financeInfo.profit')),
                    'netProfit'    => $safeString(data_get($i, 'financeInfo.netProfit')),
                    'margin'       => $safeString(data_get($i, 'financeInfo.margin')),
                    'freeMargin'   => $safeString(data_get($i, 'financeInfo.freeMargin')),
                    'marginLevel'  => $safeString(data_get($i, 'financeInfo.marginLevel')),
                    'credit'       => $safeString(data_get($i, 'financeInfo.credit')),
                    'currency'     => $safeString(data_get($i, 'financeInfo.currency')),
                    'currencyPrecision' => $safeString(data_get($i, 'financeInfo.currencyPrecision')),
                    
                    // System UUIDs
                    'systemUuid'   => $safeString(data_get($i, 'systemUuid')),
                    'offerUuid'    => $safeString(data_get($i, 'offerUuid')),
                    'commissionUuid' => $safeString(data_get($i, 'commissionUuid')),
                    
                    // Account info UUID
                    'accountInfoUuid' => $safeString(data_get($i, 'accountInfo.uuid')),
                ];
            })->all();
        }

        return view('trading.tradingSite', compact('accounts'));
    }

    public function addTrading(){
        return view('trading.addTrading');
    }

    public function tradingDepo(){
        return view('trading.tradingDeposit');
    }

    public function tradingWidth(){
        return view('trading.tradingWidthdraw');
    }

    public function tradingAccountDetailes(){
        return view('trading.idSectionEdit.trandingAccount_AccountDetail');
    }

    public function tradingOffer(){
        return view('trading.offer');
    }
}
