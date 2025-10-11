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
<div class="card">
    <div class="col-md-12 table-responsive table-responsive-sm">

    <table class="table table-hover table-sm" id="tradingAccountsTable">
        <caption>List of trading accounts</caption>
        <thead class="bg-dark report-white-font">
            
            
            <tr>
                
                <th >Id</th>
                <th >Client</th>
                <th >Offer</th>
                <th>Balance</th>
                <th>Currency</th>
                <th class="mx-auto">Deposit</th>
                <th >Widhtdraw</th>
            </tr>
        </thead>
        
        <tbody>
            @if(isset($clientData['accountConfiguration']['tradingAccounts']) && is_array($clientData['accountConfiguration']['tradingAccounts']))
                @foreach($clientData['accountConfiguration']['tradingAccounts'] as $account)
                <tr>
                    <td><a href="{{route('trandingAccountDetail')}}">{{ $account['accountId'] ?? 'N/A' }}</a></td>
                    <td><a href="{{route('clientProfile', ['email' => $clientData['contactDetails']['email'] ?? 'hasnat@gmail.com'])}}" class="text-primary">{{ $clientData['contactDetails']['email'] ?? 'N/A' }}</a></td>
                    <td><a href="{{route('offerForm')}}" class="text-primary">{{ $account['offer'] ?? 'standard' }}</a></td>
                    <td>{{ number_format($account['balance'] ?? 0, 2) }}</td>
                    <td>{{ $account['currency'] ?? 'USD' }}</td>
                    <td><a href="{{route('addDepositAcc')}}"><i class=" fa-duotone fa-solid fa-up-to-bracket fa-flip-both fa-lg rounded p-3" style="--fa-primary-color: #05b9d9; --fa-secondary-color: #05b9d9; --fa-secondary-opacity: 1;"></i></a></td>
                    <td><a href="{{route('addWidthdrawAcc')}}"><i class="fa-duotone fa-solid fa-down-from-bracket fa-flip-vertical fa-lg rounded p-3" style="--fa-primary-color: #dc0404; --fa-secondary-color: #dc0404; --fa-secondary-opacity: 1;"></i></a></td>
                </tr>
                @endforeach
            @else
                <!-- Fallback single account row if no trading accounts data available -->
                <tr>
                    <td><a href="{{route('trandingAccountDetail')}}">{{ $clientData['accountConfiguration']['accountId'] ?? 'N/A' }}</a></td>
                    <td><a href="{{route('clientProfile', ['email' => $clientData['contactDetails']['email'] ?? 'hasnat@gmail.com'])}}" class="text-primary">{{ $clientData['contactDetails']['email'] ?? 'N/A' }}</a></td>
                    <td><a href="{{route('offerForm')}}" class="text-primary">{{ $clientData['accountConfiguration']['accountType'] ?? 'standard' }}</a></td>
                    <td>{{ number_format($clientData['accountConfiguration']['balance'] ?? 0, 2) }}</td>
                    <td>{{ $clientData['accountConfiguration']['currency'] ?? 'USD' }}</td>
                    <td><a href="{{route('addDepositAcc')}}"><i class=" fa-duotone fa-solid fa-up-to-bracket fa-flip-both fa-lg rounded p-3" style="--fa-primary-color: #05b9d9; --fa-secondary-color: #05b9d9; --fa-secondary-opacity: 1;"></i></a></td>
                    <td><a href="{{route('addWidthdrawAcc')}}"><i class="fa-duotone fa-solid fa-down-from-bracket fa-flip-vertical fa-lg rounded p-3" style="--fa-primary-color: #dc0404; --fa-secondary-color: #dc0404; --fa-secondary-opacity: 1;"></i></a></td>
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
            }
        });
    }
});
</script>