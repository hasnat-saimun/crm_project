@extends('header') @section('header')
<div class="col-md-6 mt-4">
    <h3 class="fw-bolder text-uppercase">
        Lead status create
    </h3>
</div>
<div class="col-md-6">
    <ul class="nav-right">
        <li>
            <a href="{{route('leadStatus')}}">
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
                    <h5 class="fw-bolder">Lead status config</h5>
                </div>
            </div>
            <div class="card-box">
                <div class="row mt-2">
                    <div class="col-md-3">
                        <label for="leadName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="leadName" placeholder="" name="leadName" />
                    </div>
                    <div class="col-md-3">
                        <label for="leadStage" class="form-label">Lead stage</label>
                        <select class="form-select" aria-label="Default select example">
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="p-2 my-4form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Enabled
                        </label>
                    </div>
                </div>
                <div class="row p-4">
                    <div class="d-grid gap-3 col-1">
                        <a href="{{route('leadStatus')}}">
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
