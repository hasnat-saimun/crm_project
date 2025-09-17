@extends('header') 
@section('header')
<div class="row mt-4">
    <div class="col-md-3">
        <div class="row">
            <div class="col-md-6 px-2">
                <h4 class="fw-bolder">Clients</h4>
            </div>
            <div class="col-md-3 px-2">
                <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
            </div>
            <div class="col-md-3 px-2">
                <a href="{{route('addclient')}}"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
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
                <div class="col-md-4">
                    <input type="date" class="form-control" id="to" placeholder="" name="to" />
                </div>
                <div class="col-md-4">
                    <input type="date" class="form-control" id="form" placeholder="" name="form" />
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-3">
        <div class="row">
            <div class="col-md-2">
                <a href=""><i class="fa-duotone fa-solid fa-arrow-up-from-bracket fa-sm bg-warning rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
            </div>
            <div class="col-md-2">
                <a href=""><i class="fa-duotone fa-solid fa-down-from-bracket fa-sm bg-danger rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
            </div>
            <div class="col-md-7 d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="button" class="btn btn-info text-uppercase btn-sm rounded">bulk operation</button>
            </div>
        </div>
    </div>
</div>
@endsection 
@section('body')
<div class="card">
    <div class="col-md-12 table-responsive table-responsive-sm">
        <caption>
            List of users
        </caption>
        <form method="POST" class="form align-items-center" action="">
            <table class="table table-hover table-sm" id="myTable">
                <thead class="bg-dark report-white-font">
                    <tr>
                        <th><input type="search" class="form-control" id="autoSizingInputGroup" placeholder="online" /></th>
                        <th><input type="search" class="form-control" id="autoSizingInputGroup" placeholder="Email" /></th>
                        <th><input class="form-control" type="search" placeholder="Name" id="Name" /></th>
                        <th><input class="form-control" type="search" placeholder="Surname " id="sureName" /></th>
                        <th><input class="form-control" type="search" placeholder=" Created" id="createdAt" /></th>
                        <th><input class="form-control" type="search" placeholder="Last contact " id="lastContact" /></th>
                        <th><input class="form-control" type="search" placeholder=" Status" id="status" /></th>
                        <th><input class="form-control" type="search" placeholder="Manager " id="manager" /></th>
                        <th><input class="form-control" type="search" placeholder=" Branch" id="branch" /></th>
                        <th><input class="form-control" type="search" placeholder=" Affiliate" id="affiliate" /></th>
                        <th><input class="form-control" type="search" placeholder=" Phone number" id="phoneNumber" /></th>
                        <th><input class="form-control" type="search" placeholder=" Language" id="language" /></th>
                        <th><input class="form-control" type="search" placeholder=" Role" id="rollNumber" /></th>
                        <th><input class="form-control" type="search" placeholder=" Lead status" id="leadStatus" /></th>
                        <th><input class="form-control" type="search" placeholder=" Lead source" id="leadSource" /></th>
                        <th><input class="form-control" type="search" placeholder=" Last online" id="lastOnline" /></th>
                        <th><input class="form-control" type="search" placeholder=" Free margin" id="freeMargin" /></th>
                        <th><input class="form-control" type="search" placeholder=" Equity" id="equity" /></th>
                        <th><input class="form-control" type="search" placeholder=" Margin level" id="marginLevel" /></th>
                        <th><input class="form-control" type="search" placeholder=" Total deposits" id="totalDeposit" /></th>
                        <th><input class="form-control" type="search" placeholder=" Total withdrawals" id="totalWithdrawal" /></th>
                        <th><input class="form-control" type="search" placeholder=" Last deposit" id="lastDeposit" /></th>
                        <th><input class="form-control" type="search" placeholder=" Last note" id="lastNote" /></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $x = 1;
                    @endphp
                    @foreach($clients as $client)
                    <tr>
                        <td>Active</td>
                        <td>
                            <a href="{{ route('clientProfile') }}" class="text-primary">
                                {{ $client['email'] ?? 'N/A' }}
                            </a>
                        </td>
                        <td>{{ $client['firstName'] ?? 'N/A' }}</td>
                        <td>{{ $client['lastName'] ?? 'N/A' }}</td>
                        <td>{{ $client['created'] ?? 'N/A' }}</td>
                        <td>{{ $client['lastContact'] ?? 'N/A' }}</td>
                        <td>{{ $client['status'] ?? 'N/A' }}</td>
                        <td>{{ $client['manager'] ?? 'N/A' }}</td>
                        <td>{{ $client['affiliate'] ?? 'N/A' }}</td>
                        <td>{{ $client['branch'] ?? 'N/A' }}</td>
                        <td>{{ $client['phone'] ?? 'N/A' }}</td>
                        <td>{{ $client['language'] ?? 'N/A' }}</td>
                        <td>{{ $client['role'] ?? 'N/A' }}</td>
                        <td>{{ $client['status'] ?? 'N/A' }}</td> {{-- Lead status if you prefer --}}
                        <td>{{ $client['country'] ?? 'N/A' }}</td> {{-- Or Lead source if you add it --}}
                        <td>{{ $client['lastOnline'] ?? 'N/A' }}</td>
                        <td>{{ $client['freeMargin'] ?? 'N/A' }}</td>
                        <td>{{ $client['equity'] ?? 'N/A' }}</td>
                        <td>{{ $client['marginLevel'] ?? 'N/A' }}</td>
                        <td>{{ $client['totalDeposits'] ?? 'N/A' }}</td>
                        <td>{{ $client['totalWithdrawals'] ?? 'N/A' }}</td>
                        <td>{{ $client['lastDeposit'] ?? 'N/A' }}</td>
                        <td>Last note</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </form>
    </div>
</div>
<script>
  $(function () {
  var table = $('#myTable').DataTable({ /* options */ });
  table.columns().every(function (idx) {
    $('thead th:eq(' + idx + ') input').on('keyup change clear', () => {
      table.column(idx).search($(event.target).val()).draw();
    });
  });
});

</script>


@endsection
