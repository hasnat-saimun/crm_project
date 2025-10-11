@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-5">
        <div class="row">
            <div class="col-md-6 ">
                <h4 class="fw-bolder">Payment gateway</h4>
            </div>
            <div class="col-md-2">
                <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
            </div>
            <div class="col-md-2 ">
                <a href="{{route('addPaymentGateway')}}"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-2 d-grid gap-2 d-md-flex ">
        <button type="button" class="btn btn-info text-uppercase btn-sm rounded">Change Oeder</button>
    </div>
    <div class="col-md-2 d-grid gap-2 d-md-flex ">
        <button type="button" class="btn btn-danger text-uppercase btn-sm rounded">Cencle</button>
    </div>
    <div class="col-md-2 d-grid gap-2 d-md-flex ">
        <button type="button" class="btn btn-info text-uppercase btn-sm rounded">Save</button>
    </div>
</div>
@endsection 
@section('body')
<div class="card">
    <div class="col-md-12 table-responsive table-responsive-sm">
    <table class="table table-hover table-sm" id="paymentGatewayTable">
        <caption>List of users</caption>
        <form method="POST" class="form align-items-center" action="">
        <thead class="bg-dark report-white-font">
            <tr>
                <th>Name</th>
                <th>method</th>
                <th>Currency</th>
                <th>Processing fee[%]</th>
                <th>Deposit fee</th>
                <th>Widthdraw fee</th>
                <th>Deposit active</th>
                <th>Widthdraw active</th>
            </tr>
        </thead>
        </form>
        <tbody >
            <tr>
                <td><a  class="text-primary"href="{{route('editPaymentGateway')}}">Bank Payment</a></td>
                <td>hasnat</td>
                <td>cumilla</td>
                <td>north</td>
                <td>hasnat</td>
                <td>cumilla</td>
                <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
            </tr>
            <tr>
                <td><a  class="text-primary"href="{{route('addPaymentGateway')}}">Bitcoin</a></td>
                <td>hasnat</td>
                <td>cumilla</td>
                <td>north</td>
                <td>hasnat</td>
                <td>cumilla</td>
                <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
            </tr>
            <tr>
                <td><a  class="text-primary"href="{{route('addPaymentGateway')}}">Credit card/BTC</a></td>
                <td>cumilla</td>
                <td>north</td>
                <td>smooth</td>
                <td>hasnat</td>
                <td>cumilla</td>
                <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
            </tr>
        </tbody>
    </table>
</div>
</div>
@endsection