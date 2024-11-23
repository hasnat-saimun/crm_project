@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-12">
        <h4 class="fw-bolder">IB Accounts</h4>
    </div>
</div>
@endsection @section('body')
<div class="card">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <h4 class="fw-bolder">Trading Accounts</h4>
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
                <div class="col-md-3 ">
                    <button type="button" class="btn btn-info text-uppercase btn-sm rounded">REGISTER IB ACCOUNT</button>
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
                        <TH>Login</TH>
                        <th>Email</th>
                        <th>Currency</th>
                        <th>Balance</th>
                        <th>Commission</th>
                        <th>Account Register Link</th>
                    </tr>
                </thead>
            </form>
            <tbody>
                <tr>
                    <td>5511855</td>
                    <td>hasnat@gmail.com</td>
                    <td>USD</td>
                    <td>18181</td>
                    <td><a href="" class="text-primary">LGNFX IB</a></td>
                    <td>
                        <div class="row">
                            <div class="col-md-4">
                            <button type="button" class="btn btn-info text-uppercase btn-sm rounded px-2">SUB IB</button>
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-info text-uppercase btn-sm rounded px-2">DEMO</button>
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-info text-uppercase btn-sm rounded">REAL</button>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="card">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <h4 class="fw-bolder">Trading Accounts</h4>
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
    
    <div class="col-md-12 card table-responsive table-responsive-sm">
        <table class="table table-hover table-sm">
            <caption>
                List of users
            </caption>
            <form method="POST" class="form align-items-center" action="">
                <thead class="bg-dark report-white-font">
                    <tr>
                        <TH>Login</TH>
                        <th>Email</th>
                        <th>Currency</th>
                        <th>Balance</th>
                        <th>offer</th>
                        <th>Account Register Link</th>
                    </tr>
                </thead>
            </form>
            <tbody>
                <tr>
                    <td>5511855</td>
                    <td>hasnat@gmail.com</td>
                    <td>USD</td>
                    <td>18181</td>
                    <td><a href="" class="text-primary">standerd</a></td>
                    <td>
                        <div class="row">
                            <div class="col-md-4">
                            <button type="button" class="btn btn-info text-uppercase btn-sm rounded px-2">SUB IB</button>
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-info text-uppercase btn-sm rounded px-2">DEMO</button>
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-info text-uppercase btn-sm rounded">REAL</button>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="card">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <h4 class="fw-bolder">Trading Accounts</h4>
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
    
    <div class="col-md-12 card table-responsive table-responsive-sm">
        <table class="table table-hover table-sm">
            <caption>
                List of users
            </caption>
            <form method="POST" class="form align-items-center " action="">
                <thead class="bg-dark report-white-font">
                    <tr>
                        <th>Login</th>
                        <th>Email</th>
                        <th>Currency</th>
                        <th>Balance</th>
                        <th>offer</th>
                    </tr>
                </thead>
            </form>
            <tbody>
                <tr>
                    <td>5511855</td>
                    <td>hasnat@gmail.com</td>
                    <td>USD</td>
                    <td>18181</td>
                    <td><a href="" class="text-primary">standerd</a></td>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
