<div class="row mt-4">
    <div class="col-md-5">
        <div class="row">
            <div class="col-md-6 ">
                <h4 class="fw-bolder">Trading Accounts</h4>
            </div>

            <div class="col-md-3">
                <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
            </div>
            <div class="col-md-3 ">
                <a href="{{route('addTradingAcc')}}"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <form method="POST" class="form" action="">
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <input class="form-control border-right-0 border" type="search" placeholder="Enter Keyword" id="example-search-input" />
                        <div class="input-group-text bg-info"><i class="fa fa-search"></i></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@php
    // Get accounts from multiple possible data structures
    $accounts = $clientData['accountConfiguration']['tradingAccounts'] ?? 
                $clientData['tradingAccounts'] ?? 
                $clientData['accounts'] ?? 
                $clientData['content'] ?? 
                [];
@endphp

<!-- Trading Accounts Summary -->
@if(count($accounts) > 0)
<div class="row mb-4">
    @php
        $totalBalance = 0;
        $totalEquity = 0;
        $totalProfit = 0;
        $realAccounts = 0;
        $demoAccounts = 0;
        
        foreach($accounts as $account) {
            // Get financial data - check nested structure first, then flat structure
            $balance = $account['financeInfo']['balance'] ?? $account['balance'] ?? 0;
            $equity = $account['financeInfo']['equity'] ?? $account['equity'] ?? 0;
            $profit = $account['financeInfo']['profit'] ?? $account['financeInfo']['netProfit'] ?? $account['profit'] ?? 0;
            
            $totalBalance += floatval($balance);
            $totalEquity += floatval($equity);
            $totalProfit += floatval($profit);
            
            $accountType = strtoupper($account['accountType'] ?? 'DEMO');
            
            if($accountType === 'REAL') {
                $realAccounts++;
            } else {
                $demoAccounts++;
            }
        }
    @endphp
    
    <div class="col-md-3">
        <div class="card bg-primary text-white">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h6 class="card-title">Total Accounts</h6>
                        <h3 class="mb-0">{{ count($clientData['accountConfiguration']['tradingAccounts']) }}</h3>
                    </div>
                    <div class="align-self-center">
                        <i class="fa-duotone fa-solid fa-chart-line fa-2x"></i>
                    </div>
                </div>
                <small>{{ $realAccounts }} Real, {{ $demoAccounts }} Demo</small>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="card bg-success text-white">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h6 class="card-title">Total Balance</h6>
                        <h3 class="mb-0">${{ number_format($totalBalance, 2) }}</h3>
                    </div>
                    <div class="align-self-center">
                        <i class="fa-duotone fa-solid fa-dollar-sign fa-2x"></i>
                    </div>
                </div>
                <small>Across all accounts</small>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="card bg-info text-white">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h6 class="card-title">Total Equity</h6>
                        <h3 class="mb-0">${{ number_format($totalEquity, 2) }}</h3>
                    </div>
                    <div class="align-self-center">
                        <i class="fa-duotone fa-solid fa-coins fa-2x"></i>
                    </div>
                </div>
                <small>Current equity value</small>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="card {{ $totalProfit >= 0 ? 'bg-success' : 'bg-danger' }} text-white">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h6 class="card-title">Total P&L</h6>
                        <h3 class="mb-0">${{ number_format($totalProfit, 2) }}</h3>
                    </div>
                    <div class="align-self-center">
                        <i class="fa-duotone fa-solid fa-{{ $totalProfit >= 0 ? 'arrow-trend-up' : 'arrow-trend-down' }} fa-2x"></i>
                    </div>
                </div>
                <small>{{ $totalProfit >= 0 ? 'Profit' : 'Loss' }}</small>
            </div>
        </div>
    </div>
</div>
@endif

