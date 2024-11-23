@extends('header') @section('header')
<div class="col-md-6 mt-4">
    <h3 class="fw-bolder text-uppercase">
        Broker Analytics
    </h3>
</div>
<div class="col-md-6">
    <ul class="nav-right">
        <li class="header-search">
            <div class="main-search morphsearch-search">
                <div class="input-group">
                    <span class="input-group-prepend search-close">
                        <i class="feather icon-x input-group-text"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Enter Keyword" />
                    <span class="input-group-append search-btn">
                        <i class="feather icon-search input-group-text"></i>
                    </span>
                </div>
            </div>
        </li>
        <li>
            <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                <i class="full-screen feather icon-maximize"></i>
            </a>
        </li>
    </ul>
</div>
@endsection @section('body')
<div class="col-md-12 text-center">
    <h3>Summary Total</h3>
</div>
<div class="row mt-3">
    <div class="col-md-4">
        <div class="card text-center p-3">
            <!-- <div class=""></div> -->
            <h3 class="fw-bold text-info">
                0/0
            </h3>
            <h5 class="fw-bold">Total Clients/Diposited Clients</h5>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center p-3">
            <!-- <div class=""></div> -->
            <h3 class="fw-bold text-info">
                0/0
            </h3>
            <h5 class="fw-bold">IB account/Depcited IB client account</h5>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center p-3">
            <!-- <div class=""></div> -->
            <h3 class="fw-bold text-info">
                0
            </h3>
            <h5 class="fw-bold">Number of leads</h5>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card text-center p-3">
            <!-- <div class=""></div> -->
            <h3 class="fw-bold text-info">
                0/0
            </h3>
            <h5 class="fw-bold">Total KYC requests/Accepted KYC requests</h5>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card text-center p-3">
            <!-- <div class=""></div> -->
            <h3 class="fw-bold text-info">
                0
            </h3>
            <h5 class="fw-bold">Online now</h5>
        </div>
    </div>
