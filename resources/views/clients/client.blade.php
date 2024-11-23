@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-3">
        <div class="row">
            <div class="col-md-6 px-2">
                <h4 class="fw-bolder">Last events</h4>
            </div>

            <div class="col-md-3 px-2">
                <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
            </div>
            <div class="col-md-3 px-2">
                <a href="{{route('addclient')}}"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
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
                <a href=""><i class="fa-duotone fa-solid fa-arrow-up-from-bracket fa-sm bg-warning rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
            </div>
            <div class="col-md-2">
                <a href=""><i class="fa-duotone fa-solid fa-down-from-bracket fa-sm bg-danger rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
            </div>
            <div class="col-md-7 d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="button" class="btn btn-info text-uppercase btn-sm rounded">bulk operation</button>
            </div>
        </div>
    </div>
</div>
@endsection @section('body')
<div class="card">
    <div class="col-md-12 table-responsive table-responsive-sm">

    <table class="table table-hover table-sm ">
        <caption>List of users</caption>
        <form method="POST" class="form align-items-center" action="">
        <thead class="bg-dark report-white-font">
            
            
            <tr>
                
                <th ><input type="search" class="form-control" id="autoSizingInputGroup" placeholder="online"></th>
                <th ><input type="search" class="form-control" id="autoSizingInputGroup" placeholder="Email"></th>
                <th ><input class="form-control" type="search" placeholder="Name" id="Name" /></th>
                <th ><input class="form-control" type="search" placeholder="Surname " id="example-search-input" /></th>
                <th ><input class="form-control" type="search" placeholder=" Created" id="example-search-input" /></th>
                <th ><input class="form-control" type="search" placeholder="Last contact " id="example-search-input" /></th>
                <th ><input class="form-control" type="search" placeholder=" Status" id="example-search-input" /></th>
                <th ><input class="form-control" type="search" placeholder="Manager " id="example-search-input" /></th>
                <th ><input class="form-control" type="search" placeholder=" Branch" id="example-search-input" /></th>
                <th ><a href="{{route('addclient')}}"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a></th>
                
            </tr>
        </thead>
        </form>
        <tbody >
            <tr>
                <td>Acitv</td>
            <td>hasnat@gmail.com</td>
            <td>hasnat</td>
            <td>saimon</td>
            <td>12.10.2024</td>
            <td>25.12.2024</td>
            <td>New</td>
            <td>Tast admin</td>
            <td>Admin</td>
            </tr>
            <tr>
                <td>Dactive</td>
            <td>yousuf@gmail.com</td>
            <td>Yousuf</td>
            <td>shovo</td>
            <td>12.10.2024</td>
            <td>25.12.2024</td>
            <td>New</td>
            <td>Tast admin</td>
            <td>Admin</td>
            </tr>
            <tr>
                <td>Active</td>
            <td>mirza@gmail.com</td>
            <td>Mirza</td>
            <td>sobuj</td>
            <td>12.10.2024</td>
            <td>25.12.2024</td>
            <td>New</td>
            <td>Tast admin</td>
            <td>Admin</td>
            </tr>
        </tbody>
    </table>
</div>
</div>

@endsection
