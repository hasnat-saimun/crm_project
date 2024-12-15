@extends('header') @section('header')
<div class="col-md-6 mt-4">
    <h3 class="fw-bolder text-uppercase">
        view Client log
    </h3>
</div>
<div class="col-md-6">
    <ul class="nav-right">
        <li>
            <a href="{{route('clientLog')}}">
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
                    <div class="col-md-3">
                        <label for="created" class="form-label">Created</label>
                        <input type="text" class="form-control" id="created" placeholder="" name="created" />
                    </div>
                    <div class="col-md-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" placeholder="" name="type" />
                    </div>
                    <div class="col-md-3">
                        <label for="account" class="form-label">Account</label>
                        <input type="text" class="form-control" id="account" placeholder="" name="account" />
                    </div>
                    <div class="col-md-3">
                        <label for="assignedEmail" class="form-label">Assigned email</label>
                        <input type="text" class="form-control" id="assignedEmail" placeholder="" name="assignedEmail" />
                    </div>
                    <div class="mb-3">
                        <label for="mssage" class="form-label">Message</label>
                        <textarea class="form-control" id="mssage" name="mssage"rows="3"></textarea>
                    </div>
                </div>
                <div class="row p-4">
                    <div class="d-grid gap-3 col-1">
                        <a href="{{route('clientLog')}}">
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
