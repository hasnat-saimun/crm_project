@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-12">
        <h4 class="fw-bolder">Branches & CRM Users</h4>
    </div>
</div>
@endsection @section('body')
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2">
                    <h4 class="fw-bolder">Branches</h4>
                </div>
                <div class="col-md-1">
                    <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
                </div>
                <div class="col-md-1 ">
                    <a href="{{route('addTrading')}}"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
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
        </div>
    </div>
    <div class="col-md-12 card table-responsive table-responsive-sm">
        <table class="table table-hover table-sm">
            <caption>
                list of user
            </caption>
            <form method="POST" class="form align-items-center" action="">
                <thead class="bg-dark report-white-font">
                    <tr>
                        <TH>Name</TH>
                        <th>Account Reister Link</th>
                    </tr>
                </thead>
            </form>
            <tbody>
                <tr>
                    <td>5511855</td>
                    <td>
                        <div class="row">
                            <div class="col-md-2">
                            <button type="button" class="btn btn-info text-uppercase btn-sm rounded px-2">DEMO</button>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-info text-uppercase btn-sm rounded px-2">REAL</button>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2">
                    <h4 class="fw-bolder">CRM Users</h4>
                </div>
                <div class="col-md-1">
                    <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
                </div>
                <div class="col-md-1">
                    <a href="{{route('addTrading')}}"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
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
        </div>
    </div>
    
    <div class="col-md-12 card table-responsive table-responsive-sm">
        <table class="table table-hover table-sm">
            <caption>
                List of users
            </caption>
            <form method="POST" class="form align-items-center" action="">
                <thead class="bg-dark report-white-font">
                    <tr>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Email</th>
                        <th>Slave branches</th>
                        <th>Role</th>
                    </tr>
                </thead>
            </form>
            <tbody>
                <tr>
                    <td>5511855</td>
                    <td>USD</td>
                    <td>hasnat@gmail.com</td>
                    <td>18181</td>
                    <td>USD</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
