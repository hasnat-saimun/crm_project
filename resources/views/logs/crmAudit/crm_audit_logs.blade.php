@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-8">
                <h4 class="fw-bolder">CRM Audit Logs</h4>
            </div>

            <div class="col-md-2">
                <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
            </div>
                <div class="col-md-2">
                    <a href=""><i class="fa-duotone fa-solid fa-down-from-bracket fa-sm bg-danger rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
                </div>
        </div>
    </div>
    <div class="col-md-6">
        <form method="POST" class="form" action="">
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <input class="form-control border-right-0 border" type="search" placeholder="Enter Keyword" id="example-search-input" />
                        <div class="input-group-text bg-info"><i class="fa fa-search"></i></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <input type="date" class="form-control" id="to" placeholder="" name="to" />
                </div>
                <div class="col-md-4">
                    <input type="date" class="form-control" id="form" placeholder="" name="form" />
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-2">
        <select class="selectpicker" multiple aria-label="size 2 select example">
                        <option value="1">Account</option>
                        <option value="2">Security</option>
                        <option value="2">IB</option>
                        <option value="2">Bonus</option>
                        <option value="2">Branch</option>
                        <option value="2">Bulk_Operation</option>
                        <option value="2">Deposit</option>
                        <option value="2">Kyc</option>
                        <option value="2">Lead</option>
                        <option value="2">Mass_Mailing</option>
                        <option value="2">Role</option>
                        <option value="2">Widthdrawal</option>
                        <option value="2">Other</option>
                    </select>
                            </div>
</div>
@endsection 
@section('body')

<div class="card">
    <div class="col-md-12 table-responsive table-responsive-sm">
    <table class="table table-hover table-sm ">
        <caption>List of users</caption>
        <form method="POST" class="form align-items-center" action="">
        <thead class="bg-dark report-white-font">
            <tr>
                <th>Operation</th>
                <th>Resource</th>
                <th>Operation Made</th>
                <th>Message</th>
                <th>Email</th>
                
            </tr>
        </thead>
        </form>
        <tbody >
            <tr>    
                <td><a href="{{route('viewAuditlog')}}" class="text-primary">15410.10.202484</a></td>
                    <td><a href="{{route('clientProfile')}}" class="text-primary">hasnat@gmail.com</a></td>
                <td><a href="" class="text-primary">satndard</td>
                <td><a href="" class="text-primary">Test admin</a></td>
                <td>Done</td>

            </tr>
            <tr> 
                <td><a href="{{route('viewAuditlog')}}" class="text-primary">15410.10.202484</a></td>   
                    <td><a href="{{route('clientProfile')}}" class="text-primary">hasnat@gmail.com</a></td>
                <td><a href="" class="text-primary">satndard</td>
                <td><a href="" class="text-primary">Test admin</a></td>
                <td>Done</td>
            </tr>
            <tr>                  
                <td><a href="{{route('viewAuditlog')}}" class="text-primary">15410.10.202484</a></td>
                    <td><a href="{{route('clientProfile')}}" class="text-primary">hasnat@gmail.com</a></td>
                <td><a href="" class="text-primary">satndard</td>
                <td><a href="" class="text-primary">Test admin</a></td>
                <td>Done</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection