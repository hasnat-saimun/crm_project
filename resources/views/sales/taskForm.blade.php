@extends('header') @section('header')
<div class="col-md-6 mt-4">
    <h3 class="fw-bolder text-uppercase">
        Tasks
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
<div class="card">
    <form method="POST" class="form" action="">
        <div class="row">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <h5 class="fw-bolder ">Account details</h5>
                    </div>
                </div>
                <div class="card-box">
                    <div class="row mt-2">
                        <div class="col-md-3">
                        <label for="stDate" class="form-label">Start Date</label>
                        <input type="date" class="form-control" id="stDate" placeholder="" name="stDate" />
                        </div>
                        <div class="col-md-3">
                            <label for="status" class="form-label">Status</label>
                            <input type="text" class="form-control" id="status" placeholder="" name="status" />
                        </div>
                        <div class="col-md-3">
                        <label for="event" class="form-label">Event type</label>
                        <input type="text" class="form-control" id="event" placeholder="" name="event" />
                        </div>
                        <div class="col-md-3">
                        <label for="acName" class="form-label">Account name</label>
                        <input type="text" class="form-control" id="acName" placeholder="" name="acName" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label for="assign" class="form-label">Assigned to
                            </label>
                            <input type="text" class="form-control" id="assign" placeholder="" name="assign" />
                        </div>
                        <div class="col-md-3">
                            <label for="comment" class="form-label">Comment</label>
                            <input type="text" class="form-control" id="comment" placeholder="" name="comment" />
                        </div>
                    </div>
                </div>
                
                <div class="card-box">
                    <div class="row">
                        </div>
                        <div class="col-md-12">
                            <div class="row p-4">
                                <div class="d-grid gap-3 col-1   ">
                                    <a href="{{route('salesCon')}}">
                                    <button type="button" class="btn btn-success ">Back</button>
                                    </a>
                                    
                                </div>
                                <div class="d-grid gap-2 col-1   ">
                                    <a href="">
                                    <button type="button" class="btn btn-danger">Create</button>
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
