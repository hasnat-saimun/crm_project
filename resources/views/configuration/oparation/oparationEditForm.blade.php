@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-5">
        <h4 class="fw-bolder">Name data</h4>
    </div>
</div>

@endsection @section('body')
<div class="card card-box">
    <form method="POST" class="form" action="">
        <div class="row mt-3 align-items-center">
            <div class="col-4 mb-3">
                <label for="branch" class="form-label">Branch</label>
                <input type="text" class="form-control" id="branch" placeholder="" name="branch" />
            </div>
            <div class="col-4 mb-3">
                <label for="commission" class="form-label">Commission</label>
                <select id="commission" name="commission" class="form-select">
                    <option value="islam">LGNFX IB</option>
                </select>
            </div>
            <div class="col-4 mb-3">
                <div class="form-check mt-4">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">
                        Calculate CPA multiple Trading Account
                    </label>
                </div>
            </div>
            <div class="col-1">
                <a href="{{route('oparation')}}" class="btn btn-success">Back</a>
            </div>
            <div class="col-1 my-4">
                <button type="submit" class="btn btn-info">Save</button>
            </div>
        </div>
    </form>
</div>

<div class="card card-box">
    <div class="row mt-4 p-2">
        <div class="col-md-3">
            <h5>Email notifications</h5>
        </div>
        <div class="col-md-1">
            <a href="{{route('emailNotification')}}"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 table-responsive table-responsive-sm">
            <table class="table table-hover table-sm">
                <caption>
                    List of users
                </caption>
                <thead class="bg-dark report-white-font">
                    <tr>
                        <th>Name</th>
                        <th>Client</th>
                        <th>Admin</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>One time login</td>
                        <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" /></td>
                        <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" /></td>
                        <td>active</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
