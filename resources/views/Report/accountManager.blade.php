@extends('header') @section('header')

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-8 px-2">
                    <h4 class="fw-bolder">Account Managers Performance</h4>
                </div>
                <div class="col-md-2 px-2">
                    <a href="{{route('depositadd')}}"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
                </div>
                <div class="col-md-2">
                    <a href=""><i class="fa-duotone fa-solid fa-down-from-bracket fa-sm bg-danger rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-2 d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="button" class="btn btn-info text-uppercase btn-sm rounded">Reset</button>
        </div>
            <div class="col-md-2">
            <select id="roll" class="form-select">
                                <option value="islam">Rolse</option>
                                <option value="hindu">SUB_IB </option>
                                <option value="cristian">USER</option>
                                <option value="hindu">SUB_IB </option>
                                <option value="cristian">USER</option>
                            </select>
                            </div>
    </div>
@endsection 
@section('body')
<div class="card card-body">
    <div class="row">
        <div class="col-8 align-items-center">
            <form method="POST" class="form" action="">
                <div class="row ">
                    <div class="col-sm-4">
                        <label for="inputPassword" class="col-sm-12 col-form-label text-end">Date range :</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="birth" placeholder="" name="birth" />
                    </div>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="birth" placeholder="" name="birth" />
                    </div>
                    <div class="row mt-2 p-3 ">
                    <div class="col-sm-4 ">
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                            <label class="form-check-label" for="flexRadioDefault1">
                                Last day
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked />
                            <label class="form-check-label" for="flexRadioDefault2">
                                Last week
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked />
                            <label class="form-check-label" for="flexRadioDefault2">
                                Last month
                            </label>
                        </div>
                    </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="card">
    <div class="col-md-12 table-responsive table-responsive-sm">
    <table class="table table-hover table-sm ">
        <caption>List of users</caption>
        <form method="POST" class="form align-items-center" action="">
        <thead class="bg-dark report-white-font">
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
                <th>Role</th>
                <th>Lead</th>
                <th>Client</th>
                <th>Leads Converted</th>
                <th>Ratio[%]</th>
                <th>FTDs[USD]</th>
                <th>Daliy deposits value[USD]</th>
                <th>Daliy deposits</th>
                <th>Total deposits</th>
                <th>Total widthdraw</th>
                
            </tr>
        </thead>
        </form>
        <tbody >
            <tr>    
                <td>15484</td>
                <td><a href="" class="text-primary">hasnat@gmail.com</td>
                <td><a href="" class="text-primary">satndard</td>
                <td><a href="" class="text-primary">Test admin</a></td>
                <td>Done</td>
                <td>12.10.2024</td>
                <td>12.10.2024</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
            <tr>
                <td>15484</td>
                <td><a href="" class="text-primary">hasnat@gmail.com</td>
                <td><a href="" class="text-primary">satndard</td>
                <td><a href="" class="text-primary">Test admin</a></td>
                <td>Done</td>
                <td>12.10.2024</td>
                <td>12.10.2024</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>15484</td>
                <td><a href="" class="text-primary">hasnat@gmail.com</td>
                <td><a href="" class="text-primary">satndard</td>
                <td><a href="" class="text-primary">Test admin</a></td>
                <td>Done</td>
                <td>12.10.2024</td>
                <td>12.10.2024</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
</div>
@endsection





