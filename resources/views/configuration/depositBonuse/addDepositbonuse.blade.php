@extends('header') @section('header')
<div class="col-md-6 mt-4">
    <h3 class="fw-bolder text-uppercase">
    New bonus rule creation
    </h3>
</div>
<div class="col-md-6">
    <ul class="nav-right">
        <li>
            <a href="{{route('depositBonuse')}}">
                <i class="fa-duotone fa-solid fa-left-to-bracket" style="--fa-secondary-opacity: 1;"></i>
            </a>
        </li>
    </ul>
</div>
@endsection @section('body')
<div class="card">
    <form method="POST" class="form" action="">
        <div class="row">
            <div class="card-box">
                <div class="row mt-2">
                    <div class="col-6">
                        <div class="col-md-8 mb-3">
                            <label for="depoBonusName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="depoBonusName" placeholder="" name="depoBonusName" />
                        </div>
                        <div class="col-md-8 mb-3">
                            <label for="depoBonusType" class="form-label">Deposit bonus type </label>
                            

                            <select class="selectpicker" multiple aria-label="size 3 select example" id="depoBonusType" name="depoBonusType">
                                <option value="EVERY_DEPOSIT">EVERY_DEPOSIT</option>
                                <option value="FIRST_TIME_DEPOSIT">FIRST_TIME_DEPOSIT</option>
                            </select>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label for="offer" class="form-label">Offers</label>
                            <select class="selectpicker" multiple aria-label="size 3 select example" id="offer" name="offer">
                                <option value="LGNFX IB">LGNFX IB</option>
                                <option value="LGNFX Sub IB">LGNFX Sub IB</option>
                                <option value="Vission IB">Vission IB</option>
                                <option value="Vission Sub IB">Vission Sub IB</option>
                                <option value="Golden">Golden</option>
                                <option value="IB Account">IB Account</option>
                                <option value="Sub IB">Sub IB</option>
                                <option value="DEMO">DEMO</option>
                                <option value="DEMO ACCOUNT">DEMO ACCOUNT</option>
                                <option value="Google">Google</option>
                                <option value="Standard">Standard</option>
                                <option value="PREMIUM">PREMIUM</option>
                                <option value="STANDARD">STANDARD</option>
                                <option value="premium">premium</option>
                                <option value="Starter">Starter</option>
                                <option value="standard">standard</option>
                                <option value="sub IB">sub IB</option>
                                <option value="ib account">ib account</option>
                                <option value="Demo">Demo</option>
                                <option value="Premium">Premium</option>
                                <option value="Demo Account">Demo Account</option>
                            </select>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label for="expirationTime" class="form-label">Funds expiration time in days</label>
                            <input type="text" class="form-control" id="expirationTime" placeholder="" name="expirationTime" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow">
                            <div class="row p-3">
                                <div class="col-md-12 table-responsive table-responsive-sm">
                                    <table class="table table-hover table-sm">
                                        <caption>
                                            List of users
                                        </caption>
                                        <thead class="bg-dark report-white-font">
                                            <tr>
                                                <th scope="col">From Amount</th>
                                                <th scope="col">To Amount</th>
                                                <th>Bonus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="bonustype" class="form-label">From amount (inclusive) </label>
                                <input type="inclusive" class="form-control" id="inclusive" placeholder="" name="inclusive" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="bonustype" class="form-label">Bonus type</label>
                                <select class="form-select" aria-label="Default select example" name="bonustype" id="bonustype">
                                    <option value="FIXED">FIXED</option>
                                    <option value="PERCENTAGE">PERCENTAGE</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="bonus" class="form-label">Bonus</label>
                                <input type="text" class="form-control" id="bonus" placeholder="" name="bonus" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="exclusive" class="form-label">To amount (exclusive)</label>
                                <input type="text" class="form-control" id="exclusive" placeholder="" name="exclusive" />
                            </div>
                            <div class="col-md-3 mt-3">
                                <a href=""><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p-4">
                    <div class="d-grid gap-3 col-1">
                        <a href="{{route('depositBonuse')}}">
                            <button type="button" class="btn btn-success">Back</button>
                        </a>
                    </div>
                    <div class="d-grid gap-2 col-1">
                        <a href="">
                            <button type="button" class="btn btn-danger">Edit</button>
                        </a>
                    </div>
                    <div class="d-grid gap-2 col-1">
                        <a href="">
                            <button type="button" class="btn btn-danger">Clear</button>
                        </a>
                    </div>
                    <div class="d-grid gap-2 col-1">
                        <a href="">
                            <button type="button" class="btn btn-info">save</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
