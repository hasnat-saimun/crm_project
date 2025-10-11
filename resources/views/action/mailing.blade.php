@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-3">
        <div class="row">
            <div class="col-md-4 ">
                <h4 class="fw-bolder">Mailing</h4>
            </div>
            <div class="col-md-8">
                <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <form method="POST" class="form" action="">
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <input class="form-control border-right-0 border" type="search" placeholder="Enter Keyword" id="example-search-input" />
                        <div class="input-group-text bg-info"><i class="fa fa-search"></i></div>
                    </div>
                </div>
                <div class="col-md-6 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        <h6>Hide successful</h6>
                                    </label>
                                </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection 
@section('body')
<div class="card">
    <div class="col-md-12 table-responsive table-responsive-sm">
    <table class="table table-hover table-sm" id="mailingTable">
        <caption>List of users</caption>
        <form method="POST" class="form align-items-center" action="">
        <thead class="bg-dark report-white-font">
            <tr>
                <th>Created</th>
                <th>Recipient</th>
                <th>Subject</th>
                <th>Status</th>
            </tr>
        </thead>
        </form>
        <tbody >
            <tr>
                <td>12.10.2024</td>
                <td>hasnat@gmail.com</td>
                <td>hasnat</td>
                <td>smooth</td>
            </tr>
            <tr>
                <td>12.10.2024</td>
                <td>hasnat@gmail.com</td>
                <td>hasnat</td>
                <td>smooth</td>
            </tr>
            <tr>
                <td>12.10.2024</td>
                <td>hasnat@gmail.com</td>
                <td>hasnat</td>
                <td>smooth</td>
            </tr>
        </tbody>
    </table>
</div>
</div>
@endsection