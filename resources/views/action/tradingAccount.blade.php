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
    <div class="col-md-3">
        <form method="POST" class="form" action="">
            
                    <div class="input-group">
                        <input class="form-control border-right-0 border" type="search" placeholder="Enter Keyword" id="example-search-input" />
                        <div class="input-group-text bg-info"><i class="fa fa-search"></i></div>
                    </div>
        </form>
    </div>
    <div class="col-md-2">
        <a href=""><i class="fa-duotone fa-solid fa-down-from-bracket fa-sm bg-danger rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
    </div>
</div>
@endsection 
@section('body')
<div class="card">
    <div class="col-md-12 table-responsive table-responsive-sm">
    <table class="table table-hover table-sm" id="tradingAccountTable">
        <caption>List of users</caption>
        <form method="POST" class="form align-items-center" action="">
        <thead class="bg-dark report-white-font">
            <tr>
                <th>Trading Account</th>
                <th>Account</th>
                <th>offer</th>
                <th>Branch</th>
                <th>Status</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        </form>
        <tbody >
            <tr>    
                <td ><a href="{{route('tradingAcRqForm')}}" class="text-primary">15484</a></td>
                <td><a href="{{route('clientProfile')}}" class="text-primary">hasnat@gmail.com</a></td>
                <td><a href="{{route('tradingOffer')}}" class="text-primary"></a>satndard</td>
                <td><a href="{{route('branchEditform')}}" class="text-primary">Test admin</a></td>
                <td>Done</td>
                <td>12.10.2024</td>
                <td>12.10.2024</td>
            </tr>
            <tr>
                <td><a href="{{route('tradingAcRqForm')}}" class="text-primary">15484</a></td>
                <td><a href="{{route('clientProfile')}}" class="text-primary">hasnat@gmail.com</a></td>
                <td><a href="{{route('tradingOffer')}}" class="text-primary">satndard</a></td>
                <td><a href="{{route('branchEditform')}}" class="text-primary">Test admin</a></td>
                <td>Done</td>
                <td>12.10.2024</td>
                <td>12.10.2024</td>
            </tr>
            <tr>
                <td><a href="{{route('tradingAcRqForm')}}" class="text-primary">15484</a></td>
                <td><a href="{{route('clientProfile')}}" class="text-primary">hasnat@gmail.com</a></td>
                <td><a href="{{route('tradingOffer')}}" class="text-primary">satndard</a></td>
                <td><a href="{{route('branchEditform')}}" class="text-primary">Test admin</a></td>
                <td>Done</td>
                <td>12.10.2024</td>
                <td>12.10.2024</td>
            </tr>
        </tbody>
    </table>
</div>
</div>
@endsection