
@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-5">
        <div class="row">
            <div class="col-md-4 ">
                <h4 class="fw-bolder">KYC</h4>
            </div>
        </div>
    </div>
</div>
@endsection 
@section('body')
<div class="row mt-5 align-items-center mt-4 query-box">
    <div class="col-8 mx-auto">
        <nav class="p-2 card card-body border-0 query-box-heading shadow">
            <div class="nav justify-content-center nav-underline" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">General Config</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Branch Config</button>
                
            </div>
        </nav>
    </div>
    <div class="col-11 mx-auto tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
        <div class="card-body">
        <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="row p-3">
                    <div class="col-md-6 ">
                        <h4 class="fw-bolder">Real register fields</h4>
                    </div>
                    
                    <div class="col-md-12 table-responsive table-responsive-sm">

                        <table class="table table-hover table-sm ">
                        <caption>List of users</caption>
                            <thead class="bg-dark report-white-font">
                                <tr>
                                    <th scope="col">Type</th>
                                    <th scope="col">Active</th>
                                    <th scope="col">Required</th>
                                </tr>
                            </thead>
                            <tbody >
                                <tr>
                                <td>500 USD</td>
                                <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                                <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="row p-3">
                    <div class="col-md-12  ">
                        <h4 class="fw-bolder">Demo register fields</h4>
                    </div>
                    <div class="col-md-12 table-responsive table-responsive-sm">

                        <table class="table table-hover table-sm ">
                            <caption>List of users</caption>
                            <thead class="bg-dark report-white-font">
                                <tr>
                                    <th scope="col">Type</th>
                                    <th scope="col">Active</th>
                                    <th scope="col">Required</th>
                                </tr>
                            </thead>
                            <tbody >
                            <tr>
                                <td>500 USD</td>
                                <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                                <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
            This is some placeholder content the Home tab's associated content. Clicking another tab will toggle the visibility content visibility and styling.
        </div>
    </div>
</div>
@endsection