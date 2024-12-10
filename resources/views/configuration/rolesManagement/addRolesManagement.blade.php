@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-5">
        <h4 class="fw-bolder">New role</h4>
    </div>
</div>

@endsection @section('body')
<div class="card card-box">
    <form method="POST" class="form" action="">
        <div class="row mt-3 align-items-center">
            <div class="col-4 mb-3">
                <label for="rolsName" class="form-label">Name</label>
                <input type="text" class="form-control" id="rolsName" placeholder="" name="rolsName" />
            </div>
        </div>
        <div class="card card-body">
            <div class="row">
                <div class="col-md-12 table-responsive table-responsive-sm">
                    <table class="table table-hover table-sm">
                        <caption>
                            List of users
                        </caption>
                        <thead class="bg-dark report-white-font">
                            <tr>
                                <th scope="col">Resource</th>
                                <th scope="col">Created</th>
                                <th scope="col">Modified</th>
                                <th>Create Permission</th>
                                <th>Read Permission</th>
                                <th>Update Permission</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>ACC_MANAGER_PERFORMANCE</td>
                                <td>10.10.2024</td>
                                <td>10.12.2024</td>
                                <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" /></td>
                                <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" /></td>
                                <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" /></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row card-body">
            <div class="mb-2 form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Do not show Email
                </label>
            </div>
            <div class="mb-2 form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Do not show Phone number
                </label>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-1">
                <a href="{{route('rolesManagement')}}" class="btn btn-success">Back</a>
            </div>
            <div class="col-1">
                <button type="submit" class="btn btn-info">Create</button>
            </div>
        </div>
    </form>
</div>

@endsection