</div>
<div class="col-md-12">
    <!-- <div class=""></div> -->
    <div class="card">
        <h3 class="text-center p-4">Business trends</h3>
        <form method="POST" class="form p-4" action="">
            <div class="row align-items-center">
                <div class="col-sm-2">
                    <label for="inputPassword" class="col-sm-12 col-form-label text-end">Date range :</label>
                </div>
                <div class="col-sm-2">
                    <input type="date" class="form-control" id="birth" placeholder="" name="birth" />
                </div>
                <div class="col-sm-2">
                    <input type="date" class="form-control" id="birth" placeholder="" name="birth" />
                </div>
                <div class="col-sm-2">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                        <label class="form-check-label" for="flexRadioDefault1">
                            Last day
                        </label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked />
                        <label class="form-check-label" for="flexRadioDefault2">
                            Last week
                        </label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked />
                        <label class="form-check-label" for="flexRadioDefault2">
                            Last month
                        </label>
                    </div>
                </div>
            </div>
            <div class="row align-items-center text-center mt-4">
                <div class="col-sm-2">
                    <label for="inputPassword" class="col-sm-12 col-form-label text-end">Demo/Real</label>
                </div>
                <div class="col-sm-2">
                    <select class="selectpicker" multiple aria-label="size 3 select example">
                        <option value="1">Real offer</option>
                        <option value="2">Demo offer</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <label for="inputPassword" class="col-sm-12 col-form-label text-end">A-Book/B-Book</label>
                </div>
                <div class="col-sm-2">
                    <select class="selectpicker" multiple aria-label="size 3 select example">
                        <option value="1">A-Book offers</option>
                        <option value="2">B-Book offers</option>
                        <option value="3">Other</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <button type="button" class="btn btn-info text-start">APPLY</button>
                </div>
            </div>
        </form>
        <div class="row align-items-center p-4">
            <div class="col border-end text-center">
                <h3 class="fw-bold text-info">
                    0
                </h3>
                <h5 class="fw-bold">Deposited clients</h5>
            </div>
            <div class="col border-end text-center">
                <h3 class="fw-bold text-info">
                    0/0
                </h3>
                <h5 class="fw-bold">IB accounts/Deposited IB client accounts</h5>
            </div>
            <div class="col border-end text-center">
                <h3 class="fw-bold text-info">
                    0
                </h3>
                <h5 class="fw-bold">Number of leads</h5>
            </div>
            <div class="col text-center">
                <h3 class="fw-bold text-info">
                    0.00
                </h3>
                <h5 class="fw-bold">IB commissions</h5>
            </div>
        </div>
        <div class="row align-items-center p-4">
            <div class="col border-end text-center">
                <h3 class="fw-bold text-info">
                    0/0
                </h3>
                <h5 class="fw-bold">KYC requests/Accepted KYC requests</h5>
            </div>
            <div class="col border-end text-center">
                <h3 class="fw-bold text-info">
                    0
                </h3>
                <h5 class="fw-bold">Become IB requests</h5>
            </div>
            <div class="col text-center">
                <h3 class="fw-bold text-info">
                    0
                </h3>
                <h5 class="fw-bold">Withdrawal requests</h5>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="row">
        <div class="col-md-12 p-3">
            <h4 class="fw-bolder">Loss ranking</h4>
        </div>
        <div class="col-md-12 card card-body table-responsive table-responsive-sm">
            <table class="table table-hover table-sm">
                <caption>
                    List of users
                </caption>
                <thead class="bg-dark report-white-font">
                    <tr>
                        <th scope="col">Login</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Profit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>542331</td>
                        <td>Hasnat</td>
                        <td>saimun</td>
                        <td>10%</td>
                    </tr>
                    <tr>
                        <td>542331</td>
                        <td>Hasnat</td>
                        <td>saimun</td>
                        <td>10%</td>
                    </tr>
                    <tr>
                        <td>542331</td>
                        <td>Hasnat</td>
                        <td>saimun</td>
                        <td>10%</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="row px-3">
        <div class="col-md-12 p-3">
            <h4 class="fw-bolder">Profit ranking</h4>
        </div>
        <div class="col-md-12 card card-body table-responsive table-responsive-sm">
            <table class="table table-hover table-sm">
                <caption>
                    List of users
                </caption>
                <thead class="bg-dark report-white-font">
                    <tr>
                        <th scope="col">Login</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Profit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>542331</td>
                        <td>Hasnat</td>
                        <td>saimun</td>
                        <td>10%</td>
                    </tr>
                    <tr>
                        <td>542331</td>
                        <td>Hasnat</td>
                        <td>saimun</td>
                        <td>10%</td>
                    </tr>
                    <tr>
                        <td>542331</td>
                        <td>Hasnat</td>
                        <td>saimun</td>
                        <td>10%</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="row">
        <div class="col-md-12 p-3">
            <h4 class="fw-bolder">Volume ranking</h4>
        </div>
        <div class="col-md-12 card card-body table-responsive table-responsive-sm">
            <table class="table table-hover table-sm">
                <caption>
                    List of users
                </caption>
                <thead class="bg-dark report-white-font">
                    <tr>
                        <th scope="col">Login</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Volume</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>542331</td>
                        <td>Hasnat</td>
                        <td>saimun</td>
                        <td>10%</td>
                    </tr>
                    <tr>
                        <td>542331</td>
                        <td>Hasnat</td>
                        <td>saimun</td>
                        <td>10%</td>
                    </tr>
                    <tr>
                        <td>542331</td>
                        <td>Hasnat</td>
                        <td>saimun</td>
                        <td>10%</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="row">
        <div class="col-md-12 p-3">
            <h4 class="fw-bolder">Symbol ranking</h4>
        </div>
        <div class="col-md-12 card card-body table-responsive table-responsive-sm">
            <table class="table table-hover table-sm">
                <caption>
                    List of users
                </caption>
                <thead class="bg-dark report-white-font">
                    <tr>
                        <th>Symbol</th>
                        <th>Volume</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>542331</td>
                        <td>10%</td>
                    </tr>
                    <tr>
                        <td>542331</td>
                        <td>10%</td>
                    </tr>
                    <tr>
                        <td>542331</td>
                        <td>10%</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="row px-3">
        <div class="col-md-12 p-3">
            <h4 class="fw-bolder">Balance ranking</h4>
        </div>
        <div class="col-md-12 card card-body table-responsive table-responsive-sm">
            <table class="table table-hover table-sm">
                <caption>
                    List of users
                </caption>
                <thead class="bg-dark report-white-font">
                    <tr>
                        <th scope="col">Login</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Balance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>542331</td>
                        <td>Hasnat</td>
                        <td>saimun</td>
                        <td>10%</td>
                    </tr>
                    <tr>
                        <td>542331</td>
                        <td>Hasnat</td>
                        <td>saimun</td>
                        <td>10%</td>
                    </tr>
                    <tr>
                        <td>542331</td>
                        <td>Hasnat</td>
                        <td>saimun</td>
                        <td>10%</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="row">
        <div class="col-md-12 p-3">
            <h4 class="fw-bolder">Net deposit ranking</h4>
        </div>
        <div class="col-md-12 card card-body table-responsive table-responsive-sm">
            <table class="table table-hover table-sm">
                <caption>
                    List of users
                </caption>
                <thead class="bg-dark report-white-font">
                    <tr>
                        <th scope="col">Login</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Net diposited</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>542331</td>
                        <td>Hasnat</td>
                        <td>saimun</td>
                        <td>10%</td>
                    </tr>
                    <tr>
                        <td>542331</td>
                        <td>Hasnat</td>
                        <td>saimun</td>
                        <td>10%</td>
                    </tr>
                    <tr>
                        <td>542331</td>
                        <td>Hasnat</td>
                        <td>saimun</td>
                        <td>10%</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
