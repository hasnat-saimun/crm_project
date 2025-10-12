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
    <caption>List of users</caption>

    <table class="table table-hover table-sm" id="clientsTable">
      <thead class="bg-dark report-white-font">
        <tr>
          <th><input type="search" class="form-control" placeholder="Online"></th>
          <th><input type="search" class="form-control" placeholder="Email"></th>
          <th><input class="form-control" type="search" placeholder="Name"></th>
          <th><input class="form-control" type="search" placeholder="Surname"></th>
          <th><input class="form-control" type="search" placeholder="Created"></th>
          <th><input class="form-control" type="search" placeholder="Last contact"></th>
          <th><input class="form-control" type="search" placeholder="Status"></th>
          <th><input class="form-control" type="search" placeholder="Manager"></th>
          <th><input class="form-control" type="search" placeholder="Branch"></th>
          <th><input class="form-control" type="search" placeholder="Affiliate"></th>
          <th><input class="form-control" type="search" placeholder="Phone number"></th>
          <th><input class="form-control" type="search" placeholder="Language"></th>
          <th><input class="form-control" type="search" placeholder="Role"></th>
          <th><input class="form-control" type="search" placeholder="Lead status"></th>
          <th><input class="form-control" type="search" placeholder="Lead source"></th>
          <th><input class="form-control" type="search" placeholder="Last online"></th>
          <th><input class="form-control" type="search" placeholder="Free margin"></th>
          <th><input class="form-control" type="search" placeholder="Equity"></th>
          <th><input class="form-control" type="search" placeholder="Margin level"></th>
          <th><input class="form-control" type="search" placeholder="Total deposits"></th>
          <th><input class="form-control" type="search" placeholder="Total withdrawals"></th>
          <th><input class="form-control" type="search" placeholder="Last deposit"></th>
          <th><input class="form-control" type="search" placeholder="Last note"></th>
        </tr>
      </thead>

      <tbody>
        @foreach($clients as $client)
          <tr>
            <td>Active</td>
            <td>
              <a href="{{ route('clientProfile',['email' => $client['email']]) }}" class="text-primary">
                {{ $client['email'] ?? 'N/A' }}
              </a>
            </td>
            <td>{{ $client['firstName'] ?? 'N/A' }}</td>
            <td>{{ $client['lastName'] ?? 'N/A' }}</td>
            <td>{{ $client['created'] ?? 'N/A' }}</td>
            <td>{{ $client['lastContact'] ?? 'N/A' }}</td>
            <td>{{ $client['status'] ?? 'N/A' }}</td>
            <td>{{ $client['manager'] ?? 'N/A' }}</td>

            {{-- Match header: Branch then Affiliate --}}
            <td>{{ $client['branch'] ?? 'N/A' }}</td>
            <td>{{ $client['affiliate'] ?? 'N/A' }}</td>

            <td>{{ $client['phone'] ?? 'N/A' }}</td>
            <td>{{ $client['language'] ?? 'N/A' }}</td>
            <td>{{ $client['role'] ?? 'N/A' }}</td>

            {{-- Lead status / Lead source --}}
            <td>{{ $client['leadStatus'] ?? $client['status'] ?? 'N/A' }}</td>
            <td>{{ $client['leadSource'] ?? $client['country'] ?? 'N/A' }}</td>

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
  </div>
</div>
@endsection
