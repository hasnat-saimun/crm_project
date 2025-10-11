@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-5">
        <div class="row">
            <div class="col-md-4 ">
                <h4 class="fw-bolder">Operations</h4>
            </div>
            <div class="col-md-2">
                <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
            </div>
            <div class="col-md-2 ">
                <a href="{{route('addOparation')}}"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
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
</div>
@endsection 
@section('body')
<div class="card">
    <div class="col-md-12 table-responsive table-responsive-sm">
    <table class="table table-hover table-sm" id="operationsTable">
        <caption>List of users</caption>
        <form method="POST" class="form align-items-center" action="">
        <thead class="bg-dark report-white-font">
            <tr>
                <th>Name</th>
                <th>Oparation type</th>
                <th>Created</th>
                <th>Branch</th>
            </tr>
        </thead>
        </form>
        <tbody >
            <tr>
                <td><a href="{{route('editOparation')}}" class="text-primary">One time login</a></td>
                <td>ONE_TIME_LOGIN</td>
                <td>27.02.2024 22:00:47</td>
                <td>north</td>
            </tr>
            <tr>
                <td><a href="" class="text-primary">One time login</a></td>
                <td>ONE_TIME_LOGIN</td>
                <td>27.02.2024 22:00:47</td>
                <td>north</td>
            </tr>
            <tr>
                <td><a href="" class="text-primary">One time login</a></td>                
                <td>ONE_TIME_LOGIN</td>
                <td>27.02.2024 22:00:47</td>
                <td>smooth</td>
            </tr>
        </tbody>
    </table>
</div>
</div>
@endsection