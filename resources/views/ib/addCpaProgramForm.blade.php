@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-2">
        <h4 class="fw-bolder">FTD Bonus</h4>
    </div>
</div>

@endsection @section('body')
<div class="card card-box">
    <div class="row mt-3">
        <div class="col-4">
            <form method="POST" class="form" action="">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="" name="name" />
                </div>
                <div class="mb-3">
                    <label for="commission" class="form-label">Commission</label>
                    <select id="commission" name="commission" class="form-select">
                        <option value="islam">LGNFX IB</option>
                    </select>
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        <label class="form-check-label" for="flexCheckDefault">
                            Calculate CPA multiple Trading Account
                        </label>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-8">
            <div class="card card-body">
                <div class="col-md-12 table-responsive table-responsive-sm">
                    <table class="table table-hover table-sm">
                        <caption>
                            List of users
                        </caption>
                        <form method="POST" class="form align-items-center" action="">
                            <thead class="bg-dark report-white-font">
                                <tr>
                                    <th>From ammount</th>
                                    <th>To ammount</th>
                                    <th>Bonus</th>
                                </tr>
                            </thead>
                        </form>
                        <tbody>
                            <tr>
                                <td>15484</td>
                                <td>15484</td>
                                <td>15484</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row card-box">
                <div class="col-md-6 mb-2">
                    <label for="comName" class="form-label">Compnay name</label>
                    <input type="text" class="form-control" id="comName" placeholder="" name="comName" />
                </div>
                <div class="col-md-6 mb-2">
                    <label for="address" class="form-label">Company address</label>
                    <input type="text" class="form-control" id="address" placeholder="" name="address" />
                </div>
                <div class="col-md-6 mb-2">
                    <label for="acNum" class="form-label">Bank account number</label>
                    <select id="commission" name="commission" class="form-select">
                        <option value="islam">FIXED</option>
                        <option value="islam">PERCENTAGE</option>
                    </select>
                </div>
                <div class="col-md-6 mb-2">
                    <label for="acNum" class="form-label">Bank account number</label>
                    <input type="text" class="form-control" id="acNum" placeholder="" name="acNum" />
                </div>
                <div class="col-md-2 ">
                <a href="#"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
            </div>
            </div>
        </div>
    </div>
    
    <div class="col-1 my-4">
                <button type="button" class="btn btn-info">Save</button>
        </div>
</div>

@endsection