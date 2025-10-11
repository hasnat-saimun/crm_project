@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-3">
        <div class="row">
            <div class="col-md-6 px-2">
                <h4 class="fw-bolder">Deposits</h4>
            </div>

            <div class="col-md-3 px-2">
                <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
            </div>
            <div class="col-md-3 px-2">
                <a href="{{route('depositadd')}}"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
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
    <div class="col-md-3">
        <div class="row">
            <div class="col-md-2">
                <a href=""><i class="fa-duotone fa-solid fa-down-from-bracket fa-sm bg-danger rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection @section('body')
<div class="card">
    <div class="col-md-12 table-responsive table-responsive-sm">
        <table class="table table-hover table-sm" id="depositsTable">
            <caption>
                List of deposits
            </caption>
            <form method="POST" class="form align-items-center" action="">
                <thead class="bg-dark report-white-font">
                    <tr>
                        <th><input type="search" class="form-control" id="autoSizingInputGroup" placeholder="Trading Account" /></th>
                        <th><input type="search" class="form-control" id="autoSizingInputGroup" placeholder="Email" /></th>

                        <th><input class="form-control" type="search" placeholder="Name" id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder="Surname" id="example-search-input" /></th>
                        <th>Amount</th>
                        <th>Net Amount</th>
                        <th><input class="form-control" type="search" placeholder=" Created" id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder="Currency" id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder=" Status" id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder="Payment Getway" id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder="Payment Id" id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder="Last contact" id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder="Offer" id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder="Crypto address" id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder="Reference coad" id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder="Lead source" id="example-search-input" /></th>
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
                                                <option value="">Account Manager</option>
                                                <option value="">Last contact</option>
                                                <option value="">Name</option>
                                                <option value="">Surname</option>
                                                <option value="">Trading account</option>
                                                <option value="">Email</option>
                                                <option value="">Created</option>
                                                <option value="">Status</option>
                                                <option value="">Offer</option>
                                                <option value="">Amount</option>
                                                <option value="">Net amount</option>
                                                <option value="">Currency</option>
                                                <option value="">Payment gatway</option>
                                                <option value="">Crypto address</option>
                                                <option value="">Reference coad</option>
                                                <option value="">Payment id</option>
                                                <option value="">Lead source</option>
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
            <tbody>
                <tr>
                    <td>4563768</td>
                    <td><a href="{{route('clientProfile')}}" class="text-primary">hasnat@gmail.com</a></td>
                    <td>Hasnat</td>
                    <td>Saimun</td>
                    <td>57575</td>
                    <td>75676</td>
                    <td>10.10.2001</td>
                    <td>USDT</td>
                    <td>Admin</td>
                    <td><a href="{{route('DipoPaymentGte')}}" class="text-primary">Bank Payment</a></td>
                    <td>85673443647</td>
                    <td>10.102024</td>
                    <td>Standerd</td>
                    <td>Bainance</td>
                    <td>15986542368</td>
                    <td>Ben</td>
                    <td>
                        <a href="{{route('detailesDeposit')}}"><button type="button" class="btn btn-info btn-sm">Detailes</button></a>
                    </td>
                </tr>
                <tr>
                    <td>4563768</td>
                    <td><a href="{{route('clientProfile')}}" class="text-primary">hasnat@gmail.com</a></td>
                    <td>Hasnat</td>
                    <td>Saimun</td>
                    <td>57575</td>
                    <td>75676</td>
                    <td>10.10.2001</td>
                    <td>USDT</td>
                    <td>Admin</td>
                    <td><a href="{{route('DipoPaymentGte')}}" class="text-primary">Bank Payment</a></td>
                    <td>85673443647</td>
                    <td>10.102024</td>
                    <td>Standerd</td>
                    <td>Bainance</td>
                    <td>15986542368</td>
                    <td>Ben</td>
                    <td>
                        <a href="{{route('detailesDeposit')}}"><button type="button" class="btn btn-info btn-sm">Detailes</button></a>
                    </td>
                </tr>
                <tr>
                    <td>4563768</td>
                    <td><a href="{{route('clientProfile')}}" class="text-primary">hasnat@gmail.com</a></td>
                    <td>Hasnat</td>
                    <td>Saimun</td>
                    <td>57575</td>
                    <td>75676</td>
                    <td>10.10.2001</td>
                    <td>USDT</td>
                    <td>Admin</td>
                    <td><a href="{{route('DipoPaymentGte')}}" class="text-primary">Bank Payment</a></td>
                    <td>85673443647</td>
                    <td>10.102024</td>
                    <td>Standerd</td>
                    <td>Bainance</td>
                    <td>15986542368</td>
                    <td>Ben</td>
                    <td>
                        <a href="{{route('detailesDeposit')}}"><button type="button" class="btn btn-info btn-sm">Detailes</button></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
