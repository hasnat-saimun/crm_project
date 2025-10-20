<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Exception;

class salesControl extends Controller
{
    public function salesCon(){
        return view('sales.salesDashboard');
    }

    public function taskForm(){
        return view('sales.taskform');
    }

    public function clientProfile($email = null){
        // Simple debug - write to a file
        file_put_contents(storage_path('logs/debug.txt'), "Client Profile Called: " . date('Y-m-d H:i:s') . " - Email: " . $email . PHP_EOL, FILE_APPEND);
        
        \Log::info('=== CLIENT PROFILE FUNCTION CALLED ===', [
            'email_parameter' => $email,
            'request_url' => request()->url(),
            'timestamp' => now()
        ]);

        if (!$email) {
            \Log::error('No email provided to clientProfile function');
            return redirect()->back()->with('error', 'Email parameter is required');
        }
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
        file_put_contents(storage_path('logs/debug.txt'), "Making API call to: " . $fullUrl . PHP_EOL, FILE_APPEND);
        
        $response = Http::withHeaders([
            'Content-Type' => env('API_CONTENT_TYPE'),
            'Authorization' => env('API_AUTHORIZATION'),
        ])->get($fullUrl);

        file_put_contents(storage_path('logs/debug.txt'), "API Response Status: " . $response->status() . PHP_EOL, FILE_APPEND);
        file_put_contents(storage_path('logs/debug.txt'), "API Response Success: " . ($response->successful() ? 'YES' : 'NO') . PHP_EOL, FILE_APPEND);

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
            
            file_put_contents(storage_path('logs/debug.txt'), "API FAILED - Status: " . $response->status() . PHP_EOL, FILE_APPEND);
            
            // Fallback to sample data or empty array
            $clientData = [
                'email' => $email,
                'error' => 'Unable to fetch client data',
                'status' => $response->status()
            ];
        } else {
            file_put_contents(storage_path('logs/debug.txt'), "API SUCCESS - Processing data..." . PHP_EOL, FILE_APPEND);
            
            $json = $response->json();
            
            file_put_contents(storage_path('logs/debug.txt'), "Got JSON data with keys: " . implode(', ', array_keys($json)) . PHP_EOL, FILE_APPEND);
            file_put_contents(storage_path('logs/debug.txt'), "RAW API RESPONSE: " . json_encode($json) . PHP_EOL, FILE_APPEND);
            
            // Check if the API response has any financial data
            file_put_contents(storage_path('logs/debug.txt'), "Checking for financial data in API response..." . PHP_EOL, FILE_APPEND);
            file_put_contents(storage_path('logs/debug.txt'), "Has balance field: " . (isset($json['balance']) ? 'YES: ' . $json['balance'] : 'NO') . PHP_EOL, FILE_APPEND);
            file_put_contents(storage_path('logs/debug.txt'), "Has trading accounts: " . (isset($json['tradingAccounts']) ? 'YES' : 'NO') . PHP_EOL, FILE_APPEND);
            file_put_contents(storage_path('logs/debug.txt'), "Has accountConfiguration.balance: " . (isset($json['accountConfiguration']['balance']) ? 'YES: ' . $json['accountConfiguration']['balance'] : 'NO') . PHP_EOL, FILE_APPEND);
            
            \Log::info('Raw API JSON Response:', ['json' => $json]);
            
            // Try to get trading account data for financial information
            $tradingAccountData = $this->fetchTradingAccountData($email);
            
            file_put_contents(storage_path('logs/debug.txt'), "Trading account data result: " . ($tradingAccountData ? 'FOUND' : 'NOT FOUND') . PHP_EOL, FILE_APPEND);
            
            if ($tradingAccountData) {
                // Merge trading account data into main JSON
                $json['tradingAccounts'] = $tradingAccountData;
                file_put_contents(storage_path('logs/debug.txt'), "Trading account keys: " . implode(', ', array_keys($tradingAccountData)) . PHP_EOL, FILE_APPEND);
                file_put_contents(storage_path('logs/debug.txt'), "Trading account content: " . json_encode($tradingAccountData) . PHP_EOL, FILE_APPEND);
                \Log::info('Trading Account Data Found:', ['tradingAccounts' => $tradingAccountData]);
            }
            
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
                    
                    // Debug: Log what financial data we're extracting
                    'balance' => $this->extractFinancialDataWithDebug($tradingAccountData, $email, 'balance'),
                    'credit' => $this->extractFinancialDataWithDebug($tradingAccountData, $email, 'credit'),
                    'equity' => $this->extractFinancialDataWithDebug($tradingAccountData, $email, 'equity'),
                    'freeMargin' => $this->extractFinancialDataWithDebug($tradingAccountData, $email, 'freeMargin'),
                    'profit' => $this->extractFinancialDataWithDebug($tradingAccountData, $email, 'profit'),
                    'totalDeposits' => 0, // Not available in current API structure
                    'totalWithdrawals' => 0, // Not available in current API structure
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
                    'accountTypeContact' => data_get($json, 'accountConfiguration.accountTypeContact', false),
                    // Add real trading accounts data from API
                    'tradingAccounts' => $this->formatTradingAccountsForDisplay($tradingAccountData, $email)
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
            
            file_put_contents(storage_path('logs/debug.txt'), "Final clientData created with balance: " . ($clientData['accountConfiguration']['balance'] ?? 'MISSING') . PHP_EOL, FILE_APPEND);
            file_put_contents(storage_path('logs/debug.txt'), "Final clientData email: " . ($clientData['contactDetails']['email'] ?? 'MISSING') . PHP_EOL, FILE_APPEND);
            
            \Log::info('Processed Client Data Structure:', [
                'email' => $clientData['contactDetails']['email'] ?? 'missing',
                'firstname' => $clientData['personalDetails']['firstname'] ?? 'missing',
                'lastname' => $clientData['personalDetails']['lastname'] ?? 'missing',
                'country' => $clientData['addressDetails']['country'] ?? 'missing',
                'verification' => $clientData['accountConfiguration']['verificationStatus'] ?? 'missing'
            ]);
        }

