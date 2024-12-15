@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-8 px-2">
                <h4 class="fw-bolder">Lead Assignment</h4>
            </div>

            <div class="col-md-2 px-2">
                <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
            </div>
            <div class="col-md-2 px-2">
                <a href="{{route('addLeadAssignment')}}"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <form method="POST" class="form" action="">
                    <div class="input-group">
                        <input class="form-control border-right-0 border" type="search" placeholder="Enter Keyword" id="example-search-input" />
                        <div class="input-group-text bg-info"><i class="fa fa-search"></i></div>
                    </div>
        </form>
    </div>
    <div class="col-md-4">
        <div class="d-grid d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-info text-uppercase btn-sm rounded mx-2">bulk operation</button>
            <button type="button" class="btn btn-info text-uppercase btn-sm rounded mx-2">Cancle</button>
            <button type="button" class="btn btn-info text-uppercase btn-sm rounded mx-2">Save</button>
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
                <th>Created</th>
                <th>Update</th>
                <th>Priority order</th>
            </tr>
        </thead>
        </form>
        <tbody >
            <tr>
                <td>saimon</td>
                <td>hasnat</td>
                <td></td>
                <td> </td>
                
            </tr>
            <tr>
                <td>saimon</td>
                <td>hasnat</td>
                <td></td>
                <td> </td>
            </tr>
            <tr>
                <td>hasnat</td>
                <td>cumilla</td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
</div>
@endsection