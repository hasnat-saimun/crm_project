@extends('header') @section('header')
<div class="col-md-6 mt-4">
    <h3 class="fw-bolder text-uppercase">
        user gmail name
    </h3>
</div>
<div class="col-md-6">
    <ul class="nav-right">
        <li>
            <a href="{{route('tradingView')}}">
                <i class="fa-duotone fa-solid fa-left-to-bracket" style="--fa-secondary-opacity: 1;"></i>
            </a>
        </li>
    </ul>
</div>
@endsection @section('body')
<div class="card">
    <form method="POST" class="form" action="">
        <div class="row">
            <div class="card-box">
                <div class="row mt-2">
                    <div class="col-md-3">
                        <label for="id" class="form-label">ID</label>
                        <input type="number" class="form-control" id="id" placeholder="" name="id" />
                    </div>
                    <div class="col-md-3">
                        <label for="account" class="form-label">Account</label>
                        <input type="email" class="form-control" id="account" placeholder="eamil@domain.com" name="account" />
                    </div>
                    <div class="col-md-3">
                        <label for="system" class="form-label">System</label>
                        <input type="text" class="form-control" id="system" placeholder="" name="system" />
                    </div>
                    <div class="col-md-3">
                        <label for="offer" class="form-label">Offer</label>
                        <select id="offer" class="form-select">
                            <option value="">LGNFX IB </option>
                            <option value="">LGNFX Sub IB</option>
                            <option value="">Vission IB</option>
                            <option value="">Vission Sub IB</option>
                            <option value="">Golden</option>
                            <option value="">IB Account</option>
                            <option value="">Sub IB</option>
                            <option value="">DEMO</option>
                            <option value="">DEMO ACCOUNT</option>
                            <option value="">Google</option>
                            <option value="">PREMIUM</option>
                            <option value="">STANDARD</option>
                            <option value="">Starter</option>
                        </select>
                    </div>
                </div>
                <div class="row p-4">
                    <div class="d-grid gap-3 col-1">
                        <a href="{{route('tradingView')}}">
                            <button type="button" class="btn btn-success">Edit</button>
                        </a>
                    </div>
                    <div class="d-grid gap-2 col-1">
                        <a href="">
                            <button type="button" class="btn btn-danger">Cancel</button>
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
    </form>
</div>

<!-- nav & tab str -->

<!-- nav head -->
 <div class="card card-body">
    <ul class="nav nav-tabs " id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="open-tab" data-bs-toggle="tab" data-bs-target="#open-tab-pane" type="button" role="tab" aria-controls="open-tab-pane" aria-selected="true">Open position</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="active-tab" data-bs-toggle="tab" data-bs-target="#active-tab-pane" type="button" role="tab" aria-controls="active-tab-pane" aria-selected="false">Active orders</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="closed-tab" data-bs-toggle="tab" data-bs-target="#closed-tab-pane" type="button" role="tab" aria-controls="closed-tab-pane" aria-selected="false">Closed position</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="canclled-tab" data-bs-toggle="tab" data-bs-target="#canclled-tab-pane" type="button" role="tab" aria-controls="canclled-tab-pane" aria-selected="false">Canclled order</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="ledgrers-tab" data-bs-toggle="tab" data-bs-target="#ledgrers-tab-pane" type="button" role="tab" aria-controls="ledgrers-tab-pane" aria-selected="false">Ledgrers</button>
    </li>
</ul>
</div>


<!-- nav body -->
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="open-tab-pane" role="tabpanel" aria-labelledby="open-tab" tabindex="0">@include('sales.clientDashbord.accountPart.idSection.openPosition')</div>
  <div class="tab-pane fade" id="active-tab-pane" role="tabpanel" aria-labelledby="active-tab" tabindex="0">@include('sales.clientDashbord.accountPart.idSection.activeOrder')</div>
  <div class="tab-pane fade" id="closed-tab-pane" role="tabpanel" aria-labelledby="closed-tab" tabindex="0">@include('sales.clientDashbord.accountPart.idSection.closedPosition')</div>
  <div class="tab-pane fade" id="canclled-tab-pane" role="tabpanel" aria-labelledby="canclled-tab" tabindex="0">@include('sales.clientDashbord.accountPart.idSection.CanclledOrder')</div>
  <div class="tab-pane fade" id="ledgrers-tab-pane" role="tabpanel" aria-labelledby="ledgrers-tab" tabindex="0">@include('sales.clientDashbord.accountPart.idSection.ledgrers')</div>
</div>



<!-- nav & tab end -->
@endsection
