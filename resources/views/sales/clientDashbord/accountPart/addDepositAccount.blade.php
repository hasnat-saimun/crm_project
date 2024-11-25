@extends('header') @section('header')
<div class="col-md-6 mt-4">
    <h3 class="fw-bolder text-uppercase">
        Account holder gmail name
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
                    <h5 class="fw-bolder">Deposit funds</h5>
                </div>
            </div>
            <div class="card-box">
                <div class="row mt-2">
                    <div class="col-md-3">
                        <label for="mail" class="form-label">Trading account</label>
                        <input type="email" class="form-control" id="mail" placeholder="eamil@domain.com" name="mail" />
                    </div>
                    <div class="col-md-3">
                        <label for="payment" class="form-label">Payment Gateway </label>
                        <input type="text" class="form-control" id="payment" placeholder="" name="payment" />
                    </div>
                    <div class="col-md-3">
                        <label for="currency" class="form-label">Currency</label>
                        <input type="number" class="form-control" id="currency" placeholder="" name="currency" />
                    </div>
                    
                    <div class="col-md-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="number" class="form-control" id="amount" placeholder="" name="amount" />
                    </div>
                </div>

                <div class="row p-4">
                    <div class="d-grid gap-3 col-1">
                        <a href="{{route('clientProfile')}}">
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
                            <button type="button" class="btn btn-info">save</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
