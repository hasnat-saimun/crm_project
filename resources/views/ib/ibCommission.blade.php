@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-3">
        <h4 class="fw-bolder">IB Accounts</h4>
    </div>
    <div class="col-md-1">
        <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
    </div>
    <div class="col-md-3">
        <form method="POST" class="form" action="">
            <div class="input-group">
                <input class="form-control border-right-0 border" type="search" placeholder="Enter Keyword" id="example-search-input" />
                <div class="input-group-text bg-info"><i class="fa fa-search"></i></div>
            </div>
        </form>
    </div>
    <div class="col-md-3">
        <button type="button" class="btn btn-info text-uppercase btn-sm rounded">REGISTER IB ACCOUNT</button>
    </div>
</div>
@endsection @section('body')
<div class="col-md-12">
    <div class="card table-responsive table-responsive-sm">
        <table class="table table-hover table-sm">
            <caption>
                List of users
            </caption>
            <form method="POST" class="form align-items-center" action="">
                <thead class="bg-dark report-white-font">
                    <tr>
                        <th>Login</th>
                        <th>Email</th>
                        <th>Currency</th>
                        <th>Balance</th>
                        <th>Role</th>
                        <th>Commission</th>
                    </tr>
                </thead>
            </form>
            <tbody>
                <tr>
                    <td>5511855</td>
                    <td>hasnat@gmail.com</td>
                    <td>USD</td>
                    <td>18181</td>
                    <td>EDFIG</td>
                    <td><a href="" class="text-primary">LGNFX IB</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3">
                <h4 class="fw-bolder">IB Commissions</h4>
            </div>
            <div class="col-md-1">
                <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
            </div>
            <div class="col-md-3">
                <form method="POST" class="form" action="">
                    <div class="input-group">
                        <input class="form-control border-right-0 border" type="search" placeholder="Enter Keyword" id="example-search-input" />
                        <div class="input-group-text bg-info"><i class="fa fa-search"></i></div>
                    </div>
                </form>
            </div>
            <div class="col-md-2">
                <a href=""><i class="fa-duotone fa-solid fa-down-from-bracket fa-sm bg-danger rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="card table-responsive table-responsive-sm">
        <table class="table table-hover table-sm">
            <caption>
                List of users
            </caption>
            <form method="POST" class="form align-items-center" action="">
                <thead class="bg-dark report-white-font">
                    <tr>
                        <th>Deal</th>
                        <th>Time</th>
                        <th>Profit</th>
                        <th>Comment</th>
                    </tr>
                </thead>
            </form>
            <tbody>
                <tr>
                    <td>5511855</td>
                    <td>10.00</td>
                    <td>USD</td>
                    <td>high</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
