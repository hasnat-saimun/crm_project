@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-3">
        <div class="row">
            <div class="col-md-6 px-2">
                <h4 class="fw-bolder">Deposits</h4>
            </div>

            <div class="col-md-3 px-2">
                <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
            </div>
            <div class="col-md-3 px-2">
                <a href="{{route('depositadd')}}"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
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
                <a href=""><i class="fa-duotone fa-solid fa-down-from-bracket fa-sm bg-danger rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection 
@section('body')
<div class="card">
    <div class="col-md-12 table-responsive table-responsive-sm">

    <table class="table table-hover table-sm ">
        <caption>List of users</caption>
        <form method="POST" class="form align-items-center" action="">
        <thead class="bg-dark report-white-font">
            
            
            <tr>
                
                <th ><input type="search" class="form-control" id="autoSizingInputGroup" placeholder="Trading Account"></th>
                <th ><input type="search" class="form-control" id="autoSizingInputGroup" placeholder="Email"></th>
                <th >Amount</th>
                <th >Net Amount</th>
                <th ><input class="form-control" type="search" placeholder=" Created" id="example-search-input" /></th>
                <th ><input class="form-control" type="search" placeholder="Currency" id="example-search-input" /></th>
                <th ><input class="form-control" type="search" placeholder=" Status" id="example-search-input" /></th>
                <th ><input class="form-control" type="search" placeholder="Payment Getway" id="example-search-input" /></th>
                <th ><input class="form-control" type="search" placeholder="Payment Id" id="example-search-input" /></th>
                <th ><input class="form-control" type="search" placeholder="Account manager" id="example-search-input" /></th>
                <th ></th>
                <th ><a href="{{route('addclient')}}"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a></th>
                
            </tr>
        </thead>
        </form>
        <tbody >
            <tr>
                <td>4563768</td>
                <td>hasnat@gmail.com</td>
                <td>20009</td>
                <td>90677</td>
                <td>12.10.2024</td>
                <td>USD</td>
                <td>Done</td>
                <td><a href="{{route('paymentGte')}}" class="text-primary">Bank Payment</a></td>
                <td>56748790</td>
                <td>Admin</td>
                <td><a href="{{route('detailesDeposit')}}"><button type="button" class="btn btn-info btn-sm ">Detailes</button></a></td>
            </tr>
            <tr>
                <td>4563768</td>
                <td>hasnat@gmail.com</td>
                <td>20009</td>
                <td>90677</td>
                <td>12.10.2024</td>
                <td>USD</td>
                <td>Done</td>
                <td><a href="{{route('paymentGte')}}" class="text-primary">Bank Payment</a></td>
                <td>56748790</td>
                <td>Admin</td>
                <td><a href="{{route('detailesDeposit')}}"><button type="button" class="btn btn-info btn-sm">Detailes</button></td>
            </tr>
            <tr>
                <td>4563768</td>
                <td>hasnat@gmail.com</td>
                <td>20009</td>
                <td>90677</td>
                <td>12.10.2024</td>
                <td>USD</td>
                <td>Done</td>
                <td><a href="{{route('paymentGte')}}" class="text-primary">USDT TRC-20</a></td>
                <td>56748790</td>
                <td>Admin</td>
                <td><a href="{{route('detailesDeposit')}}"><button type="button" class="btn btn-info btn-sm">Detailes</button></td>
            </tr>
        </tbody>
    </table>
</div>
</div>
@endsection