<div class="card">
    <div class="col-md-12 table-responsive table-responsive-sm">

    <table class="table table-hover table-sm" id="tradingAccountsTable">
        <caption>List of trading accounts</caption>
        <thead class="bg-dark report-white-font">
            <tr>
                <th>Login</th>
                <th>Account Type</th>
                <th>Offer/Group</th>
                <th>Balance</th>
                <th>Equity</th>
                <th>Free Margin</th>
                <th>Profit</th>
                <th>Currency</th>
                <th>Leverage</th>
                <th>Created</th>
                <th class="mx-auto">Deposit</th>
                <th>Withdraw</th>
            </tr>
        </thead>
        
        <tbody>
            @if(count($accounts) > 0)
                @foreach($accounts as $account)
                @php
                    // Simple, direct data extraction
                    $accountId = $account['login'] ?? $account['accountId'] ?? 'N/A';
                    $accountType = strtoupper($account['accountType'] ?? 'DEMO');
                    $status = $account['access'] ?? $account['status'] ?? 'Active';
                    $offer = $account['group'] ?? $account['offer'] ?? 'Standard';
                    
                    // Financial data - check nested first, then flat
                    $balance = $account['financeInfo']['balance'] ?? $account['balance'] ?? 0;
                    $equity = $account['financeInfo']['equity'] ?? $account['equity'] ?? 0;
                    $freeMargin = $account['financeInfo']['freeMargin'] ?? $account['freeMargin'] ?? 0;
                    $profit = $account['financeInfo']['profit'] ?? $account['financeInfo']['netProfit'] ?? $account['profit'] ?? 0;
                    $currency = $account['financeInfo']['currency'] ?? $account['currency'] ?? 'USD';
                    $leverage = $account['leverage'] ?? 100;
                    $created = $account['created'];
                @endphp
                <tr>
                    <td><a href="{{route('trandingAccountDetail')}}" class="text-primary fw-bold">{{ $accountId }}</a></td>
                    <td>
                        <span class="badge {{ $accountType === 'REAL' ? 'bg-success' : 'bg-info' }}">
                            {{ $accountType }}
                        </span>
                    </td>
                    <td><a href="{{route('offerForm')}}" class="text-primary">{{ $offer }}</a></td>
                    <td class="fw-bold text-success">${{ number_format(floatval($balance), 2) }}</td>
                    <td class="fw-bold">${{ number_format(floatval($equity), 2) }}</td>
                    <td>${{ number_format(floatval($freeMargin), 2) }}</td>
                    <td class="{{ floatval($profit) >= 0 ? 'text-success' : 'text-danger' }} fw-bold">
                        ${{ number_format(floatval($profit), 2) }}
                    </td>
                    <td>{{ $currency }}</td>
                    <td>1:{{ $leverage }}</td>
                    <td>{{ $created ? \Carbon\Carbon::parse($created)->format('M d, Y') : 'N/A' }}</td>
                    <td><a href="{{route('addDepositAcc')}}"><i class="fa-duotone fa-solid fa-up-to-bracket fa-flip-both fa-lg rounded p-3" style="--fa-primary-color: #05b9d9; --fa-secondary-color: #05b9d9; --fa-secondary-opacity: 1;" title="Add Deposit"></i></a></td>
                    <td><a href="{{route('addWidthdrawAcc')}}"><i class="fa-duotone fa-solid fa-down-from-bracket fa-flip-vertical fa-lg rounded p-3" style="--fa-primary-color: #dc0404; --fa-secondary-color: #dc0404; --fa-secondary-opacity: 1;" title="Withdraw"></i></a></td>
                </tr>
                @endforeach
            @else
                <!-- No trading accounts message -->
                <tr>
                    <td colspan="12" class="text-center py-4">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-duotone fa-solid fa-chart-line fa-3x text-muted mb-3"></i>
                            <h5 class="text-muted">No Trading Accounts Found</h5>
                            <p class="text-muted">This client hasn't opened any trading accounts yet.</p>
                            <a href="{{route('addTradingAcc')}}" class="btn btn-primary">
                                <i class="fa-duotone fa-solid fa-user-plus me-2"></i>
                                Create Trading Account
                            </a>
                        </div>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
</div>

<script>
$(document).ready(function() {
    // Initialize DataTables for Trading Accounts table
    if ($('#tradingAccountsTable').length) {
        $('#tradingAccountsTable').DataTable({
            responsive: true,
            pageLength: 10,
            lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
            order: [[0, 'desc']],
            language: {
                search: "Search accounts:",
                lengthMenu: "Show _MENU_ accounts per page",
                info: "Showing _START_ to _END_ of _TOTAL_ accounts",
                infoEmpty: "No accounts available",
                infoFiltered: "(filtered from _MAX_ total accounts)"
            },
            columnDefs: [
                { 
                    targets: [3, 4, 5, 6], // Balance, Equity, Free Margin, Profit columns
                    className: 'text-end'
                },
                { 
                    targets: [10, 11], // Action columns (Deposit, Withdraw)
                    orderable: false,
                    searchable: false,
                    className: 'text-center'
                },
                {
                    targets: [1], // Account Type column
                    className: 'text-center'
                }
            ],
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'excel',
                    text: '<i class="fa fa-file-excel"></i> Excel',
                    title: 'Trading Accounts - {{ $clientData["contactDetails"]["email"] ?? "Client" }}',
                    className: 'btn btn-success btn-sm'
                },
                {
                    extend: 'pdf',
                    text: '<i class="fa fa-file-pdf"></i> PDF',
                    title: 'Trading Accounts - {{ $clientData["contactDetails"]["email"] ?? "Client" }}',
                    className: 'btn btn-danger btn-sm'
                },
                {
                    extend: 'colvis',
                    text: '<i class="fa fa-columns"></i> Columns',
                    className: 'btn btn-info btn-sm'
                }
            ]
        });
    }
});
</script>