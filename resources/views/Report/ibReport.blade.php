@extends('header') @section('header')

    <div class="row mt-4">
      <h4 class="fw-bolder">Lead source</h4>
    </div>
@endsection 
@section('body')
<div class="card card-body">
    <div class="row">
        <div class="col-8 mx-auto">
            <form method="POST" class="form" action="">
                <div class="row align-items-center ">
                    <div class="col-sm-2">
                        <label for="inputPassword" class="col-sm-12 col-form-label text-end">Date range :</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" id="birth" placeholder="" name="birth" />
                    </div>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" id="birth" placeholder="" name="birth" />
                    </div>
                    <div class="col-sm-4">
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault2" checked />
                                <label class="form-check-label" for="flexRadioDefault2">
                                   Send Daily Reports to IBs
                                </label>
                            </div>
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
                    <div class="row mt-2 p-3 ">
                        <div class="col-sm-4 ">
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" />
                                <label class="form-check-label" for="flexRadioDefault1">
                                    IB
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault2" checked />
                                <label class="form-check-label" for="flexRadioDefault2">
                                    SUB IB
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
                <th>Type</th>
                <th>Login</th>
                <th>Volume</th>
                <th>Commission</th>
                <th>Currency</th>
                <th>Subib account</th>
                <th>Clients</th>
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
            </tr>
        </tbody>
    </table>
</div>
</div>
@endsection





