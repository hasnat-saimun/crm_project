@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-5">
        <div class="row">
            <div class="col-md-6 ">
                <h4 class="fw-bolder">Trading Accounts</h4>
            </div>

            <div class="col-md-3">
                <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
            </div>
            <div class="col-md-3 ">
                <a href="{{route('addTrading')}}"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
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
                <th>Id</th>
                <th>Email</th>
                <th>Created</th>
                <th>Offre</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Deposit</th>
                <th>Widhtdraw</th>
                <th>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#add">
                        <i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="addLabel">Select columns to show</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <select class="selectpicker" multiple aria-label="size 3 select example">
                                        <option value="">Id</option>
                                        <option value="">Created</option>
                                        <option value="">Name</option>
                                        <option value="">Surname</option>
                                        <option value="">Email</option>
                                        <option value="">Offer</option>
                                        <option value="">Balance</option>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </th>
                
            </tr>
        </thead>
        </form>
        <tbody >
            <tr>
                <td><a href="{{route('tradingAccountDetailes')}}" class="text-primary">158644</a></td>
            <td><a href="{{route('clientProfile')}}" class="text-primary">hasnat@gmail.com</a></td>
            <td>12.10.2024</td>
            <td><a href="{{route('offerForm')}}" class="text-primary">standerd</a>  </td>
            <td>hasnat</td>
            <td>saimun</td>
            <td><a href="{{route('tradingDepo')}}"><i class=" fa-duotone fa-solid fa-up-to-bracket fa-flip-both fa-lg rounded p-3" style="--fa-primary-color: #05b9d9; --fa-secondary-color: #05b9d9; --fa-secondary-opacity: 1;"></i></a></td>
                <td><a href=" {{route('tradingWidth')}}"><i class="fa-duotone fa-solid fa-down-from-bracket fa-flip-vertical fa-lg rounded p-3" style="--fa-primary-color: #dc0404; --fa-secondary-color: #dc0404; --fa-secondary-opacity: 1;"></i></a>
            </tr>
            <tr>
                
            <td><a href="{{route('tradingAccountDetailes')}}" class="text-primary">158644</a></td>
                <td><a href="{{route('clientProfile')}}" class="text-primary">yousuf@gmail.com</a></td>
                <td>12.10.2024</td>
                <td><a href="{{route('offerForm')}}" class="text-primary">standerd</a>  </td>
            <td>hasnat</td>
            <td>saimun</td>
                
                <td><a href="{{route('tradingDepo')}}"><i class=" fa-duotone fa-solid fa-up-to-bracket fa-flip-both fa-lg rounded p-3" style="--fa-primary-color: #05b9d9; --fa-secondary-color: #05b9d9; --fa-secondary-opacity: 1;"></i></a></td>
                <td><a href="{{route('tradingWidth')}}"><i class="fa-duotone fa-solid fa-down-from-bracket fa-flip-vertical fa-lg rounded p-3" style="--fa-primary-color: #dc0404; --fa-secondary-color: #dc0404; --fa-secondary-opacity: 1;"></i></a>
            </tr>
            <tr>                
                <td><a href="{{route('tradingAccountDetailes')}}" class="text-primary">158644</a></td>
            <td><a href="{{route('clientProfile')}}" class="text-primary">mirza@gmail.com</a></td>
            <td>12.10.2024</td>
            <td><a href="{{route('offerForm')}}" class="text-primary">standerd</a>  </td>
            <td>hasnat</td>
            <td>saimun</td>
            <td><a href="{{route('tradingDepo')}}"><i class=" fa-duotone fa-solid fa-up-to-bracket fa-flip-both fa-lg rounded p-3" style="--fa-primary-color: #05b9d9; --fa-secondary-color: #05b9d9; --fa-secondary-opacity: 1;"></i></a></td>
                <td><a href="{{route('tradingWidth')}}"><i class="fa-duotone fa-solid fa-down-from-bracket fa-flip-vertical fa-lg rounded p-3" style="--fa-primary-color: #dc0404; --fa-secondary-color: #dc0404; --fa-secondary-opacity: 1;"></i></a>
            </tr>
        </tbody>
    </table>
</div>
</div>
@endsection