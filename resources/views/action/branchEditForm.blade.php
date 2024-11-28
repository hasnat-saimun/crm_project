@extends('header') @section('header')
<div class="col-md-6 mt-4">
    <h3 class="fw-bolder text-uppercase">
        Branch name
    </h3>
</div>
<div class="col-md-6">
    <ul class="nav-right">
        <li>
            <a href="{{route('tradingAc')}}">
                <i class="fa-duotone fa-solid fa-left-to-bracket" style="--fa-secondary-opacity: 1;"></i>
            </a>
        </li>
    </ul>
</div>
@endsection @section('body')

<form method="POST" class="form" action="">
    <div class="row">
        <div class="card">
            <div class="row mt-3">
                <div class="col-md-12">
                    <h5 class="fw-bolder">Branch details</h5>
                </div>
            </div>
            <div class="card-box">
                <div class="row mt-2">
                    <div class="col-md-3 mb-2">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="" name="name" />
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="email" class="form-label">Email User</label>
                        <input type="email" class="form-control" id="email" placeholder="" name="email" />
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="mailPass" class="form-label"> Email Password</label>
                        <input type="password" class="form-control" id="mailPass" placeholder="" name="mailPass" />
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="mailHost" class="form-label">Email Host</label>
                        <input type="text" class="form-control" id="mailHost" placeholder="" name="mailHost" />
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="mailPost" class="form-label">Email Port</label>
                        <input type="text" class="form-control" id="mailPost" placeholder="" name="mailPost" />
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="mtrUrl" class="form-label">Mtr Url</label>
                        <input type="text" class="form-control" id="mtrUrl" placeholder="" name="mtrUrl" />
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="clientOfficeUrl" class="form-label">Client Office Url</label>
                        <input type="text" class="form-control" id="clientOfficeUrl" placeholder="" name="clientOfficeUrl" />
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="mt4RealServerName" class="form-label">MT4 real server name</label>
                        <input type="text" class="form-control" id="mt4RealServerName" placeholder="" name="mt4RealServerName" />
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="mt4DemoServerName" class="form-label">MT4 demo server name</label>
                        <input type="text" class="form-control" id="mt4DemoServerName" placeholder="" name="mt4DemoServerName" />
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="mt5RealServerName" class="form-label">MT5 real server name</label>
                        <input type="text" class="form-control" id="mt5RealServerName" placeholder="" name="mt5RealServerName" />
                    </div>
                    <div class="col-md-5 mb-2">
                        <label for="mt5DemoServerName" class="form-label">MT5 Demo server name</label>
                        <input type="text" class="form-control" id="mt5DemoServerName" placeholder="" name="mt5DemoServerName" />
                    </div>
                    <div class="col-md-3 mb-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                            <label class="form-check-label" for="flexCheckDefault">
                                Email TLS
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3 mb-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                            <label class="form-check-label" for="flexCheckDefault">
                                Email SSL
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                            <label class="form-check-label" for="flexCheckDefault">
                                Use SumSub for kyc Verification
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card p-2">
        <div class="row">
            <div class="col-12">
                <h5 class="fw-bolder">Send test mail</h5>
            </div>
            <div class="col-4">
                <label for="mailAddress" class="form-label">Email address</label>
                <input type="text" class="form-control" id="mailAddress" placeholder="" name="mailAddress" />
            </div>
        </div>
        <div class="card-box">
    <div class="row">
        <div class="col-md-12">
            <div class="row p-4">
                <div class="d-grid gap-2 col-1">
                    <a href="">
                        <button type="button" class="btn btn-danger">Edit</button>
                    </a>
                </div>
                <div class="d-grid gap-3 col-1">
                    <a href="{{route('tradingAc')}}">
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
@endsection


