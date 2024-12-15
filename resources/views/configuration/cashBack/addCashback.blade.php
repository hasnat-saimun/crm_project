@extends('header') @section('header')
<div class="col-md-6 mt-4">
    <h3 class="fw-bolder text-uppercase">
        New cashback configuration creation
    </h3>
</div>
<div class="col-md-6">
    <ul class="nav-right">
        <li>
            <a href="{{route('cashBack')}}">
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
                    <h5 class="fw-bolder">Cashback config</h5>
                </div>
            </div>
            <div class="card-box">
                <div class="row mt-2">
                    <div class="col-md-3 mb-3">
                        <label for="cashName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="cashName" placeholder="" name="cashName" />
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cashbackType" class="form-label">Cashback type</label>
                        <select class="form-select" aria-label="Default select example" name="cashbackType" id="cashbackType">
                            <option value="per 100k$">per 100k$</option>
                            <option value="per lot">per lot</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="number" class="form-control" id="amount" placeholder="" name="amount" />
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="currency" class="form-label">Currency</label>
                        <input type="text" class="form-control" id="currency" placeholder="" name="currency" />
                    </div>
                    
                    <div class="col-md-3 mb-3">
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
                </div>
                <div class="row p-4">
                    <div class="d-grid gap-3 col-1">
                        <a href="{{route('cashBack')}}">
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
                            <button type="button" class="btn btn-danger">Edit</button>
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
