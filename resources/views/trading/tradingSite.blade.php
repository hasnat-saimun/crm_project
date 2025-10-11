@extends('header') @section('header')
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
                <a href="{{route('addTrading')}}"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
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
</div>
@endsection 
@section('body')
<div class="card">
    <div class="col-md-12 table-responsive table-responsive-sm">

    <table class="table table-hover table-sm" id="tradingTable">
        <caption>List of Trading Accounts</caption>
        <thead class="bg-dark report-white-font">
            <tr class="text-center">
                <th class="text-white">Id</th>
                <th class="text-white">Created<br>
                    <small>From <input type="date" class="form-control form-control-sm d-inline" style="width:auto;"> To <input type="date" class="form-control form-control-sm d-inline" style="width:auto;"></small>
                </th>
                <th class="text-white">Email</th>
                <th class="text-white">Offer</th>
                <th class="text-white">Balance</th>
                <th class="text-white">Operations</th>
                <th>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#add">
                        <i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="addLabel">Select columns to show</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <select class="selectpicker" multiple aria-label="size 3 select example">
                                        <option value="">Id</option>
                                        <option value="">Created</option>
                                        <option value="">Name</option>
                                        <option value="">Surname</option>
                                        <option value="">Email</option>
                                        <option value="">Offer</option>
                                        <option value="">Balance</option>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </th>
                
            </tr>
        </thead>
        <tbody>
            @if(empty($accounts))
                <tr>
                    <td colspan="8" class="text-center text-muted">
                        <p>No trading accounts found.</p>
                        <small>Debug: {{ isset($accounts) ? 'Variable exists but empty' : 'Variable not set' }}</small>
                    </td>
                </tr>
            @endif
            @foreach($accounts as $index => $account)
            <tr class="text-center">
                <td>{{ $account['login'] ?? ($account['id'] ?? '25259') }}</td>
                <td>{{ $account['created'] ? \Carbon\Carbon::parse($account['created'])->format('d.m.Y H:i:s') : '10.10.2025 11:54:16' }}</td>
                <td>
                    <a href="{{route('clientProfile')}}" class="text-info">
                        {{ $account['email'] ?? 'test@example.com' }}
                    </a>
                </td>
                <td>
                    <a href="{{route('offerForm')}}" class="text-info">
                        {{ $account['group'] ?? 'ELA Test EUR' }}
                    </a>
                </td>
                <td>{{ $account['balance'] ?? '' }}</td>
                <td>
                    <a href="{{route('tradingDepo')}}" class="btn btn-info btn-sm">
                        DEPOSIT
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection