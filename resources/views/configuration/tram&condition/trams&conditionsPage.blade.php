@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-5">
        <div class="row">
            <div class="col-md-7">
                <h4 class="fw-bolder">Trams & Condition Link</h4>
            </div>
            <div class="col-md-2">
                <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
            </div>
            <div class="col-md-2 ">
                <a href="{{route('addTramsConditions')}}"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
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
        <button type="button" class="btn btn-info text-uppercase btn-sm rounded">Save Oeder</button>
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
                <th>URL</th>
                <th>Created</th>
                <th>Update</th>
                <th>Branches</th>
                <th>Active</th>
                <th>Required</th>
            </tr>
        </thead>
        </form>
        <tbody >
            <tr>
                <td>saimon</td>
                <td><a href="{{route('editTramsConditions')}}" class="text-primary">https://lgnfx.com</a></td>
                <td>10.10.2001</td>
                <td>10.10.2010</td>
                <td>Default, Pixel Broker</td>
                <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
            </tr>
            <tr>
                <td>saimon</td>
                <td><a href="{{route('editTramsConditions')}}" class="text-primary">https://lgnfx.com</a></td>
                <td>10.10.2001</td>
                <td>10.10.2010</td>
                <td>Default, Pixel Broker</td>
                <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
            </tr>
            <tr>
                <td>saimon</td>
                <td><a href="{{route('editTramsConditions')}}" class="text-primary">https://lgnfx.com</a></td>
                <td>10.10.2001</td>
                <td>10.10.2010</td>
                <td>Default, Pixel Broker</td>
                <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
            </tr>
        </tbody>
    </table>
</div>
</div>
@endsection