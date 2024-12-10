@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-5">
        <h4 class="fw-bolder">New banner creation</h4>
    </div>
</div>
@endsection 
@section('body')
<form method="POST" class="form" action="">
    <div class="card card-body">
        <div class="row">
            <div class="col-md-3">
                <label for="redirectUrl" class="form-label">Redirect url</label>
                <input type="text" class="form-control" id="redirectUrl" placeholder="" name="redirectUrl" />
            </div>
        </div>
        <div class="row mt-3">
                <div class="col-md-3 ">
                <label for="banner" class="form-label">Banner</label>
                <a href="#">
                    <div class="p-5 border text-center text-bg-secondary ">
                        <i class="fa-regular fa-download fa-2xl"></i>
                        <p>Drag & drop or click to upload</p>
                    </div>
                </a>
                </div>
        </div>
    </div>
        <div class="row my-4">
            <div class="col-1">
                <a href="{{route('banner')}}" class="btn btn-success">Back</a>
            </div>
            <div class="col-1">
                <button type="submit" class="btn btn-info">Save</button>
            </div>
        </div>
</form>
@endsection