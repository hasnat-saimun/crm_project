@extends('header') @section('header')
<div class="col-md-6 mt-4">
    <h3 class="fw-bolder text-uppercase">
        Offer Name
    </h3>
</div>

<div class="col-md-6">
    <ul class="nav-right">
        <li>
            <a href="{{route('clientProfile')}}">
                <i class="fa-duotone fa-solid fa-left-to-bracket" style="--fa-secondary-opacity: 1;"></i>
            </a>
        </li>
    </ul>
</div>
@endsection @section('body')
<div class="card">
    <form method="POST" class="form" action="">
        <div class="row">
            <div class="row mt-3">
                <div class="col-md-12">
                    <h5 class="fw-bolder">Offer details</h5>
                </div>
            </div>
            <div class="card-box">
                <div class="row mt-2">
                    <div class="col-md-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="" name="name" />
                    </div>
                    <div class="col-md-3">
                        <label for="currency " class="form-label">Currency </label>
                        <input type="text" class="form-control" id="currency" placeholder="" name="currency" />
                    </div>
                    <div class="col-md-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" placeholder="" name="description" />
                    </div>
                    <div class="col-md-3">
                        <label for="initialLeverage" class="form-label">Initial Leverage</label>
                        <input type="number" class="form-control" id="initialLeverage" placeholder="" name="initialLeverage" />
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-3">
                        <label for="system " class="form-label"> System </label>
                        <input type="text" class="form-control" id="system" placeholder="" name="system" />
                    </div>
                    <div class="col-md-3">
                        <label for="Branch  " class="form-label">Branch </label>
                        <input type="text" class="form-control" id="branch " placeholder="" name="branch " />
                    </div>
                    <div class="col-md-3">
                        <label for="operation " class="form-label">Operation </label>
                        <input type="text" class="form-control" id="operation" placeholder="" name="operation" />
                    </div>
                    <div class="col-md-3">
                        <label for="groupName" class="form-label">Group name</label>
                        <input type="text" class="form-control" id="groupName" placeholder="" name="groupName" />
                    </div>
                </div>
                <div class="row mt-2 align-items-center">
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" />
                            <label class="form-check-label" for="flexRadioDefault1">
                                Hidden
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" />
                            <label class="form-check-label" for="flexRadioDefault1">
                                Verification Required
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" />
                            <label class="form-check-label" for="flexRadioDefault1">
                               Defult offer for oAuth2
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3 mt-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" />
                            <label class="form-check-label" for="flexRadioDefault1">
                               MRT Pro
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="redirect" class="form-label">Redirect</label>
                        <input type="text" class="form-control" id="redirect" placeholder="" name="redirect" />
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <h5 class="fw-bolder">Trading account properties</h5>
                </div>
            </div>
            <div class="card-box">
                <div class="row mt-2">
                    <div class="col-md-4">
                        <label for="initialCredit" class="form-label">Initial credit</label>
                        <input type="text" class="form-control" id="initialCredit" placeholder="" name="initialCredit" />
                    </div>
                    <div class="col-md-4">
                        <label for="tradingAccountlimit" class="form-label">Trading Account limit</label>
                        <input type="text" class="form-control" id="tradingAccountlimit" placeholder="" name="tradingAccountlimit" />
                    </div>
                    <div class="col-md-4">
                        <label for="initialDeposit" class="form-label">Initial deposit</label>
                        <input type="text" class="form-control" id="initialDeposit" placeholder="" name="initialDeposit" />
                    </div>
                </div>
                <div class="row mt-2 py-4">
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" />
                            <label class="form-check-label" for="flexRadioDefault1">
                               Auto creat trading account
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" />
                            <label class="form-check-label" for="flexRadioDefault1">
                               Tranding account update blocked on trading system
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" />
                            <label class="form-check-label" for="flexRadioDefault1">
                               Demo
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" />
                            <label class="form-check-label" for="flexRadioDefault1">
                              Analytics
                            </label>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row py-5">
                    <div class="col-md-1">
                        <a href="">
                            <button type="button" class="btn btn-success">Edit</button>
                        </a>
                    </div>
                    <div class="col-md-1">
                        <a href="">
                            <button type="button" class="btn btn-success">Cancle</button>
                        </a>
                    </div>
                    <div class="col-md-1">
                        <a href="">
                            <button type="button" class="btn btn-success">Save</button>
                        </a>
                    </div>
                    <div class="col-md-1">
                        <a href="">
                            <button type="button" class="btn btn-success">Clear</button>
                        </a>
                    </div>
                </div>
        </div>
    </form>
</div>
@endsection
