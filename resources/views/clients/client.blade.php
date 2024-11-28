@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-3">
        <div class="row">
            <div class="col-md-6 px-2">
                <h4 class="fw-bolder">Clients</h4>
            </div>
            <div class="col-md-3 px-2">
                <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
            </div>
            <div class="col-md-3 px-2">
                <a href="{{route('addclient')}}"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
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
                <a href=""><i class="fa-duotone fa-solid fa-arrow-up-from-bracket fa-sm bg-warning rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
            </div>
            <div class="col-md-2">
                <a href=""><i class="fa-duotone fa-solid fa-down-from-bracket fa-sm bg-danger rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
            </div>
            <div class="col-md-7 d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="button" class="btn btn-info text-uppercase btn-sm rounded">bulk operation</button>
            </div>
        </div>
    </div>
</div>
@endsection @section('body')
<div class="card">
    <div class="col-md-12 table-responsive table-responsive-sm">
        <table class="table table-hover table-sm">
            <caption>
                List of users
            </caption>
            <form method="POST" class="form align-items-center" action="">
                <thead class="bg-dark report-white-font">
                    <tr>
                        <th><input type="search" class="form-control" id="autoSizingInputGroup" placeholder="online" /></th>
                        <th><input type="search" class="form-control" id="autoSizingInputGroup" placeholder="Email" /></th>
                        <th><input class="form-control" type="search" placeholder="Name" id="Name" /></th>
                        <th><input class="form-control" type="search" placeholder="Surname " id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder=" Created" id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder="Last contact " id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder=" Status" id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder="Manager " id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder=" Branch" id="example-search-input" /></th>`
                        <th><input class="form-control" type="search" placeholder=" Affiliate" id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder=" Phone number" id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder=" Language" id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder=" Role" id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder=" Lead status" id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder=" Lead source" id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder=" Last online" id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder=" Free margin" id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder=" Equity" id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder=" Margin level" id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder=" Total deposits" id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder=" Total withdrawals" id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder=" Last deposit" id="example-search-input" /></th>
                        <th><input class="form-control" type="search" placeholder=" Last note" id="example-search-input" /></th`>
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
                                                <option value="">Online</option>
                                                <option value="">Email</option>
                                                <option value="">Name</option>
                                                <option value="">Surname</option>
                                                <option value="">Last contact</option>
                                                <option value="">Created</option>
                                                <option value="">Status</option>
                                                <option value="">Manager</option>
                                                <option value="">Affiliate</option>
                                                <option value="">Branch</option>
                                                <option value="">Country</option>
                                                <option value="">Phone number</option>
                                                <option value="">Language</option>
                                                <option value="">Role</option>
                                                <option value="">Lead status</option>
                                                <option value="">Lead source</option>
                                                <option value="">Last online</option>
                                                <option value="">Balance</option>
                                                <option value="">Free margin</option>
                                                <option value="">Equity</option>
                                                <option value="">Margin level</option>
                                                <option value="">Total deposits</option>
                                                <option value="">Total withdrawals</option>
                                                <option value="">Last deposit</option>
                                                <option value="">Last note</option>
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
                    <td>Acitv</td>
                    <td><a href="{{route('clientProfile')}}" class="text-primary">hasnat@gmail.com</a></td>
                    <td>hasnat</td>
                    <td>saimon</td>
                    <td>12.10.2024</td>
                    <td>25.12.2024</td>
                    <td>New</td>
                    <td>Tast admin</td>
                    <td>Admin</td>
                </tr>
                <tr>
                    <td>Dactive</td>
                    <td><a href="{{route('clientProfile')}}" class="text-primary">hasnat@gmail.com</a></td>
                    <td>shovo</td>
                    <td>12.10.2024</td>
                    <td>25.12.2024</td>
                    <td>New</td>
                    <td>Tast admin</td>
                    <td>Admin</td>
                    <td>Admin</td>
                </tr>
                <tr>
                    <td>Active</td>
                    <td><a href="{{route('clientProfile')}}" class="text-primary">hasnat@gmail.com</a></td>
                    <td>Mirza</td>
                    <td>sobuj</td>
                    <td>12.10.2024</td>
                    <td>25.12.2024</td>
                    <td>New</td>
                    <td>Tast admin</td>
                    <td>Admin</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
