@extends('header') @section('header')
<div class="col-md-6 mt-4">
    <h3 class="fw-bolder text-uppercase">
        Add Client
    </h3>
</div>
<div class="col-md-6">
    <ul class="nav-right">
        <li>
            <a href="{{route('branchandUser')}}">
                <i class="fa-duotone fa-solid fa-left-to-bracket" style="--fa-secondary-opacity: 1;"></i>
            </a>
        </li>
    </ul>
</div>
@endsection @section('body')
<div class="card">
    <form method="POST" class="form" action="">
        <div class="row">
            <div class="row mt-3">
                <div class="col-md-12">
                    <h5 class="fw-bolder">Account details</h5>
                </div>
            </div>
            <div class="card-box">
                <div class="row mt-2">
                    <div class="col-md-3">
                        <label for="mail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="mail" placeholder="eamil@domain.com" name="mail" />
                    </div>
                    <div class="col-md-3">
                        <label for="pass" class="form-label">Password</label>
                        <input type="password" class="form-control" id="pass" placeholder="......." name="pass" />
                    </div>
                    <div class="col-md-3">
                        <label for="Name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="Name" placeholder="" name="Name" />
                    </div>
                    <div class="col-md-3">
                        <label for="Surname" class="form-label">Surname</label>
                        <input type="text" class="form-control" id="Surname" placeholder="" name="Surname" />
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-3">
                        <label for="birth" class="form-label">Date of birth</label>
                        <input type="date" class="form-control" id="birth" placeholder="" name="birth" />
                    </div>
                    <div class="col-md-3">
                        <label for="mobile" class="form-label">Phone number</label>
                        <input type="number" class="form-control" id="mobile" placeholder="" name="mobile" />
                    </div>
                    <div class="col-md-3">
                        <label for="faxnum" class="form-label">Fax number</label>
                        <input type="number" class="form-control" id="faxnum" placeholder="" name="faxnum" />
                    </div>
                    <div class="col-md-3">
                        <label for="tin" class="form-label">Tax Identification Number (TIN)</label>
                        <input type="number" class="form-control" id="tin" placeholder="" name="tin" />
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-3">
                        <label for="marital" class="form-label">Marital status </label>
                        <input type="text" class="form-control" id="marital" placeholder="" name="marital" />
                    </div>
                    <div class="col-md-3">
                        <label for="acmanager" class="form-label">Account manager</label>
                        <input type="text" class="form-control" id="acmanager" placeholder="" name="acmanager" />
                    </div>
                    <div class="col-md-3">
                        <label for="verification" class="form-label">Verification status</label>
                        <input type="text" class="form-control" id="verification" placeholder="" name="verification" />
                    </div>
                    <div class="col-md-3">
                        <label for="actype" class="form-label">Account type</label>
                        <select id="actype" class="form-select">
                            <option value="islam">EXPERIENCED </option>
                            <option value="hindu">PROFESSIONAL </option>
                            <option value="cristian">RETAIL</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-3">
                        <label for="roll" class="form-label">Role</label>
                        <select id="roll" class="form-select">
                            <option value="islam">IB </option>
                            <option value="hindu">SUB_IB </option>
                            <option value="cristian">USER</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="branch" class="form-label">Branch</label>
                        <input type="text" class="form-control" id="branch" placeholder="" name="branch" />
                    </div>
                    <div class="col-md-3">
                        <label for="ibacc" class="form-label">IB Account</label>
                        <input type="text" class="form-control" id="ibacc" placeholder="" name="ibacc" />
                    </div>
                    <div class="col-md-3">
                        <label for="lead" class="form-label">Lead status</label>
                        <input type="text" class="form-control" id="lead" placeholder="" name="lead" />
                    </div>
                    <div class="col-md-3 mt-2">
                        <label for="leadsq" class="form-label">Lead source</label>
                        <input type="text" class="form-control" id="leadsq" placeholder="" name="leadsq" />
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <h5 class="fw-bolder">Address details</h5>
                </div>
            </div>
            <div class="card-box">
                <div class="row mt-2">
                    <div class="col-md-4">
                        <label for="gen" class="form-label">Citizenship</label>
                        <input type="text" class="form-control" id="gen" placeholder="" name="gen" />
                    </div>
                    <div class="col-md-4">
                        <label for="country" class="form-label">Country</label>
                        <input type="text" class="form-control" id="country" placeholder="" name="country" />
                    </div>
                    <div class="col-md-4">
                        <label for="language" class="form-label">Language</label>
                        <input type="text" class="form-control" id="language" placeholder="" name="language" />
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-4">
                        <label for="state" class="form-label">State</label>
                        <input type="text" class="form-control" id="state" placeholder="" name="state" />
                    </div>
                    <div class="col-md-4">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" placeholder="" name="city" />
                    </div>
                    <div class="col-md-4">
                        <label for="pcoad" class="form-label">Post coad</label>
                        <input type="number" class="form-control" id="pcoad" placeholder="" name="pcoad" />
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-4">
                        <label for="address" class="form-label">Address </label>
                        <input type="text" class="form-control" id="address" placeholder="" name="address" />
                    </div>
                    <div class="col-md-4">
                        <label for="id" class="form-label">Passport/Id number</label>
                        <input type="number" class="form-control" id="id" placeholder="" name="id" />
                    </div>
                    <div class="col-md-4">
                        <label for="cip" class="form-label">Country of issuance of passport</label>
                        <input type="text" class="form-control" id="cip" placeholder="" name="cip" />
                    </div>
                </div>
            </div>
            <div class="card-box">
                        <div class="row p-4">
                            <div class="d-grid gap-3 col-1">
                                <a href="{{route('branchandUser')}}">
                                    <button type="button" class="btn btn-success">Back</button>
                                </a>
                            </div>
                            <div class="d-grid gap-2 col-1">
                                <a href="">
                                    <button type="button" class="btn btn-danger">Clear</button>
                                </a>
                            </div>
                            <div class="d-grid gap-2 col-1">
                                <a href="">
                                    <button type="button" class="btn btn-info">save</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection