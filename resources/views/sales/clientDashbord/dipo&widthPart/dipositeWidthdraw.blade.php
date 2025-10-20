<!-- Deposite -->
 <div class="card card-body">
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="fw-bolder">Deposits</h4>
                    <small class="text-muted">
                        <i class="fa fa-filter me-1"></i>
                        Showing completed deposits only
                    </small>
                </div>
                <div class="col-md-1">
                    <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <form method="POST" class="form" action="">
                <div class="row">
                    <div class="col-md-3">
                        <div class="input-group">
                            <input class="form-control border-right-0 border" type="search" placeholder="Enter Keyword" id="example-search-input" />
                            <div class="input-group-text bg-info"><i class="fa fa-search"></i></div>
                        </div>
                    </div>
                    <div class="col-3">
                        <input type="date" class="form-control" id="date" placeholder="" name="date" />
                    </div>
                    <div class="col-3">
                        <input type="date" class="form-control" id="date" placeholder="" name="date" />
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
            <div class="col-md-12 table-responsive table-responsive-sm">
                <table class="table table-hover table-sm" id="clientDepositsTable">
                    <caption>
                        List of completed deposits for selected client
                    </caption>
                    <thead class="bg-dark report-white-font">
                        <tr>
                            <th>Created</th>
                            <th>Email</th>
                            <th>Trading Account</th>
                            <th>Amount</th>
                            <th>Net Amount</th>
                            <th>Currency</th>
                            <th>Status</th>
                            <th>Payment Gateway</th>
                            <th>Fees</th>
                            <th>Reference</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if(isset($clientData['transactionHistory']['deposits']) && is_array($clientData['transactionHistory']['deposits']) && count($clientData['transactionHistory']['deposits']) > 0)
                            @foreach($clientData['transactionHistory']['deposits'] as $deposit)
                            <tr>
                                <td>{{ isset($deposit['created']) ? \Carbon\Carbon::parse($deposit['created'])->format('M d, Y H:i') : 'N/A' }}</td>
                                <td><a href="{{route('clientProfile', ['email' => $deposit['email'] ?? 'unknown@example.com'])}}" class="text-primary">{{ $deposit['email'] ?? 'N/A' }}</a></td>
                                <td><a href="{{route('depositRequest')}}" class="text-primary">{{ $deposit['tradingAccount'] ?? 'N/A' }}</a></td>
                                <td class="text-success fw-bold">${{ number_format($deposit['amount'] ?? 0, 2) }}</td>
                                <td class="text-success fw-bold">${{ number_format($deposit['netAmount'] ?? 0, 2) }}</td>
                                <td>{{ $deposit['currency'] ?? 'USD' }}</td>
                                <td>
                                    <span class="badge {{ 
                                        strtolower($deposit['status'] ?? '') === 'completed' || strtolower($deposit['status'] ?? '') === 'approved' ? 'bg-success' : 
                                        (strtolower($deposit['status'] ?? '') === 'pending' ? 'bg-warning' : 
                                        (strtolower($deposit['status'] ?? '') === 'failed' || strtolower($deposit['status'] ?? '') === 'rejected' ? 'bg-danger' : 'bg-secondary')) 
                                    }}">
                                        {{ $deposit['status'] ?? 'Unknown' }}
                                    </span>
                                </td>
                                <td><a href="{{route('depositPayment')}}" class="text-primary">{{ $deposit['paymentGateway'] ?? 'N/A' }}</a></td>
                                <td class="text-muted">${{ number_format($deposit['fees'] ?? 0, 2) }}</td>
                                <td class="small text-muted">{{ $deposit['reference'] ?? 'N/A' }}</td>
                            </tr>
                            @endforeach
                        @else
                            <tr data-empty-state="true">
                                <td colspan="10" class="text-center py-4">
                                    <div class="d-flex flex-column align-items-center">
                                        <i class="fa-duotone fa-solid fa-money-bill-transfer fa-3x text-muted mb-3"></i>
                                        <h5 class="text-muted">No Completed Deposits Found</h5>
                                        <p class="text-muted">This client has no completed deposits yet.</p>
                                        <a href="{{route('addDepositAcc')}}" class="btn btn-success">
                                            <i class="fa-duotone fa-solid fa-plus me-2"></i>
                                            Add Deposit
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    
</div>
<!-- Widthdraw -->
<div class="card card-body">
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="fw-bolder">Withdrawals</h4>
                    <small class="text-muted">
                        <i class="fa fa-filter me-1"></i>
                        Showing completed withdrawals only
                    </small>
                </div>
                <div class="col-md-1">
                    <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <form method="POST" class="form" action="">
                <div class="row">
                    <div class="col-md-3">
                        <div class="input-group">
                            <input class="form-control border-right-0 border" type="search" placeholder="Enter Keyword" id="example-search-input" />
                            <div class="input-group-text bg-info"><i class="fa fa-search"></i></div>
                        </div>
                    </div>
                    <div class="col-3">
                        <input type="date" class="form-control" id="date" placeholder="" name="date" />
                    </div>
                    <div class="col-3">
                        <input type="date" class="form-control" id="date" placeholder="" name="date" />
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
            <div class="col-md-12 table-responsive table-responsive-sm">
                <table class="table table-hover table-sm" id="clientWithdrawalsTable">
                    <caption>
                        List of completed withdrawals for selected client
                    </caption>
                    <thead class="bg-dark report-white-font">
                        <tr>
                            <th>Created</th>
                            <th>Email</th>
                            <th>Trading Account</th>
                            <th>Amount</th>
                            <th>Net Amount</th>
                            <th>Currency</th>
                            <th>Status</th>
                            <th>Payment Gateway</th>
                            <th>Fees</th>
                            <th>Reference</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if(isset($clientData['transactionHistory']['withdrawals']) && is_array($clientData['transactionHistory']['withdrawals']) && count($clientData['transactionHistory']['withdrawals']) > 0)
                            @foreach($clientData['transactionHistory']['withdrawals'] as $withdrawal)
                            <tr>
                                <td>{{ isset($withdrawal['created']) ? \Carbon\Carbon::parse($withdrawal['created'])->format('M d, Y H:i') : 'N/A' }}</td>
                                <td><a href="{{route('clientProfile', ['email' => $withdrawal['email'] ?? 'unknown@example.com'])}}" class="text-primary">{{ $withdrawal['email'] ?? 'N/A' }}</a></td>
                                <td><a href="{{route('widthdrawRequest')}}" class="text-primary">{{ $withdrawal['tradingAccount'] ?? 'N/A' }}</a></td>
                                <td class="text-danger fw-bold">-${{ number_format($withdrawal['amount'] ?? 0, 2) }}</td>
                                <td class="text-danger fw-bold">-${{ number_format($withdrawal['netAmount'] ?? 0, 2) }}</td>
                                <td>{{ $withdrawal['currency'] ?? 'USD' }}</td>
                                <td>
                                    <span class="badge {{ 
                                        strtolower($withdrawal['status'] ?? '') === 'completed' || strtolower($withdrawal['status'] ?? '') === 'approved' ? 'bg-success' : 
                                        (strtolower($withdrawal['status'] ?? '') === 'pending' ? 'bg-warning' : 
                                        (strtolower($withdrawal['status'] ?? '') === 'failed' || strtolower($withdrawal['status'] ?? '') === 'rejected' ? 'bg-danger' : 'bg-secondary')) 
                                    }}">
                                        {{ $withdrawal['status'] ?? 'Unknown' }}
                                    </span>
                                </td>
                                <td><a href="{{route('widthdrawPayment')}}" class="text-primary">{{ $withdrawal['paymentGateway'] ?? 'N/A' }}</a></td>
                                <td class="text-muted">${{ number_format($withdrawal['fees'] ?? 0, 2) }}</td>
                                <td class="small text-muted">{{ $withdrawal['reference'] ?? 'N/A' }}</td>
                            </tr>
                            @endforeach
                        @else
                            <tr data-empty-state="true">
                                <td colspan="10" class="text-center py-4">
                                    <div class="d-flex flex-column align-items-center">
                                        <i class="fa-duotone fa-solid fa-money-bill-trend-down fa-3x text-muted mb-3"></i>
                                        <h5 class="text-muted">No Completed Withdrawals Found</h5>
                                        <p class="text-muted">This client has no completed withdrawals yet.</p>
                                        <a href="{{route('addWidthdrawAcc')}}" class="btn btn-warning">
                                            <i class="fa-duotone fa-solid fa-minus me-2"></i>
                                            Add Withdrawal
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    
</div>

<script>
$(document).ready(function() {
    // Initialize DataTables for Client Deposits table
    if ($('#clientDepositsTable').length) {
        try {
            $('#clientDepositsTable').DataTable({
                responsive: true,
                pageLength: 10,
                lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
                order: [[0, 'desc']], // Order by created date descending
                language: {
                    search: "Search deposits:",
                    lengthMenu: "Show _MENU_ deposits per page",
                    info: "Showing _START_ to _END_ of _TOTAL_ deposits",
                    infoEmpty: "No deposits available",
                    infoFiltered: "(filtered from _MAX_ total deposits)"
                },
                columnDefs: [
                    { 
                        targets: [3, 4, 8], // Amount, Net Amount, Fees columns
                        className: 'text-end'
                    },
                    { 
                        targets: [6], // Status column
                        className: 'text-center'
                    }
                ]
            });
        } catch (error) {
            console.error('ClientDepositsTable: Error initializing DataTables:', error);
        }
    }
    
    // Initialize DataTables for Client Withdrawals table
    if ($('#clientWithdrawalsTable').length) {
        try {
            $('#clientWithdrawalsTable').DataTable({
                responsive: true,
                pageLength: 10,
                lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
                order: [[0, 'desc']], // Order by created date descending
                language: {
                    search: "Search withdrawals:",
                    lengthMenu: "Show _MENU_ withdrawals per page",
                    info: "Showing _START_ to _END_ of _TOTAL_ withdrawals",
                    infoEmpty: "No withdrawals available",
                    infoFiltered: "(filtered from _MAX_ total withdrawals)"
                },
                columnDefs: [
                    { 
                        targets: [3, 4, 8], // Amount, Net Amount, Fees columns
                        className: 'text-end'
                    },
                    { 
                        targets: [6], // Status column
                        className: 'text-center'
                    }
                ]
            });
        } catch (error) {
            console.error('ClientWithdrawalsTable: Error initializing DataTables:', error);
        }
    }
});
</script>