@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-2">
        <h4 class="fw-bolder">CPA Program</h4>
    </div>
    <div class="col-md-1">
        <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
    </div>
    <div class="col-md-3 ">
                <a href="{{route('addCpaProgram')}}"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
            </div>
    <div class="col-md-3">
        <form method="POST" class="form" action="">
            <div class="input-group">
                <input class="form-control border-right-0 border" type="search" placeholder="Enter Keyword" id="example-search-input" />
                <div class="input-group-text bg-info"><i class="fa fa-search"></i></div>
            </div>
        </form>
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
                <th>Created</th>
                <th>Update</th>
                <th>Commission</th>
                
            </tr>
        </thead>
        </form>
        <tbody >
            <tr>    
                <td>15484</td>
                <td>hasnat@gmail.com</td>
                <td>satndard</td>
                <td>Test admin</td>
            </tr>
            <tr>
                <td>15484</td>
                <td>hasnat@gmail.com</td>
                <td>satndard</td>
                <td>Test admin<></td>
            </tr>
            <tr>
                <td>15484</td>
                <td>hasnat@gmail.com</td>
                <td>satndard</td>
                <td>Test admin</td>
            </tr>
        </tbody>
    </table>
</div>
</div>
@endsection