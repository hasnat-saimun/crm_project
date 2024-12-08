@extends('header') @section('header')
<div class="col-md-6 mt-4">
    <h3 class="fw-bolder text-uppercase">
       Email Name
    </h3>
</div>
<div class="col-md-6">
    <ul class="nav-right">
        <li>
            <a href="{{route('tradingAc')}}">
                <i class="fa-duotone fa-solid fa-left-to-bracket" style="--fa-secondary-opacity: 1;"></i>
            </a>
        </li>
    </ul>
</div>
@endsection @section('body')

<form method="POST" class="form" action="">
    <div class="row">
        <div class="card">
            <div class="row mt-3">
                <div class="col-md-12">
                    <h5 class="fw-bolder">Branch details</h5>
                </div>
            </div>
            <div class="card-box">
                <div class="row mt-2">
                    <div class="col-md-3 mb-2">
                        <label for="uuid" class="form-label">UUID</label>
                        <input type="text" class="form-control" id="uuid" placeholder="" name="uuid" />
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="created" class="form-label">Created</label>
                        <input type="text" class="form-control" id="created" placeholder="" name="created" />
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="modified" class="form-label">Modified</label>
                        <input type="text" class="form-control" id="modified" placeholder="" name="modified" />
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="tradingAcc" class="form-label">Trading Account</label>
                        <input type="number" class="form-control" id="tradingAcc" placeholder="" name="tradingAcc" />
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="operation" class="form-label">Operation</label>
                        <input type="text" class="form-control" id="operation" placeholder="" name="operation" />
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="admin" class="form-label">Admin</label>
                        <input type="text" class="form-control" id="admin" placeholder="" name="admin" />
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="client" class="form-label">Client</label>
                        <input type="text" class="form-control" id="client" placeholder="" name="client" />
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="oldTradingAcc" class="form-label">Old Trading Account Login</label>
                        <input type="text" class="form-control" id="oldTradingAcc" placeholder="" name="oldTradingAcc" />
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="offer" class="form-label">Offer</label>
                        <input type="text" class="form-control" id="offer" placeholder="" name="offer" />
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="branch" class="form-label">Branch</label>
                        <input type="text" class="form-control" id="branch" placeholder="" name="branch" />
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="commission" class="form-label">Commission</label>
                        <input type="text" class="form-control" id="commission" placeholder="" name="commission" />
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="status" class="form-label">Status</label>
                        <input type="text" class="form-control" id="status" placeholder="" name="status" />
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="createdId" class="form-label">Created in Phase</label>
                        <input type="text" class="form-control" id="createdId" placeholder="" name="createdId" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card p-2">
        <div class="row">
            <div class="col-md-6 mb-2">
                <label for="remark" class="form-label">Remark</label>
                <textarea class="form-control" id="remark" name="remark" rows="6"></textarea>
            </div>
            <div class="col-6" mb-2>
                <label for="errors" class="form-label">Errors</label>
                <textarea class="form-control" id="errors" name="errors" rows="6"></textarea>
            </div>
        </div>
        <div class="card-box">
    <div class="row">
        <div class="col-md-12">
            <div class="row p-4">
                <div class="d-grid gap-2 col-1">
                    <a href="">
                        <button type="button" class="btn btn-danger">Edit</button>
                    </a>
                </div>
                <div class="d-grid gap-3 col-1">
                    <a href="{{route('tradingAc')}}">
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
</div>
    </div>
</form>
@endsection


