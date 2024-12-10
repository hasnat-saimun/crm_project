@extends('header') @section('header')
<div class="col-md-6 mt-4">
    <h3 class="fw-bolder text-uppercase">
    New pool configuration
    </h3>
</div>
@endsection @section('body')
<div class="card">
    <form method="POST" class="form" action="">
        <div class="row">
            <div class="row mt-3">
                <div class="col-md-12">
                    <h5 class="fw-bolder">Pool configuration</h5>
                </div>
            </div>
            <div class="card-box">
                <div class="row mt-2">
                    <div class="col-md-3">
                        <label for="fullName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="fullName" placeholder="" name="fullName" />
                    </div>
                    <div class="col-md-3">
                        <label for="accManager" class="form-label">Account Manager</label>
                        <input type="text" class="form-control" id="accManager" placeholder="" name="accManager" />
                    </div>
                </div>
                <div class="row p-4">
                    <div class="d-grid gap-3 col-1">
                        <a href="{{route('poolManagement')}}">
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
