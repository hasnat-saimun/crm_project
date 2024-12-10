@extends('header') @section('header')
<div class="col-md-6 mt-4">
    <h3 class="fw-bolder text-uppercase">
        Create new branch
    </h3>
</div>
<div class="col-md-6">
    <ul class="nav-right">
        <li>
            <a href="{{route('branchandUser')}}">
                <i class="fa-duotone fa-solid fa-left-to-bracket" style="--fa-secondary-opacity: 1;"></i>
            </a>
        </li>
    </ul>
</div>
@endsection @section('body')

<form method="POST" class="form" action="">
    <div class="row">
        <div class="card">
            <div class="row">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <h5 class="fw-bolder">Branch details</h5>
                    </div>
                </div>
                <div class="card-box">
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label for="Name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="Name" placeholder="" name="Name" />
                        </div>
                        <div class="col-md-3">
                            <label for="userMail" class="form-label">Email user</label>
                            <input type="email" class="form-control" id="userMail" placeholder="eamil@domain.com" name="userMail" />
                        </div>
                        <div class="col-md-3">
                            <label for="pass" class="form-label">Email Password</label>
                            <input type="password" class="form-control" id="pass" placeholder="......." name="pass" />
                        </div>
                        <div class="col-md-3">
                            <label for="mailHost" class="form-label">Email host</label>
                            <input type="text" class="form-control" id="mailHost" placeholder="" name="mailHost" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label for="mailPort" class="form-label">Email port</label>
                            <input type="text" class="form-control" id="mailPort" placeholder="" name="mailPort" />
                        </div>
                        <div class="col-md-3">
                            <label for="mtrUrl" class="form-label">Mtr Url</label>
                            <input type="text" class="form-control" id="mtrUrl" placeholder="" name="mtrUrl" />
                        </div>
                        <div class="col-md-3">
                            <label for="clientOfficeUrl" class="form-label">Client Office Url</label>
                            <input type="text" class="form-control" id="clientOfficeUrl" placeholder="" name="clientOfficeUrl" />
                        </div>
                        <div class="col-md-3">
                            <label for="mt4RealServerName" class="form-label">MT4 real server name</label>
                            <input type="text" class="form-control" id="mt4RealServerName" placeholder="" name="mt4RealServerName" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label for="mt4DemoServerName" class="form-label">MT4 demo server name</label>
                            <input type="text" class="form-control" id="mt4DemoServerName" placeholder="" name="mt4DemoServerName" />
                        </div>
                        <div class="col-md-3">
                            <label for="mt5RealServerName" class="form-label">MT5 real server name</label>
                            <input type="text" class="form-control" id="mt5RealServerName" placeholder="" name="mt5RealServerName" />
                        </div>
                        <div class="col-md-3">
                            <label for="mt5DemoServerName" class="form-label">MT5 demo server name</label>
                            <input type="text" class="form-control" id="mt5DemoServerName" placeholder="" name="mt5DemoServerName" />
                        </div>
                    </div>
                </div>
                <div class="card-box">
                    <div class="row my-5">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" />
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Email TLS
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault2"  />
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Email SSL
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault2"  />
                                <label class="form-check-label" for="flexRadioDefault2">
                                    User SumSub for KYC verification
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card py-3">
            <div class="col-md-3">
                <label for="actype" class="form-label">Payment gateways</label>
                <select id="actype" class="form-select">
                    <option value="Internal Transfer">Internal Transfer </option>
                    <option value="Ethereum">Ethereum </option>
                    <option value="Bitcoin">Bitcoin</option>
                    <option value="Credit card/BTC">Credit card/BTC</option>
                    <option value="Manual Payment">Manual Payment</option>
                    <option value="USDT TRC-20">USDT TRC-20</option>
                    <option value="Bank Payment">Bank Payment</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row p-4">
        <div class="d-grid gap-3 col-1">
            <a href="{{route('branchandUser')}}">
                <button type="button" class="btn btn-success">Back</button>
            </a>
        </div>
        <div class="d-grid gap-2 col-1">
            <a href="">
                <button type="button" class="btn btn-danger">Clear</button>
            </a>
        </div>
        <div class="d-grid gap-2 col-1">
            <a href="">
                <button type="button" class="btn btn-info">Create</button>
            </a>
        </div>
    </div>
</form>
@endsection
