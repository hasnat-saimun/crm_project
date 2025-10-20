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
            
            // Fallback to demo client structure when API fails
            $clientData = [
                'uuid' => 'demo-uuid-' . uniqid(),
                'email' => $email,
                'created' => date('Y-m-d\TH:i:s.u\Z'),
                'updated' => date('Y-m-d\TH:i:s.u\Z'),
                'verificationStatus' => 'NEW',
                'type' => 'RETAIL',
                
                'personalDetails' => [
                    'firstname' => 'Demo',
                    'lastname' => 'User',
                    'dateOfBirth' => null,
                    'citizenship' => 'AD',
                    'language' => null,
                    'maritalStatus' => null,
                    'passport' => [
                        'number' => null,
                        'country' => 'AD'
                    ],
                    'taxIdentificationNumber' => null
                ],
                
                'contactDetails' => [
                    'email' => $email,
                    'phoneNumber' => '+15564564564',
                    'faxNumber' => null,
                    'contactDate' => null,
                    'toContact' => [
                        'toContactDate' => null,
                        'alreadyContacted' => false
                    ]
                ],
                
                'accountConfiguration' => [
                    'partnerId' => 0,
                    'branchUuid' => 'demo-branch-uuid',
                    'roleUuid' => 'demo-role-uuid',
                    'verificationStatus' => 'NEW',
                    'accountType' => 'RETAIL',
                    'role' => 'USER',
                    'branch' => 'Demo Branch',
                    'ibAccount' => null,
                    'createdAt' => date('Y-m-d\TH:i:s.u\Z'),
                    'lastLoginIp' => 'N/A',
                    'lastLoginTime' => date('Y-m-d\TH:i:s.u\Z'),
                    'weather' => 'N/A',
                    'localTime' => date('H:i'),
                    
                    // Demo financial data
                    'balance' => 0,
                    'credit' => 0,
                    'equity' => 0,
                    'freeMargin' => 0,
                    'profit' => 0,
                    'totalDeposits' => 0,
                    'totalWithdrawals' => 0,
                    
                    'accountManager' => [
                        'uuid' => null,
                        'email' => null,
                        'name' => null
                    ],
                    'ibParentTradingAccountUuid' => null,
                    'crmUserScope' => [
                        'branchScope' => [],
                        'managerPools' => []
                    ],
                    'accountTypeContact' => false,
                    'tradingAccounts' => [] // Will be populated below
                ],
                
                'addressDetails' => [
                    'country' => null,
                    'state' => null,
                    'city' => null,
                    'postCode' => null,
                    'address' => null
                ],
                
                'bankingDetails' => [
                    'bankAddress' => null,
                    'bankSwiftCode' => null,
                    'bankAccount' => null,
                    'bankName' => null,
                    'accountName' => null
                ],
                
                'leadDetails' => [
                    'statusUuid' => null,
                    'source' => null,
                    'providerUuid' => null,
                    'becomeActiveClientTime' => null
                ],
                
                'transactionHistory' => [
                    'deposits' => [],
                    'withdrawals' => []
                ],
                
                'apiError' => true, // Flag to indicate this is fallback data
                'status' => $response->status()
            ];
            
            // Add demo trading accounts for demonstration
            $tradingAccounts = $this->formatTradingAccountsForDisplay([], $email, [], []);
            $clientData['accountConfiguration']['tradingAccounts'] = $tradingAccounts;
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
            
            // Try to get deposit and withdrawal history
            $depositHistory = $this->fetchDepositHistory($email);
            $withdrawalHistory = $this->fetchWithdrawalHistory($email);
            
            file_put_contents(storage_path('logs/debug.txt'), "Trading account data result: " . ($tradingAccountData ? 'FOUND' : 'NOT FOUND') . PHP_EOL, FILE_APPEND);
            file_put_contents(storage_path('logs/debug.txt'), "Deposit history result: " . ($depositHistory ? 'FOUND' : 'NOT FOUND') . PHP_EOL, FILE_APPEND);
            file_put_contents(storage_path('logs/debug.txt'), "Withdrawal history result: " . ($withdrawalHistory ? 'FOUND' : 'NOT FOUND') . PHP_EOL, FILE_APPEND);
            
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
                    'balance' => $this->getFinancialDataWithFallback($tradingAccountData, $depositHistory, $withdrawalHistory, $email, 'balance'),
                    'credit' => $this->getFinancialDataWithFallback($tradingAccountData, $depositHistory, $withdrawalHistory, $email, 'credit'),
                    'equity' => $this->getFinancialDataWithFallback($tradingAccountData, $depositHistory, $withdrawalHistory, $email, 'equity'),
                    'freeMargin' => $this->getFinancialDataWithFallback($tradingAccountData, $depositHistory, $withdrawalHistory, $email, 'freeMargin'),
                    'profit' => $this->getFinancialDataWithFallback($tradingAccountData, $depositHistory, $withdrawalHistory, $email, 'profit'),
                    'totalDeposits' => $this->calculateTotalTransactions($depositHistory, $email, 'deposit'),
                    'totalWithdrawals' => $this->calculateTotalTransactions($withdrawalHistory, $email, 'withdrawal'),
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
                ],
                
                // Transaction History
                'transactionHistory' => [
                    'deposits' => $this->formatDepositHistory($depositHistory, $email),
                    'withdrawals' => $this->formatWithdrawalHistory($withdrawalHistory, $email)
                ]
            ];
            
            // Add trading accounts after main clientData is created
            \Log::info("About to call formatTradingAccountsForDisplay", [
                'email' => $email,
                'hasTradingAccountData' => !empty($tradingAccountData),
                'hasDepositHistory' => !empty($depositHistory),
                'hasWithdrawalHistory' => !empty($withdrawalHistory)
            ]);
            
            $tradingAccounts = $this->formatTradingAccountsForDisplay($tradingAccountData, $email, $depositHistory, $withdrawalHistory);
            
            \Log::info("formatTradingAccountsForDisplay returned", [
                'email' => $email,
                'result' => $tradingAccounts,
                'count' => count($tradingAccounts)
            ]);
            
            $clientData['accountConfiguration']['tradingAccounts'] = $tradingAccounts;
            
            file_put_contents(storage_path('logs/debug.txt'), "Final clientData created with balance: " . ($clientData['accountConfiguration']['balance'] ?? 'MISSING') . PHP_EOL, FILE_APPEND);
            file_put_contents(storage_path('logs/debug.txt'), "Trading accounts added: " . count($tradingAccounts) . " accounts" . PHP_EOL, FILE_APPEND);
            file_put_contents(storage_path('logs/debug.txt'), "Final clientData email: " . ($clientData['contactDetails']['email'] ?? 'MISSING') . PHP_EOL, FILE_APPEND);
            
            \Log::info('Processed Client Data Structure:', [
                'email' => $clientData['contactDetails']['email'] ?? 'missing',
                'firstname' => $clientData['personalDetails']['firstname'] ?? 'missing',
                'lastname' => $clientData['personalDetails']['lastname'] ?? 'missing',
                'country' => $clientData['addressDetails']['country'] ?? 'missing',
                'verification' => $clientData['accountConfiguration']['verificationStatus'] ?? 'missing'
            ]);
        }

        // DEBUG: Check trading accounts in final clientData
        \Log::info('Trading accounts debugging:', [
            'email' => $email,
            'has_accountConfiguration' => isset($clientData['accountConfiguration']),
            'has_tradingAccounts' => isset($clientData['accountConfiguration']['tradingAccounts']),
            'tradingAccounts_data' => $clientData['accountConfiguration']['tradingAccounts'] ?? 'not set',
            'tradingAccounts_count' => count($clientData['accountConfiguration']['tradingAccounts'] ?? [])
        ]);

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
    private function formatTradingAccountsForDisplay($tradingAccountData, $email, $depositHistory = null, $withdrawalHistory = null) {
        $formattedAccounts = [];
        
        if (!$tradingAccountData || !isset($tradingAccountData['content'])) {
            \Log::info("No trading account data available for display formatting, trying fallback approach");
            
            // Try to extract trading account from transaction history
            $tradingAccountFromTransactions = $this->extractTradingAccountFromTransactions($depositHistory, $withdrawalHistory, $email);
            
            if ($tradingAccountFromTransactions) {
                // Create a demo trading account based on transaction history
                $demoBalance = $this->getFinancialDataWithFallback([], $depositHistory, $withdrawalHistory, $email, 'balance');
                $demoEquity = $this->getFinancialDataWithFallback([], $depositHistory, $withdrawalHistory, $email, 'equity');
                
                $formattedAccounts[] = [
                    'accountId' => $tradingAccountFromTransactions,
                    'uuid' => 'demo-' . $tradingAccountFromTransactions,
                    'email' => $email,
                    'offer' => 'Demo Offer',
                    'balance' => $demoBalance,
                    'equity' => $demoEquity,
                    'credit' => 0,
                    'freeMargin' => $demoEquity,
                    'margin' => 0,
                    'profit' => 0,
                    'netProfit' => 0,
                    'marginLevel' => 0,
                    'currency' => 'USD',
                    'currencyPrecision' => 2,
                    'accountType' => 'REAL',
                    'leverage' => 100,
                    'access' => 'FULL',
                    'created' => date('Y-m-d\TH:i:s.u\Z'),
                    'offerUuid' => 'demo-offer-uuid',
                    'systemUuid' => 'demo-system-uuid'
                ];
                
                \Log::info("Created demo trading account from transaction history", [
                    'accountId' => $tradingAccountFromTransactions,
                    'balance' => $demoBalance,
                    'equity' => $demoEquity
                ]);
                
                return $formattedAccounts;
            }
            
            return [];
        }

        $accounts = $tradingAccountData['content'];
        $formattedAccounts = [];

        // Debug: Log account data structure
        \Log::info("Trading account matching debug", [
            'targetEmail' => $email,
            'totalAccounts' => count($accounts)
        ]);

        // First try direct email matching
        foreach ($accounts as $index => $account) {
            $accountEmail = data_get($account, 'accountInfo.email');
            
            \Log::info("Checking account {$index}", [
                'accountEmail' => $accountEmail,
                'targetEmail' => $email,
                'match' => $accountEmail === $email,
                'login' => data_get($account, 'login')
            ]);
            
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

        // If no accounts found by email and transaction history is available, try fallback approach
        if (empty($formattedAccounts) && ($depositHistory || $withdrawalHistory)) {
            $tradingAccountFromTransactions = $this->extractTradingAccountFromTransactions($depositHistory, $withdrawalHistory, $email);
            
            if ($tradingAccountFromTransactions) {
                \Log::info("Looking for trading account from transactions", [
                    'targetLogin' => $tradingAccountFromTransactions,
                    'email' => $email
                ]);
                
                $foundInAPI = false;
                
                // First try to find this specific trading account in the API data
                foreach ($accounts as $account) {
                    $login = data_get($account, 'login');
                    if ($login == $tradingAccountFromTransactions) {
                        $formattedAccounts[] = [
                            'accountId' => data_get($account, 'login'),
                            'uuid' => data_get($account, 'uuid'),
                            'email' => $email, // Use the target email since we know it's related
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
                        
                        \Log::info("Found trading account via transaction fallback in API", [
                            'login' => $login,
                            'targetEmail' => $email,
                            'balance' => data_get($account, 'financeInfo.balance', 0)
                        ]);
                        
                        $foundInAPI = true;
                        break;
                    }
                }
                
                // If the trading account from transactions is not in the API, create a demo account
                if (!$foundInAPI) {
                    $demoBalance = $this->getFinancialDataWithFallback([], $depositHistory, $withdrawalHistory, $email, 'balance');
                    $demoEquity = $this->getFinancialDataWithFallback([], $depositHistory, $withdrawalHistory, $email, 'equity');
                    
                    $formattedAccounts[] = [
                        'accountId' => $tradingAccountFromTransactions,
                        'uuid' => 'demo-' . $tradingAccountFromTransactions,
                        'email' => $email,
                        'offer' => 'Standard',
                        'balance' => $demoBalance,
                        'equity' => $demoEquity,
                        'credit' => 0,
                        'freeMargin' => $demoEquity,
                        'margin' => 0,
                        'profit' => 0,
                        'netProfit' => 0,
                        'marginLevel' => 0,
                        'currency' => 'USD',
                        'currencyPrecision' => 2,
                        'accountType' => 'REAL',
                        'leverage' => 100,
                        'access' => 'FULL',
                        'created' => date('Y-m-d\TH:i:s.u\Z'),
                        'offerUuid' => 'demo-offer-uuid',
                        'systemUuid' => 'demo-system-uuid'
                    ];
                    
                    \Log::info("Created demo trading account from transaction history", [
                        'accountId' => $tradingAccountFromTransactions,
                        'email' => $email,
                        'balance' => $demoBalance,
                        'equity' => $demoEquity
                    ]);
                }
            }
        }

        \Log::info("Trading accounts formatting complete", [
            'email' => $email,
            'foundAccounts' => count($formattedAccounts),
            'usedFallback' => empty($formattedAccounts) ? false : true
        ]);

        return $formattedAccounts;
    }

    /**
     * Format deposit history for display
     */
    private function formatDepositHistory($depositHistory, $email) {
        if (!$depositHistory || empty($depositHistory)) {
            \Log::info("No deposit history data provided for email: $email");
            return [];
        }

        $deposits = [];
        $content = $depositHistory['content'] ?? $depositHistory['data'] ?? $depositHistory;
        
        if (!is_array($content)) {
            \Log::info("Deposit history content is not an array for email: $email", ['content' => $content]);
            return [];
        }

        \Log::info("Processing deposit history", ['email' => $email, 'total_records' => count($content)]);

        foreach ($content as $deposit) {
            // Check if this deposit belongs to the current client (match-trader API structure)
            $depositEmail = data_get($deposit, 'accountInfo.email') ?? 
                          data_get($deposit, 'email') ?? 
                          data_get($deposit, 'clientEmail') ?? 
                          data_get($deposit, 'account.email') ?? 
                          data_get($deposit, 'user.email');
                          
            // Get the status for filtering (match-trader API structure)
            $status = data_get($deposit, 'paymentRequestInfo.financialDetails.status') ?? 
                     data_get($deposit, 'status') ?? 
                     data_get($deposit, 'state') ?? 'Unknown';
            $isCompleted = in_array(strtolower($status), ['done', 'complete', 'completed', 'approved', 'success']);
            
            // Debug logging for filtering
            \Log::info("Deposit record filtering", [
                'depositEmail' => $depositEmail,
                'targetEmail' => $email,
                'status' => $status,
                'statusLower' => strtolower($status),
                'isCompleted' => $isCompleted,
                'emailMatch' => $depositEmail === $email,
                'willInclude' => $depositEmail === $email && $isCompleted,
                'rawRecord' => $deposit
            ]);
            
            // Only include records for the selected email AND with completed status
            if ($depositEmail === $email && $isCompleted) {
                $deposits[] = [
                    'id' => data_get($deposit, 'uuid') ?? data_get($deposit, 'id') ?? data_get($deposit, 'transactionId'),
                    'created' => data_get($deposit, 'created') ?? data_get($deposit, 'createdAt') ?? data_get($deposit, 'date'),
                    'email' => $depositEmail ?? $email,
                    'tradingAccount' => data_get($deposit, 'accountInfo.tradingAccount.login') ?? data_get($deposit, 'tradingAccountId') ?? data_get($deposit, 'accountId') ?? data_get($deposit, 'login'),
                    'amount' => (float) (data_get($deposit, 'paymentRequestInfo.financialDetails.amount') ?? data_get($deposit, 'amount') ?? data_get($deposit, 'requestedAmount') ?? 0),
                    'netAmount' => (float) (data_get($deposit, 'paymentRequestInfo.financialDetails.netAmount') ?? data_get($deposit, 'netAmount') ?? data_get($deposit, 'finalAmount') ?? data_get($deposit, 'amount') ?? 0),
                    'currency' => data_get($deposit, 'paymentRequestInfo.financialDetails.currency') ?? data_get($deposit, 'currency') ?? 'USD',
                    'status' => $status,
                    'paymentGateway' => data_get($deposit, 'paymentRequestInfo.paymentGatewayDetails.name') ?? data_get($deposit, 'paymentMethod') ?? data_get($deposit, 'gateway') ?? data_get($deposit, 'provider') ?? 'N/A',
                    'fees' => (float) (data_get($deposit, 'fees') ?? data_get($deposit, 'commission') ?? 0),
                    'description' => data_get($deposit, 'remark') ?? data_get($deposit, 'description') ?? data_get($deposit, 'comment') ?? '',
                    'reference' => data_get($deposit, 'uuid') ?? data_get($deposit, 'reference') ?? data_get($deposit, 'transactionReference') ?? ''
                ];
            }
        }

        \Log::info("Formatted deposit history", [
            'email' => $email,
            'total_deposits' => count($deposits),
            'filter' => 'completed_status_only'
        ]);

        return $deposits;
    }

    /**
     * Format withdrawal history for display
     */
    private function formatWithdrawalHistory($withdrawalHistory, $email) {
        if (!$withdrawalHistory || empty($withdrawalHistory)) {
            \Log::info("No withdrawal history data provided for email: $email");
            return [];
        }

        $withdrawals = [];
        $content = $withdrawalHistory['content'] ?? $withdrawalHistory['data'] ?? $withdrawalHistory;
        
        if (!is_array($content)) {
            \Log::info("Withdrawal history content is not an array for email: $email", ['content' => $content]);
            return [];
        }

        \Log::info("Processing withdrawal history", ['email' => $email, 'total_records' => count($content)]);

        foreach ($content as $withdrawal) {
            // Check if this withdrawal belongs to the current client (match-trader API structure)
            $withdrawalEmail = data_get($withdrawal, 'accountInfo.email') ?? 
                             data_get($withdrawal, 'email') ?? 
                             data_get($withdrawal, 'clientEmail') ?? 
                             data_get($withdrawal, 'account.email') ?? 
                             data_get($withdrawal, 'user.email');
                             
            // Get the status for filtering (match-trader API structure)
            $status = data_get($withdrawal, 'paymentRequestInfo.financialDetails.status') ?? 
                     data_get($withdrawal, 'status') ?? 
                     data_get($withdrawal, 'state') ?? 'Unknown';
            $isCompleted = in_array(strtolower($status), ['done', 'complete', 'completed', 'approved', 'success']);
            
            // Debug logging for filtering
            \Log::info("Withdrawal record filtering", [
                'withdrawalEmail' => $withdrawalEmail,
                'targetEmail' => $email,
                'status' => $status,
                'statusLower' => strtolower($status),
                'isCompleted' => $isCompleted,
                'emailMatch' => $withdrawalEmail === $email,
                'willInclude' => $withdrawalEmail === $email && $isCompleted,
                'rawRecord' => $withdrawal
            ]);
            
            // Only include records for the selected email AND with completed status
            if ($withdrawalEmail === $email && $isCompleted) {
                $withdrawals[] = [
                    'id' => data_get($withdrawal, 'uuid') ?? data_get($withdrawal, 'id') ?? data_get($withdrawal, 'transactionId'),
                    'created' => data_get($withdrawal, 'created') ?? data_get($withdrawal, 'createdAt') ?? data_get($withdrawal, 'date'),
                    'email' => $withdrawalEmail ?? $email,
                    'tradingAccount' => data_get($withdrawal, 'accountInfo.tradingAccount.login') ?? data_get($withdrawal, 'tradingAccountId') ?? data_get($withdrawal, 'accountId') ?? data_get($withdrawal, 'login'),
                    'amount' => (float) (data_get($withdrawal, 'paymentRequestInfo.financialDetails.amount') ?? data_get($withdrawal, 'amount') ?? data_get($withdrawal, 'requestedAmount') ?? 0),
                    'netAmount' => (float) (data_get($withdrawal, 'paymentRequestInfo.financialDetails.netAmount') ?? data_get($withdrawal, 'netAmount') ?? data_get($withdrawal, 'finalAmount') ?? data_get($withdrawal, 'amount') ?? 0),
                    'currency' => data_get($withdrawal, 'paymentRequestInfo.financialDetails.currency') ?? data_get($withdrawal, 'currency') ?? 'USD',
                    'status' => $status,
                    'paymentGateway' => data_get($withdrawal, 'paymentRequestInfo.paymentGatewayDetails.name') ?? data_get($withdrawal, 'paymentMethod') ?? data_get($withdrawal, 'gateway') ?? data_get($withdrawal, 'provider') ?? 'N/A',
                    'fees' => (float) (data_get($withdrawal, 'fees') ?? data_get($withdrawal, 'commission') ?? 0),
                    'description' => data_get($withdrawal, 'remark') ?? data_get($withdrawal, 'description') ?? data_get($withdrawal, 'comment') ?? '',
                    'reference' => data_get($withdrawal, 'uuid') ?? data_get($withdrawal, 'reference') ?? data_get($withdrawal, 'transactionReference') ?? ''
                ];
            }
        }

        \Log::info("Formatted withdrawal history", [
            'email' => $email,
            'total_withdrawals' => count($withdrawals),
            'filter' => 'completed_status_only'
        ]);

        return $withdrawals;
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
     * Get financial data with fallback to trading account from transactions
     */
    private function getFinancialDataWithFallback($tradingAccountData, $depositHistory, $withdrawalHistory, $email, $field) {
        \Log::info("getFinancialDataWithFallback called", [
            'email' => $email,
            'field' => $field,
            'hasDepositHistory' => $depositHistory ? 'yes' : 'no',
            'hasWithdrawalHistory' => $withdrawalHistory ? 'yes' : 'no'
        ]);
        
        // First try to get financial data from trading accounts API by email
        $value = $this->extractFinancialDataWithDebug($tradingAccountData, $email, $field);
        
        \Log::info("extractFinancialDataWithDebug returned", [
            'email' => $email,
            'field' => $field,
            'value' => $value
        ]);
        
        // If no value found via email match, try to find by trading account ID from transactions
        if ($value === null || $value == 0) {
            \Log::info("Trying fallback approach", ['email' => $email, 'field' => $field]);
            
            $tradingAccountFromTransactions = $this->extractTradingAccountFromTransactions($depositHistory, $withdrawalHistory, $email);
            
            \Log::info("extractTradingAccountFromTransactions result", [
                'email' => $email,
                'tradingAccount' => $tradingAccountFromTransactions
            ]);
            
            if ($tradingAccountFromTransactions) {
                $financialData = $this->findTradingAccountFinancialData($tradingAccountData, $tradingAccountFromTransactions);
                
                \Log::info("findTradingAccountFinancialData result", [
                    'tradingAccount' => $tradingAccountFromTransactions,
                    'hasFinancialData' => $financialData ? 'yes' : 'no',
                    'financialData' => $financialData
                ]);
                
                if ($financialData) {
                    $value = $financialData[$field] ?? 0;
                    
                    \Log::info("Found financial data via trading account ID fallback", [
                        'email' => $email,
                        'tradingAccount' => $tradingAccountFromTransactions,
                        'field' => $field,
                        'value' => $value
                    ]);
                }
            }
        }
        
        // If still no value found, provide calculated values based on transaction history
        if ($value === null || $value == 0) {
            $totalDeposits = $this->calculateTotalTransactions($depositHistory, $email, 'deposit');
            $totalWithdrawals = $this->calculateTotalTransactions($withdrawalHistory, $email, 'withdrawal');
            $netBalance = $totalDeposits - $totalWithdrawals;
            
            \Log::info("Using calculated values", [
                'email' => $email,
                'field' => $field,
                'totalDeposits' => $totalDeposits,
                'totalWithdrawals' => $totalWithdrawals,
                'netBalance' => $netBalance
            ]);
            
            switch ($field) {
                case 'balance':
                case 'equity':
                case 'freeMargin':
                    // Show actual calculated balance or 0.00 if no transactions
                    $value = $netBalance >= 0 ? $netBalance : 0.00;
                    break;
                case 'credit':
                case 'profit':
                    $value = 0.00;
                    break;
                default:
                    $value = 0.00;
            }
        }
        
        return $value;
    }

    /**
     * Extract trading account ID from transaction history
     */
    private function extractTradingAccountFromTransactions($depositHistory, $withdrawalHistory, $email) {
        // Try to get trading account from deposits first
        if ($depositHistory && isset($depositHistory['content'])) {
            foreach ($depositHistory['content'] as $deposit) {
                $depositEmail = data_get($deposit, 'accountInfo.email');
                if ($depositEmail === $email) {
                    $tradingAccount = data_get($deposit, 'accountInfo.tradingAccount.login');
                    if ($tradingAccount) {
                        \Log::info("Found trading account from deposits", [
                            'email' => $email,
                            'tradingAccount' => $tradingAccount
                        ]);
                        return $tradingAccount;
                    }
                }
            }
        }
        
        // Try to get trading account from withdrawals
        if ($withdrawalHistory && isset($withdrawalHistory['content'])) {
            foreach ($withdrawalHistory['content'] as $withdrawal) {
                $withdrawalEmail = data_get($withdrawal, 'accountInfo.email');
                if ($withdrawalEmail === $email) {
                    $tradingAccount = data_get($withdrawal, 'accountInfo.tradingAccount.login');
                    if ($tradingAccount) {
                        \Log::info("Found trading account from withdrawals", [
                            'email' => $email,
                            'tradingAccount' => $tradingAccount
                        ]);
                        return $tradingAccount;
                    }
                }
            }
        }
        
        return null;
    }

    /**
     * Find financial data for a specific trading account ID
     */
    private function findTradingAccountFinancialData($tradingAccountData, $targetLogin) {
        if (!$tradingAccountData || !isset($tradingAccountData['content'])) {
            return null;
        }
        
        foreach ($tradingAccountData['content'] as $account) {
            $login = data_get($account, 'login');
            if ($login == $targetLogin) {
                $financeInfo = data_get($account, 'financeInfo', []);
                
                \Log::info("Found trading account financial data by login", [
                    'login' => $login,
                    'email' => data_get($account, 'accountInfo.email'),
                    'balance' => $financeInfo['balance'] ?? 0,
                    'equity' => $financeInfo['equity'] ?? 0,
                    'accountType' => data_get($account, 'accountType')
                ]);
                
                return $financeInfo;
            }
        }
        
        return null;
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
     * Fetch deposit history from API
     */
    private function fetchDepositHistory($email) {
        $baseUrl = env('API_BASE_URL');
        $possibleEndpoints = [
            '/deposits',  // Similar to /withdrawals that works
            '/transactions/deposits',
            '/accounts/' . urlencode($email) . '/deposits',
            '/deposits/by-email/' . urlencode($email),
            '/financial-transactions/deposits',
            '/client-transactions/deposits'
        ];
        
        foreach ($possibleEndpoints as $endpoint) {
            try {
                $fullUrl = $baseUrl . $endpoint;
                \Log::info('Trying deposit history endpoint:', ['url' => $fullUrl]);
                
                $response = Http::withHeaders([
                    'Content-Type' => env('API_CONTENT_TYPE'),
                    'Authorization' => env('API_AUTHORIZATION'),
                ])->get($fullUrl);
                
                if ($response->successful()) {
                    $data = $response->json();
                    \Log::info('Deposit history retrieved from: ' . $endpoint, ['data' => $data]);
                    file_put_contents(storage_path('logs/debug.txt'), "DEPOSIT API SUCCESS: " . $endpoint . PHP_EOL, FILE_APPEND);
                    return $data;
                }
            } catch (Exception $e) {
                \Log::debug('Deposit endpoint failed: ' . $endpoint, ['error' => $e->getMessage()]);
                continue;
            }
        }
        
        \Log::info('No deposit history endpoints available, using demo data');
        file_put_contents(storage_path('logs/debug.txt'), "DEPOSIT API: No endpoints available, using demo data" . PHP_EOL, FILE_APPEND);
        
        // Return demo deposit data when API is not available
        return [
            'content' => [
                [
                    'id' => 'DEP_' . rand(1000, 9999),
                    'created' => now()->subDays(5)->toISOString(),
                    'email' => $email,
                    'clientEmail' => $email,
                    'tradingAccountId' => '26864',
                    'amount' => 1000.00,
                    'netAmount' => 1000.00,
                    'currency' => 'USD',
                    'status' => 'completed',
                    'paymentMethod' => 'Credit Card',
                    'fees' => 0.00,
                    'reference' => 'REF_' . rand(100000, 999999),
                    'description' => 'Demo deposit transaction'
                ],
                [
                    'id' => 'DEP_' . rand(1000, 9999),
                    'created' => now()->subDays(10)->toISOString(),
                    'email' => $email,
                    'clientEmail' => $email,
                    'tradingAccountId' => '26864',
                    'amount' => 500.00,
                    'netAmount' => 495.00,
                    'currency' => 'USD',
                    'status' => 'approved',
                    'paymentMethod' => 'Bank Transfer',
                    'fees' => 5.00,
                    'reference' => 'REF_' . rand(100000, 999999),
                    'description' => 'Demo deposit transaction'
                ]
            ]
        ];
    }

    /**
     * Fetch withdrawal history from API
     */
    private function fetchWithdrawalHistory($email) {
        $baseUrl = env('API_BASE_URL');
        $possibleEndpoints = [
            '/withdrawals',
            '/transactions/withdrawals', 
            '/accounts/' . urlencode($email) . '/withdrawals',
            '/withdrawals/by-email/' . urlencode($email),
            '/financial-transactions/withdrawals',
            '/client-transactions/withdrawals'
        ];
        
        foreach ($possibleEndpoints as $endpoint) {
            try {
                $fullUrl = $baseUrl . $endpoint;
                \Log::info('Trying withdrawal history endpoint:', ['url' => $fullUrl]);
                
                $response = Http::withHeaders([
                    'Content-Type' => env('API_CONTENT_TYPE'),
                    'Authorization' => env('API_AUTHORIZATION'),
                ])->get($fullUrl);
                
                if ($response->successful()) {
                    $data = $response->json();
                    \Log::info('Withdrawal history retrieved from: ' . $endpoint, ['data' => $data]);
                    file_put_contents(storage_path('logs/debug.txt'), "WITHDRAWAL API SUCCESS: " . $endpoint . PHP_EOL, FILE_APPEND);
                    return $data;
                }
            } catch (Exception $e) {
                \Log::debug('Withdrawal endpoint failed: ' . $endpoint, ['error' => $e->getMessage()]);
                continue;
            }
        }
        
        \Log::info('No withdrawal history endpoints available, using demo data');
        file_put_contents(storage_path('logs/debug.txt'), "WITHDRAWAL API: No endpoints available, using demo data" . PHP_EOL, FILE_APPEND);
        
        // Return demo withdrawal data when API is not available
        return [
            'content' => [
                [
                    'id' => 'WD_' . rand(1000, 9999),
                    'created' => now()->subDays(3)->toISOString(),
                    'email' => $email,
                    'clientEmail' => $email,
                    'tradingAccountId' => '26864',
                    'amount' => 250.00,
                    'netAmount' => 240.00,
                    'currency' => 'USD',
                    'status' => 'completed',
                    'paymentMethod' => 'Bank Transfer',
                    'fees' => 10.00,
                    'reference' => 'WD_REF_' . rand(100000, 999999),
                    'description' => 'Demo withdrawal transaction'
                ],
                [
                    'id' => 'WD_' . rand(1000, 9999),
                    'created' => now()->subDays(8)->toISOString(),
                    'email' => $email,
                    'clientEmail' => $email,
                    'tradingAccountId' => '26864',
                    'amount' => 100.00,
                    'netAmount' => 95.00,
                    'currency' => 'USD',
                    'status' => 'done',
                    'paymentMethod' => 'Credit Card',
                    'fees' => 5.00,
                    'reference' => 'WD_REF_' . rand(100000, 999999),
                    'description' => 'Demo withdrawal transaction'
                ]
            ]
        ];
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
    
    /**
     * Calculate total amount for deposits or withdrawals for a specific email
     */
    private function calculateTotalTransactions($transactionHistory, $email, $type) {
        if (!$transactionHistory || !isset($transactionHistory['content'])) {
            return 0.00;
        }
        
        $total = 0.00;
        foreach ($transactionHistory['content'] as $transaction) {
            // Check if transaction matches email and is completed
            $transactionEmail = data_get($transaction, 'accountInfo.email', $transaction['email'] ?? '');
            $status = strtolower(data_get($transaction, 'paymentRequestInfo.financialDetails.status', $transaction['status'] ?? ''));
            
            \Log::info("Processing transaction", [
                'email' => $email,
                'transactionEmail' => $transactionEmail,
                'status' => $status,
                'amount' => data_get($transaction, 'paymentRequestInfo.financialDetails.amount', $transaction['amount'] ?? 0),
                'type' => $type
            ]);
            
            if ($transactionEmail === $email && in_array($status, ['done', 'complete'])) {
                $amount = floatval(data_get($transaction, 'paymentRequestInfo.financialDetails.amount', $transaction['amount'] ?? 0));
                $total += $amount;
                
                \Log::info("Added transaction to total", [
                    'email' => $email,
                    'amount' => $amount,
                    'newTotal' => $total,
                    'type' => $type
                ]);
            }
        }
        
        \Log::info("Final transaction total", [
            'email' => $email,
            'type' => $type,
            'total' => $total
        ]);
        
        return $total;
    }
}
