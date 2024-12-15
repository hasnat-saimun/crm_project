@extends('header') @section('header')
<div class="col-md-6 mt-4">
    <h3 class="fw-bolder text-uppercase">
        view Audit log
    </h3>
</div>
<div class="col-md-6">
    <ul class="nav-right">
        <li>
            <a href="{{route('crmAudit')}}">
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
                        <label for="operation" class="form-label">Operation</label>
                        <input type="text" class="form-control" id="operation" placeholder="" name="operation" />
                    </div>
                    <div class="col-md-3">
                        <label for="resource" class="form-label">Resource</label>
                        <input type="text" class="form-control" id="resource" placeholder="" name="resource" />
                    </div>
                    <div class="col-md-3">
                        <label for="operationMade" class="form-label">Operation Made</label>
                        <input type="text" class="form-control" id="operationMade" placeholder="" name="operationMade" />
                    </div>
                    <div class="col-md-3">
                        <label for="accountEmail" class="form-label">Account email</label>
                        <input type="text" class="form-control" id="accountEmail" placeholder="" name="accountEmail" />
                    </div>
                    <div class="mb-3">
                        <label for="mssage" class="form-label">Message</label>
                        <textarea class="form-control" id="mssage" name="mssage"rows="3"></textarea>
                    </div>
                </div>
                <div class="row p-4">
                    <div class="d-grid gap-3 col-1">
                        <a href="{{route('crmAudit')}}">
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
