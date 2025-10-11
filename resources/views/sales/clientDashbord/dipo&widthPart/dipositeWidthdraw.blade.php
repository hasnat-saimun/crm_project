<!-- Deposite -->
 <div class="card card-body">
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="fw-bolder">Deposits</h4>
                </div>
                <div class="col-md-1">
                    <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <form method="POST" class="form" action="">
                <div class="row">
                    <div class="col-md-3">
                        <div class="input-group">
                            <input class="form-control border-right-0 border" type="search" placeholder="Enter Keyword" id="example-search-input" />
                            <div class="input-group-text bg-info"><i class="fa fa-search"></i></div>
                        </div>
                    </div>
                    <div class="col-3">
                        <input type="date" class="form-control" id="date" placeholder="" name="date" />
                    </div>
                    <div class="col-3">
                        <input type="date" class="form-control" id="date" placeholder="" name="date" />
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
            <div class="col-md-12 table-responsive table-responsive-sm">
                <table class="table table-hover table-sm">
                    <caption>
                        List of users
                    </caption>
                    <thead class="bg-dark report-white-font">
                        <tr>
                            <th>Created</th>
                            <th>Email</th>
                            <th>Trading Account</th>
                            <th>Amount</th>
                            <th>Net Amount</th>
                            <th>Currency</th>
                            <th>Status</th>
                            <th>Payment Gateway</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>10/10/2024</td>
                            <td><a href="{{route('clientProfile', ['email' => 'hasnat@gmail.com'])}}" class="text-primary">hasnat@gmail.com</a></td>
                            <td><a href="{{route('depositRequest')}}" class="text-primary">158644 </a></td>
                            <td>standerd</td>
                            <td>USd</td>
                            <td>456</td>
                            <td>USD</td>
                            <td><a href="{{route('depositPayment')}}" class="text-primary">USDT</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    
</div>
<!-- Widthdraw -->
<div class="card card-body">
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="fw-bolder">Withdrawals</h4>
                </div>
                <div class="col-md-1">
                    <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <form method="POST" class="form" action="">
                <div class="row">
                    <div class="col-md-3">
                        <div class="input-group">
                            <input class="form-control border-right-0 border" type="search" placeholder="Enter Keyword" id="example-search-input" />
                            <div class="input-group-text bg-info"><i class="fa fa-search"></i></div>
                        </div>
                    </div>
                    <div class="col-3">
                        <input type="date" class="form-control" id="date" placeholder="" name="date" />
                    </div>
                    <div class="col-3">
                        <input type="date" class="form-control" id="date" placeholder="" name="date" />
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
            <div class="col-md-12 table-responsive table-responsive-sm">
                <table class="table table-hover table-sm">
                    <caption>
                        List of users
                    </caption>
                    <thead class="bg-dark report-white-font">
                        <tr>
                            <th>Created</th>
                            <th>Email</th>
                            <th>Trading Account</th>
                            <th>Amount</th>
                            <th>Net Amount</th>
                            <th>Currency</th>
                            <th>Status</th>
                            <th>Payment Gateway</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>10/10/2024</td>
                            <td><a href="{{route('clientProfile', ['email' => 'hasnat@gmail.com'])}}" class="text-primary">hasnat@gmail.com</a></td>
                            <td><a href="{{route('widthdrawRequest')}}" class="text-primary" >158644 </a></td>
                            <td>standerd</td>
                            <td>USd</td>
                            <td>4345</td>
                            <td>USD</td>
                            <td><a href="{{route('widthdrawPayment')}}" class="text-primary" >USDT</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    
</div>