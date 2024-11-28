@extends('header')  @section('header')
<div class="col-md-6 mt-4">
    <h3 class="fw-bolder text-uppercase">
        Client Name
    </h3>
</div>
<div class="col-md-6">
    <ul class="nav-right">
        <li>
            <a href="{{route('salesCon')}}">
                <i class="fa-duotone fa-solid fa-left-to-bracket" style="--fa-secondary-opacity: 1;"></i>
            </a>
        </li>
    </ul>
</div>
@endsection @section('body')
<nav class=" card card-body">
  <div class="nav nav-tabs " id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="true">Profile</button>
    <button class="nav-link" id="nav-account-tab" data-bs-toggle="tab" data-bs-target="#nav-account" type="button" role="tab" aria-controls="nav-account" aria-selected="false">Account</button>
    <button class="nav-link" id="nav-timeline-tab" data-bs-toggle="tab" data-bs-target="#nav-timeline" type="button" role="tab" aria-controls="nav-timeline" aria-selected="false">Timeline</button>
    <button class="nav-link" id="nav-dipowidth-tab" data-bs-toggle="tab" data-bs-target="#nav-dipowidth" type="button" role="tab" aria-controls="nav-dipowidth" aria-selected="false" >diposito & widthdraw </button>
    <button class="nav-link" id="nav-kyc-tab" data-bs-toggle="tab" data-bs-target="#nav-kyc" type="button" role="tab" aria-controls="nav-kyc" aria-selected="false">KYC</button>
    <button class="nav-link" id="nav-mailing-tab" data-bs-toggle="tab" data-bs-target="#nav-mailing" type="button" role="tab" aria-controls="nav-mailing" aria-selected="false">Mailing</button>
    <button class="nav-link" id="nav-tramscon-tab" data-bs-toggle="tab" data-bs-target="#nav-tramscon" type="button" role="tab" aria-controls="nav-tramscon" aria-selected="false">Trams & conditions</button>
  </div>
</nav>
<div class=" col-12 tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
    <div class="card card-body">
      @include('sales.clientDashbord.profile')
    </div>
  </div>
  <div class="tab-pane fade" id="nav-account" role="tabpanel" aria-labelledby="nav-account-tab" tabindex="0">
    <div class="card card-body">
      @include('sales.clientDashbord.accountPart.account')
    </div>
  </div>
  <div class="tab-pane fade" id="nav-timeline" role="tabpanel" aria-labelledby="nav-timeline-tab" tabindex="0">
    <div class="card card-body">
    
    @include('sales.clientDashbord.timelinePart.timelinePage')
    </div>
  </div>
  <div class="tab-pane fade" id="nav-dipowidth" role="tabpanel" aria-labelledby="nav-dipowidth-tab" tabindex="0">
    
      
    @include('sales.clientDashbord.dipo&widthPart.dipositeWidthdraw')
    
  </div>
  <div class="tab-pane fade" id="nav-kyc" role="tabpanel" aria-labelledby="nav-kyc-tab" tabindex="0">
    <div class="card card-body">
      
    @include('sales.clientDashbord.kycPart.kycPage')
    </div>
  </div>
  <div class="tab-pane fade" id="nav-mailing" role="tabpanel" aria-labelledby="nav-mailing-tab" tabindex="0">
    <div class="card card-body">
      
    @include('sales.clientDashbord.mailing.mailingPage')
    </div>
  </div>
  <div class="tab-pane fade" id="nav-tramscon" role="tabpanel" aria-labelledby="nav-tramscon-tab" tabindex="0">
    <div class="card card-body">
      
    @include('sales.clientDashbord.tram&conPart.tram&conditionPage')
    </div>
  </div>
</div>
@endsection