        \Log::info('Final clientData passed to view:', ['clientData' => $clientData]);

        \Log::info('=== ABOUT TO RENDER VIEW ===', [
            'view_name' => 'sales.clientDashbord.clientProfile',
            'has_clientData' => isset($clientData),
            'clientData_keys' => isset($clientData) ? array_keys($clientData) : 'not set',
            'email' => $email
        ]);

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

    /**
     * Format trading accounts data for display in the accounts tab
     */
    private function formatTradingAccountsForDisplay($tradingAccountData, $email) {
        if (!$tradingAccountData || !isset($tradingAccountData['content'])) {
            \Log::info("No trading account data available for display formatting");
            return [];
        }

        $accounts = $tradingAccountData['content'];
        $formattedAccounts = [];

        foreach ($accounts as $account) {
            $accountEmail = data_get($account, 'accountInfo.email');
            
            if ($accountEmail === $email) {
                $formattedAccounts[] = [
                    'accountId' => data_get($account, 'login'),
                    'uuid' => data_get($account, 'uuid'),
                    'email' => $accountEmail,
                    'offer' => data_get($account, 'group'),
                    'balance' => data_get($account, 'financeInfo.balance', 0),
                    'equity' => data_get($account, 'financeInfo.equity', 0),
                    'credit' => data_get($account, 'financeInfo.credit', 0),
                    'freeMargin' => data_get($account, 'financeInfo.freeMargin', 0),
                    'margin' => data_get($account, 'financeInfo.margin', 0),
                    'profit' => data_get($account, 'financeInfo.profit', 0),
                    'netProfit' => data_get($account, 'financeInfo.netProfit', 0),
                    'marginLevel' => data_get($account, 'financeInfo.marginLevel', 0),
                    'currency' => data_get($account, 'financeInfo.currency', 'USD'),
                    'currencyPrecision' => data_get($account, 'financeInfo.currencyPrecision', 2),
                    'accountType' => data_get($account, 'accountType'),
                    'leverage' => data_get($account, 'leverage'),
                    'access' => data_get($account, 'access'),
                    'created' => data_get($account, 'created'),
                    'offerUuid' => data_get($account, 'offerUuid'),
                    'systemUuid' => data_get($account, 'systemUuid')
                ];
                
                \Log::info("Formatted trading account for display", [
                    'login' => data_get($account, 'login'),
                    'accountType' => data_get($account, 'accountType'),
                    'balance' => data_get($account, 'financeInfo.balance', 0)
                ]);
            }
        }

        \Log::info("Trading accounts formatting complete", [
            'email' => $email,
            'foundAccounts' => count($formattedAccounts)
        ]);

        return $formattedAccounts;
    }

