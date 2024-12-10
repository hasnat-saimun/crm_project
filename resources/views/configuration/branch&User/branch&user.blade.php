@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-12">
        <h4 class="fw-bolder">Branches & CRM Users</h4>
    </div>
</div>
@endsection @section('body')
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2">
                    <h4 class="fw-bolder">Branches</h4>
                </div>
                <div class="col-md-1">
                    <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
                </div>
                <div class="col-md-1 ">
                    <a href="{{route('addBranch')}}"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
                </div>
                <div class="col-md-3">
                    <form method="POST" class="form" action="">
                        <div class="input-group">
                            <input class="form-control border-right-0 border" type="search" placeholder="Enter Keyword" id="example-search-input" />
                            <div class="input-group-text bg-info"><i class="fa fa-search"></i></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 card table-responsive table-responsive-sm">
        <table class="table table-hover table-sm">
            <caption>
                list of user
            </caption>
            <form method="POST" class="form align-items-center" action="">
                <thead class="bg-dark report-white-font">
                    <tr>
                        <th>Name</th>
                        <th>Account Reister Link</th>
                    </tr>
                </thead>
            </form>
            <tbody>
                <tr>
                    <td><a href="{{route('editBranch')}}" class="text-primary">Google App (dont delete)</a></td>
                    <td>
                        <div class="row">
                            <!-- Button trigger modal -->
                            <div class="col-md-2">
                                <button type="button" class="btn btn-info text-uppercase btn-sm rounded px-2" data-bs-toggle="modal" data-bs-target="#demo">DEMO</button>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-info text-uppercase btn-sm rounded px-2" data-bs-toggle="modal" data-bs-target="#real">REAL</button>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2">
                    <h4 class="fw-bolder">CRM Users</h4>
                </div>
                <div class="col-md-1">
                    <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
                </div>
                <div class="col-md-1">
                    <a href="{{route('addUser')}}"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
                </div>
                <div class="col-md-3">
                    <form method="POST" class="form" action="">
                        <div class="input-group">
                            <input class="form-control border-right-0 border" type="search" placeholder="Enter Keyword" id="example-search-input" />
                            <div class="input-group-text bg-info"><i class="fa fa-search"></i></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-12 card table-responsive table-responsive-sm">
        <table class="table table-hover table-sm">
            <caption>
                List of users
            </caption>
            <form method="POST" class="form align-items-center" action="">
                <thead class="bg-dark report-white-font">
                    <tr>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Email</th>
                        <th>Slave branches</th>
                        <th>Role</th>
                    </tr>
                </thead>
            </form>
            <tbody>
                <tr>
                    <td>5511855</td>
                    <td>USD</td>
                    <td><a href="{{route('clientProfile')}}" class="text-primary">hasnat@gmail.com</a></td>
                    <td>18181</td>
                    <td>USD</td>
                </tr>
            </tbody>
        </table>
    </div>
    
<!-- Demo button -->
<!-- Modal -->
<div class="modal fade" id="demo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="demoLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="demoLabel">DEMO</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="regLink" class="form-label">Register Links</label>
                    <input type="text" class="form-control" id="regLink" placeholder="" name="regLink">
                </div>
                <div class="mb-3">
                    <label for="leadSource" class="form-label">Optional lead source</label>
                        <select id="supportedCurrency" name="supportedCurrency" class="form-select">
                            <option value="islam">Facebook</option>
                            <option value="hindu">Web</option>
                            <option value="cristian">Google</option>
                            <option value="cristian">Client Referral</option>
                            <option value="cristian">Previous client</option>
                            <option value="cristian">Youtube</option>
                        </select>
                </div><div class="mb-3">
                    <label for="regLink" class="form-label">Register Links</label>
                    <input type="text" class="form-control" id="regLink" placeholder="" name="regLink">
                </div>
                <div class="mb-3">
                    <label for="leadSource" class="form-label">Optional lead source</label>
                        <select id="supportedCurrency" name="supportedCurrency" class="form-select">
                            <option value="islam">Facebook</option>
                            <option value="hindu">Web</option>
                            <option value="cristian">Google</option>
                            <option value="cristian">Client Referral</option>
                            <option value="cristian">Previous client</option>
                            <option value="cristian">Youtube</option>
                        </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Confirm</button>
            </div>
        </div>
    </div>
</div>


<!-- Real button -->
<!-- Modal -->
<div class="modal fade" id="real" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="realLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="realLabel">SUB ID</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="regLink" class="form-label">Register Links</label>
                    <input type="text" class="form-control" id="regLink" placeholder="" name="regLink">
                </div>
                <div class="mb-3">
                    <label for="leadSource" class="form-label">Optional lead source</label>
                        <select id="supportedCurrency" name="supportedCurrency" class="form-select">
                            <option value="islam">Facebook</option>
                            <option value="hindu">Web</option>
                            <option value="cristian">Google</option>
                            <option value="cristian">Client Referral</option>
                            <option value="cristian">Previous client</option>
                            <option value="cristian">Youtube</option>
                        </select>
                </div><div class="mb-3">
                    <label for="regLink" class="form-label">Register Links</label>
                    <input type="text" class="form-control" id="regLink" placeholder="" name="regLink">
                </div>
                <div class="mb-3">
                    <label for="leadSource" class="form-label">Optional lead source</label>
                        <select id="supportedCurrency" name="supportedCurrency" class="form-select">
                            <option value="islam">Facebook</option>
                            <option value="hindu">Web</option>
                            <option value="cristian">Google</option>
                            <option value="cristian">Client Referral</option>
                            <option value="cristian">Previous client</option>
                            <option value="cristian">Youtube</option>
                        </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Confirm</button>
            </div>
        </div>
    </div>
</div>
@endsection
