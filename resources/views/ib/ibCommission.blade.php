@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-3">
        <h4 class="fw-bolder">IB Accounts</h4>
    </div>
    <div class="col-md-1">
        <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
    </div>
    <div class="col-md-3">
        <form method="POST" class="form" action="">
            <div class="input-group">
                <input class="form-control border-right-0 border" type="search" placeholder="Enter Keyword" id="example-search-input" />
                <div class="input-group-text bg-info"><i class="fa fa-search"></i></div>
            </div>
        </form>
    </div>
    <div class="col-md-3">
        <button type="button" class="btn btn-info text-uppercase btn-sm rounded px-2" data-bs-toggle="modal" data-bs-target="#regIbAcc">REGISTER IB ACCOUNT</button>
    </div>
</div>
@endsection @section('body')
<div class="col-md-12">
    <div class="card table-responsive table-responsive-sm">
        <table class="table table-hover table-sm">
            <caption>
                List of users
            </caption>
            <form method="POST" class="form align-items-center" action="">
                <thead class="bg-dark report-white-font">
                    <tr>
                        <th>Login</th>
                        <th>Email</th>
                        <th>Currency</th>
                        <th>Balance</th>
                        <th>Role</th>
                        <th>Commission</th>
                    </tr>
                </thead>
            </form>
            <tbody>
                <tr>
                    <td>5511855</td>
                    <td><a href="{{route('clientProfile')}}" class="text-primary">hasnat@gmail.com</a></td>
                    <td>USD</td>
                    <td>18181</td>
                    <td>EDFIG</td>
                    <td><a href="{{route('commissionEditpage')}}" class="text-primary">LGNFX IB</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row mt-4 p-2">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3">
                <h4 class="fw-bolder">IB Commissions</h4>
            </div>
            <div class="col-md-1">
                <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
            </div>
            <div class="col-md-6">
                <form method="POST" class="form" action="">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="date" class="form-control" id="to" placeholder="" name="to" />
                        </div>
                        <div class="col-md-6">
                            <input type="date" class="form-control" id="form" placeholder="" name="form" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-2">
                <a href=""><i class="fa-duotone fa-solid fa-down-from-bracket fa-sm bg-danger rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="card table-responsive table-responsive-sm">
        <table class="table table-hover table-sm">
            <caption>
                List of users
            </caption>
            <form method="POST" class="form align-items-center" action="">
                <thead class="bg-dark report-white-font">
                    <tr>
                        <th>Deal</th>
                        <th>Time</th>
                        <th>Profit</th>
                        <th>Comment</th>
                    </tr>
                </thead>
            </form>
            <tbody>
                <tr>
                    <td>5511855</td>
                    <td>10.00</td>
                    <td>USD</td>
                    <td>high</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- RegIbAcc button -->
<!-- Modal -->
<div class="modal fade" id="regIbAcc" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="regIbAccLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="regIbAccLabel">SUB ID</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="regLink" class="form-label">Register Links</label>
                    <input type="text" class="form-control" id="regLink" placeholder="" name="regLink" />
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