    /**
     * Extract financial data from trading accounts API response for a specific email with debugging
     */
    private function extractFinancialDataWithDebug($tradingAccountData, $email, $field) {
        \Log::info("Starting financial data extraction", [
            'email' => $email,
            'field' => $field,
            'hasData' => !empty($tradingAccountData)
        ]);
        
        if (!$tradingAccountData || !isset($tradingAccountData['content'])) {
            \Log::info("No trading account data available for financial extraction");
            file_put_contents(storage_path('logs/debug.txt'), "FINANCIAL EXTRACTION: No data available for {$field} - returning 0" . PHP_EOL, FILE_APPEND);
            return 0;
        }

        $accounts = $tradingAccountData['content'];
        $totalValue = 0;
        $foundAccounts = 0;

        file_put_contents(storage_path('logs/debug.txt'), "FINANCIAL EXTRACTION: Checking " . count($accounts) . " accounts for email {$email}, field {$field}" . PHP_EOL, FILE_APPEND);

        foreach ($accounts as $account) {
            $accountEmail = data_get($account, 'accountInfo.email');
            
            if ($accountEmail === $email) {
                $value = data_get($account, 'financeInfo.' . $field, 0);
                $totalValue += (float) $value;
                $foundAccounts++;
                
                file_put_contents(storage_path('logs/debug.txt'), "MATCH FOUND: Login " . data_get($account, 'login') . " - " . $field . ": " . $value . " (Type: " . data_get($account, 'accountType') . ")" . PHP_EOL, FILE_APPEND);
                
                \Log::info("Found trading account for {$email}", [
                    'login' => data_get($account, 'login'),
                    'accountType' => data_get($account, 'accountType'),
                    'field' => $field,
                    'value' => $value
                ]);
            }
        }

        file_put_contents(storage_path('logs/debug.txt'), "FINAL RESULT: {$field} = {$totalValue} (from {$foundAccounts} accounts)" . PHP_EOL, FILE_APPEND);

        \Log::info("Financial data extraction complete", [
            'email' => $email,
            'field' => $field,
            'foundAccounts' => $foundAccounts,
            'totalValue' => $totalValue
        ]);

        return $totalValue;
    }

    /**
     * Extract financial data from trading accounts API response for a specific email
     */
    private function extractFinancialData($tradingAccountData, $email, $field) {
        if (!$tradingAccountData || !isset($tradingAccountData['content'])) {
            \Log::info("No trading account data available for financial extraction");
            return 0;
        }

        $accounts = $tradingAccountData['content'];
        $totalValue = 0;
        $foundAccounts = 0;

        foreach ($accounts as $account) {
            $accountEmail = data_get($account, 'accountInfo.email');
            
            if ($accountEmail === $email) {
                $value = data_get($account, 'financeInfo.' . $field, 0);
                $totalValue += (float) $value;
                $foundAccounts++;
                
                \Log::info("Found trading account for {$email}", [
                    'login' => data_get($account, 'login'),
                    'accountType' => data_get($account, 'accountType'),
                    'field' => $field,
                    'value' => $value
                ]);
            }
        }

        \Log::info("Financial data extraction complete", [
            'email' => $email,
            'field' => $field,
            'foundAccounts' => $foundAccounts,
            'totalValue' => $totalValue
        ]);

        return $totalValue;
    }

    /**
     * Get financial data from API response or return demo data
     */
    private function getFinancialData($json, $field, $demoValue) {
        // Try to get from trading accounts if available
        $tradingAccounts = data_get($json, 'tradingAccounts', []);
        if (!empty($tradingAccounts) && is_array($tradingAccounts)) {
            $totalValue = 0;
            foreach ($tradingAccounts as $account) {
                $totalValue += (float) data_get($account, $field, 0);
            }
            return $totalValue;
        }
        
        // Try to get from account balance section
        $accountBalance = data_get($json, 'accountBalance.'.$field);
        if ($accountBalance !== null) {
            return (float) $accountBalance;
        }
        
        // Try to get from direct field
        $directValue = data_get($json, $field);
        if ($directValue !== null) {
            return (float) $directValue;
        }
        
        // Return realistic demo data based on client type and status
        $clientType = data_get($json, 'type', 'RETAIL');
        $multiplier = $clientType === 'PROFESSIONAL' ? 1.5 : 1.0;
        
        return $demoValue * $multiplier;
    }

    /**
     * Attempt to fetch trading account data for financial information
     */
    private function fetchTradingAccountData($email) {
        $baseUrl = env('API_BASE_URL');
        $possibleEndpoints = [
            '/trading-accounts',
            '/accounts/' . urlencode($email) . '/trading-accounts',
            '/trading-accounts/by-email/' . urlencode($email),
        ];
        
        foreach ($possibleEndpoints as $endpoint) {
            try {
                $fullUrl = $baseUrl . $endpoint;
                \Log::info('Trying trading account endpoint:', ['url' => $fullUrl]);
                
                $response = Http::withHeaders([
                    'Content-Type' => env('API_CONTENT_TYPE'),
                    'Authorization' => env('API_AUTHORIZATION'),
                ])->get($fullUrl);
                
                if ($response->successful()) {
                    $data = $response->json();
                    \Log::info('Trading account data retrieved from: ' . $endpoint, ['data' => $data]);
                    return $data;
                }
            } catch (Exception $e) {
                \Log::debug('Trading account endpoint failed: ' . $endpoint, ['error' => $e->getMessage()]);
                continue;
            }
        }
        
        \Log::info('No trading account endpoints available, using demo financial data');
        return null;
    }
}
