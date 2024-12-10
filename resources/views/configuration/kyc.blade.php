@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-5">
        <div class="row">
            <div class="col-md-4">
                <h4 class="fw-bolder">KYC</h4>
            </div>
        </div>
    </div>
</div>
@endsection @section('body')
<div class="row mt-5 align-items-center mt-4 query-box">
    <div class="col-8 mx-auto">
        <nav class="p-2 card card-body border-0 query-box-heading ">
            <div class="nav justify-content-center nav-underline" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">General Config</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Branch Config</button>
            </div>
        </nav>
    </div>
    <div class="col-11 mx-auto tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="row p-3">
                                <div class="col-md-6">
                                    <h4 class="fw-bolder">Real register fields</h4>
                                </div>

                                <div class="col-md-12 table-responsive table-responsive-sm">
                                    <table class="table table-hover table-sm">
                                        <caption>
                                            List of users
                                        </caption>
                                        <thead class="bg-dark report-white-font">
                                            <tr>
                                                <th scope="col">Type</th>
                                                <th scope="col">Active</th>
                                                <th scope="col">Required</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>500 USD</td>
                                                <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" /></td>
                                                <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" /></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="row p-3">
                                <div class="col-md-12">
                                    <h4 class="fw-bolder">Demo register fields</h4>
                                </div>
                                <div class="col-md-12 table-responsive table-responsive-sm">
                                    <table class="table table-hover table-sm">
                                        <caption>
                                            List of users
                                        </caption>
                                        <thead class="bg-dark report-white-font">
                                            <tr>
                                                <th scope="col">Type</th>
                                                <th scope="col">Active</th>
                                                <th scope="col">Required</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>500 USD</td>
                                                <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" /></td>
                                                <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" /></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card card-body">
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <h4 class="fw-bolder">Verification</h4>
                        </div>
                        <div class="col-2 form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            Enabled
                            </label>
                        </div>
                        <div class="col-12 form-check mt-2  ">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                            <label class="form-check-label" for="flexCheckDefault1">
                            Enabled Google Vision pre-check
                            </label>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-md-12 ">
                            <form method="POST" class="form" action="">
                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                        <div class="card card-body text-bg-light ">
                                            <div class="mb-3">
                                                <label for="fullName" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="fullName" placeholder="" name="fullName" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Description </label>
                                                <textarea class="form-control" id="description" rows="4"></textarea>
                                            </div>
                                            <div class=" form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                Requred
                                                </label>
                                            </div>
                                        </div>
                                    </div><div class="col-md-4 mb-2">
                                        <div class="card card-body text-bg-light ">
                                            <div class="mb-3">
                                                <label for="fullName" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="fullName" placeholder="" name="fullName" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Description </label>
                                                <textarea class="form-control" id="description" rows="4"></textarea>
                                            </div>
                                            <div class=" form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                Requred
                                                </label>
                                            </div>
                                        </div>
                                    </div><div class="col-md-4 mb-2">
                                        <div class="card card-body text-bg-light ">
                                            <div class="mb-3">
                                                <label for="fullName" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="fullName" placeholder="" name="fullName" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Description </label>
                                                <textarea class="form-control" id="description" rows="4"></textarea>
                                            </div>
                                            <div class=" form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                Requred
                                                </label>
                                            </div>
                                        </div>
                                    </div><div class="col-md-4 mb-2">
                                        <div class="card card-body text-bg-light ">
                                            <div class="mb-3">
                                                <label for="fullName" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="fullName" placeholder="" name="fullName" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Description </label>
                                                <textarea class="form-control" id="description" rows="4"></textarea>
                                            </div>
                                            <div class=" form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                Requred
                                                </label>
                                            </div>
                                        </div>
                                    </div><div class="col-md-4 mb-2">
                                        <div class="card card-body text-bg-light ">
                                            <div class="mb-3">
                                                <label for="fullName" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="fullName" placeholder="" name="fullName" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Description </label>
                                                <textarea class="form-control" id="description" rows="4"></textarea>
                                            </div>
                                            <div class=" form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                Requred
                                                </label>
                                            </div>
                                        </div>
                                    </div><div class="col-md-4 mb-2">
                                        <div class="card card-body text-bg-light ">
                                            <div class="mb-3">
                                                <label for="fullName" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="fullName" placeholder="" name="fullName" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Description </label>
                                                <textarea class="form-control" id="description" rows="4"></textarea>
                                            </div>
                                            <div class=" form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                Requred
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-4">
                                <div class="d-grid gap-3 col-1">
                                    <a href="{{route('branchandUser')}}">
                                        <button type="button" class="btn btn-success">Back</button>
                                    </a>
                                </div>
                                <div class="d-grid gap-2 col-1">
                                    <a href="">
                                        <button type="button" class="btn btn-danger">Edit</button>
                                    </a>
                                </div>
                                <div class="d-grid gap-2 col-1">
                                    <a href="">
                                        <button type="button" class="btn btn-danger">Clear</button>
                                    </a>
                                </div>
                                <div class="d-grid gap-2 col-1">
                                    <a href="">
                                        <button type="button" class="btn btn-info">Save</button>
                                    </a>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card card-body">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <h3 class="fw-bolder">Verify email</h3>
                        </div>
                        <div class="col-1 form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            Enabled
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card card-body">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <h3 class="fw-bolder">MIFID</h3>
                        </div>
                        <div class="col-1 form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            Enabled
                            </label>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
            <form method="POST" class="form" action="">
                <div class="card card-body">
                    <div class=" col-4 mb-3">
                        <label for="branch" class="form-label">Branch</label>
                        <select class="form-select" aria-label="Default select example">
                            <option value="Test Admin">Test Admin</option>
                        </select>
                    </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card ">
                                    <div class="row p-3">
                                        <div class="col-md-6">
                                            <h4 class="fw-bolder">Real register fields</h4>
                                        </div>

                                        <div class="col-md-12 table-responsive table-responsive-sm">
                                            <table class="table table-hover table-sm">
                                                <caption>
                                                    List of users
                                                </caption>
                                                <thead class="bg-dark report-white-font">
                                                    <tr>
                                                        <th scope="col">Type</th>
                                                        <th scope="col">Active</th>
                                                        <th scope="col">Required</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>500 USD</td>
                                                        <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" /></td>
                                                        <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" /></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="row p-3">
                                        <div class="col-md-12">
                                            <h4 class="fw-bolder">Demo register fields</h4>
                                        </div>
                                        <div class="col-md-12 table-responsive table-responsive-sm">
                                            <table class="table table-hover table-sm">
                                                <caption>
                                                    List of users
                                                </caption>
                                                <thead class="bg-dark report-white-font">
                                                    <tr>
                                                        <th scope="col">Type</th>
                                                        <th scope="col">Active</th>
                                                        <th scope="col">Required</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>500 USD</td>
                                                        <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" /></td>
                                                        <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" /></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
