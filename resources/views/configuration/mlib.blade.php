@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-5">
        <div class="row">
            <div class="col-md-4 ">
                <h4 class="fw-bolder text-uppercase">mlib</h4>
            </div>
            <div class="col-md-2">
                <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
            </div>
            <div class="col-md-2 ">
                <a href="{{route('addTrading')}}"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-6 d-grid gap-2 d-md-flex ">
        <button type="button" class="btn btn-info text-uppercase btn-sm rounded">Add Configuration</button>
    </div>
</div>
@endsection 
@section('body')
<div class="card">
        <h4 class="fw-bolder text-uppercase text-red">There are currently no MLIB configurations</h4>
</div>
@endsection