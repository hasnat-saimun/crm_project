@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-5">
        <div class="row">
            <div class="col-md-5">
                <h4 class="fw-bolder">Cashback</h4>
            </div>
            <div class="col-md-2">
                <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
            </div>
            <div class="col-md-2 ">
                <a href="{{route('addCashBack')}}"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
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
                <th>Name</th>
                <th>Offers</th>
                <th>Amount</th>
                <th>Currency</th>
                <th>Cashback type</th>
            </tr>
        </thead>
        </form>
        <tbody >
            <tr>
                <td>saimon</td>
                <td>hasnat</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>saimon</td>
                <td>hasnat</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>hasnat</td>
                <td>cumilla</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
</div>
@endsection