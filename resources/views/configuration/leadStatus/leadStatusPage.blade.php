@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-5">
        <div class="row">
            <div class="col-md-5">
                <h4 class="fw-bolder">lead Statuses</h4>
            </div>
            <div class="col-md-2">
                <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
            </div>
            <div class="col-md-2 ">
                <a href="{{route('addLeadStatus')}}"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection 
@section('body')
<div class="card">
    <div class="col-md-12 table-responsive table-responsive-sm">
    <table class="table table-hover table-sm" id="leadStatusTable">
        <caption>List of users</caption>
        <form method="POST" class="form align-items-center" action="">
        <thead class="bg-dark report-white-font">
            <tr>
                <th>name</th>
                <th>Lead stage</th>
                <th>Enabled</th>
            </tr>
        </thead>
        </form>
        <tbody >
            <tr>
                <td><a href="{{route('editLeadStatus')}}" class="text-primary">Bad managed lead</a></td>
                <td>READY_TO_DEPOSIT</td>
                <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
            </tr>
            <tr>
                <td><a href="{{route('editLeadStatus')}}" class="text-primary">Call back today</a></td>
                <td>READY_TO_DEPOSIT</td>
                <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
            </tr>
            <tr>
                <td><a href="{{route('editLeadStatus')}}" class="text-primary">Potential</a></td>
                <td>NO_POTENTIAL</td>
                <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
            </tr>
        </tbody>
    </table>
</div>
</div>
@endsection