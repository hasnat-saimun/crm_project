@extends('header') @section('header')

    <div class="row mt-4">
      <h4 class="fw-bolder">Cpa Report</h4>
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

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <h4 class="fw-bolder">IB Accounts</h4>
                </div>
                <div class="col-md-2">
                    <a href=""><i class="fa-duotone fa-solid fa-down-from-bracket fa-sm bg-danger rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-12 card table-responsive table-responsive-sm mt-2">
        <table class="table table-hover table-sm">
            <caption>
                List of users
            </caption>
            <form method="POST" class="form align-items-center " action="">
                <thead class="bg-dark report-white-font">
                    <tr>
                        <th>Login</th>
                        <th>Email</th>
                        <th>CPA configuration</th>
                        <th>Clients</th>
                        <th>Amount[USD]</th>
                    </tr>
                </thead>
            </form>
            <tbody>
                <tr>
                    <td>5511855</td>
                    <td>hasnat@gmail.com</td>
                    <td>USD</td>
                    <td>18181</td>
                    <td><a href="" class="text-primary">standerd</a></td>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <h4 class="fw-bolder">CPA Commission</h4>
                </div>
                <div class="col-md-2">
                    <a href=""><i class="fa-duotone fa-solid fa-down-from-bracket fa-sm bg-danger rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-12 card table-responsive table-responsive-sm mt-2">
        <table class="table table-hover table-sm">
            <caption>
                List of users
            </caption>
            <form method="POST" class="form align-items-center " action="">
                <thead class="bg-dark report-white-font">
                    <tr>
                        <th>Login</th>
                        <th>Email</th>
                        <th>Amount[USD]</th>
                        <th>Deposit Data</th>
                    </tr>
                </thead>
            </form>
            <tbody>
                <tr>
                    <td>5511855</td>
                    <td>hasnat@gmail.com</td>
                    <td>USD</td>
                    <td>18181</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection





