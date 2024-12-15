@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-8">
                <h4 class="fw-bolder">Client logs</h4>
            </div>

            <div class="col-md-2">
                <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
            </div>
                <div class="col-md-2">
                    <a href=""><i class="fa-duotone fa-solid fa-down-from-bracket fa-sm bg-danger rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
                </div>
        </div>
    </div>
    <div class="col-md-6">
        <form method="POST" class="form" action="">
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <input class="form-control border-right-0 border" type="search" placeholder="Enter Keyword" id="example-search-input" />
                        <div class="input-group-text bg-info"><i class="fa fa-search"></i></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <input type="date" class="form-control" id="to" placeholder="" name="to" />
                </div>
                <div class="col-md-4">
                    <input type="date" class="form-control" id="form" placeholder="" name="form" />
                </div>
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
                <th>Creat</th>
                <th>Type</th>
                <th>Email Made</th>
                <th>Message</th>
                
            </tr>
        </thead>
        </form>
        <tbody >
            <tr> 
                <td><a href="{{route('viewClienlog')}}" class="text-primary">10.10.2024</a></td>   
                <td>15484</td>   
                <td><a href="" class="text-primary">Test admin</a></td>

            </tr>
            <tr>
            <td><a href="{{route('viewClienlog')}}" class="text-primary">10.10.2024</a></td>  
                <td><a href="" class="text-primary">satndard</td>                    <td><a href="{{route('clientProfile')}}" class="text-primary">hasnat@gmail.com</a></td>
                <td><a href="" class="text-primary">Test admin</a></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection