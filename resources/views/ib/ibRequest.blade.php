@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-2">
        <h4 class="fw-bolder">IB Requests</h4>
    </div>
    <div class="col-md-1">
        <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
    </div>
    <div class="col-md-3">
        <form method="POST" class="form" action="">
            <div class="input-group">
                <input class="form-control border-right-0 border" type="search" placeholder="Enter Keyword" id="example-search-input" />
                <div class="input-group-text bg-info"><i class="fa fa-search"></i></div>
            </div>
        </form>
    </div>
</div>

@endsection 
@section('body')
<div class="card">
    <div class="col-md-12 table-responsive table-responsive-sm">
    <table class="table table-hover table-sm ">
        <caption>List of users</caption>
        <form method="POST" class="form align-items-center" action="">
        <thead class="bg-dark report-white-font">
            <tr>
                <th>Trading Account</th>
                <th>Account</th>
                <th>offer</th>
                <th>Branch</th>
                <th>Status</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Action to user</th>
                
            </tr>
        </thead>
        </form>
        <tbody >
            <tr>    
                <td>15484</td>
                <td><a href="{{route('clientProfile')}}" class="text-primary">hasnat@gmail.com</a></td>
                
            <td><a href="{{route('offerForm')}}" class="text-primary">standerd</a>  </td>
                <td><a href="{{route('branchEditform')}}" class="text-primary">Test admin</a></td>
                <td>Done</td>
                <td>12.10.2024</td>
                <td>12.10.2024</td>
                <td>
                    <div class="row">
                        <div class="col-md-6 px-2">
                        <button type="button" class="btn btn-info text-uppercase btn-sm rounded px-2">Accpect</button>
                        </div>
                        <div class="col-md-6 px-2">
                            <button type="button" class="btn btn-danger text-uppercase btn-sm rounded px-2">Reject</button>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>15484</td>
                <td><a href="{{route('clientProfile')}}" class="text-primary">hasnat@gmail.com</a></td>
                
            <td><a href="{{route('offerForm')}}" class="text-primary">standerd</a>  </td>
                <td><a href="{{route('branchEditform')}}" class="text-primary">Test admin</a></td>
                <td>Done</td>
                <td>12.10.2024</td>
                <td>12.10.2024</td>
                <td>
                    <div class="row">
                        <div class="col-md-6 px-2">
                        <button type="button" class="btn btn-info text-uppercase btn-sm rounded px-2">Accpect</button>
                        </div>
                        <div class="col-md-6 px-2">
                            <button type="button" class="btn btn-danger text-uppercase btn-sm rounded px-2">Reject</button>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>15484</td>
                <td><a href="{{route('clientProfile')}}" class="text-primary">hasnat@gmail.com</a></td>
                
            <td><a href="{{route('offerForm')}}" class="text-primary">standerd</a>  </td>
                <td><a href="{{route('branchEditform')}}" class="text-primary">Test admin</a></td>
                <td>Done</td>
                <td>12.10.2024</td>
                <td>12.10.2024</td>
                <td>
                    <div class="row">
                        <div class="col-md-6 px-2">
                        <button type="button" class="btn btn-info text-uppercase btn-sm rounded px-2">Accpect</button>
                        </div>
                        <div class="col-md-6 px-2">
                            <button type="button" class="btn btn-danger text-uppercase btn-sm rounded px-2">Reject</button>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>
@endsection