<div class="row mt-4">
    <div class="col-md-5">
        <div class="row">
            <div class="col-md-6 ">
                <h4 class="fw-bolder">Trading Accounts</h4>
            </div>

            <div class="col-md-3">
                <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
            </div>
            <div class="col-md-3 ">
                <a href="{{route('addTrading')}}"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
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
            </div>
        </form>
    </div>
</div>
<div class="card">
    <div class="col-md-12 table-responsive table-responsive-sm">

    <table class="table table-hover table-sm ">
        <caption>List of users</caption>
        <form method="POST" class="form align-items-center" action="">
        <thead class="bg-dark report-white-font">
            
            
            <tr>
                
                <th >Id</th>
                <th >Client</th>
                <th >Offer</th>
                <th>Balance</th>
                <th>Currency</th>
                <th class="mx-auto">Deposit</th>
                <th >Widhtdraw</th>
            </tr>
        </thead>
        </form>
        <tbody >
            <tr>
                <td>158644</td>
            <td><a href="#"  class="text-primary">hasnat@gmail.com</a></td>
            <td><a href="{{route('offerForm')}}" class="text-primary">standerd</a></td>
            <td>standerd</td>
            <td>USd</td>
            <td><a href="{{route('tradingDepo')}}"><i class=" fa-duotone fa-solid fa-up-to-bracket fa-flip-both fa-lg rounded p-3" style="--fa-primary-color: #05b9d9; --fa-secondary-color: #05b9d9; --fa-secondary-opacity: 1;"></i></a></td>
                <td><a href=" {{route('tradingWidth')}}"><i class="fa-duotone fa-solid fa-down-from-bracket fa-flip-vertical fa-lg rounded p-3" style="--fa-primary-color: #dc0404; --fa-secondary-color: #dc0404; --fa-secondary-opacity: 1;"></i></a>
            </tr>
            <tr>
                <td>Dactive</td>
                <td><a href="#"  class="text-primary">hasnat@gmail.com</a></td>
                <td><a href="#" class="text-primary">standerd</a></td>
                <td>USd</td>
                <td>shovo</td>
                
                <td><a href="{{route('tradingDepo')}}"><i class=" fa-duotone fa-solid fa-up-to-bracket fa-flip-both fa-lg rounded p-3" style="--fa-primary-color: #05b9d9; --fa-secondary-color: #05b9d9; --fa-secondary-opacity: 1;"></i></a></td>
                <td><a href="{{route('tradingWidth')}}"><i class="fa-duotone fa-solid fa-down-from-bracket fa-flip-vertical fa-lg rounded p-3" style="--fa-primary-color: #dc0404; --fa-secondary-color: #dc0404; --fa-secondary-opacity: 1;"></i></a>
            </tr>
            <tr>
            <td>2342568766</td>
            <td><a href="#" class="text-primary">hasnat@gmail.com</a></td>
            <td><a href="#" class="text-primary">standerd</a></td>
            <td>USd</td>
            <td>sobuj</td>
            <td><a href="{{route('tradingDepo')}}"><i class=" fa-duotone fa-solid fa-up-to-bracket fa-flip-both fa-lg rounded p-3" style="--fa-primary-color: #05b9d9; --fa-secondary-color: #05b9d9; --fa-secondary-opacity: 1;"></i></a></td>
                <td><a href="{{route('tradingWidth')}}"><i class="fa-duotone fa-solid fa-down-from-bracket fa-flip-vertical fa-lg rounded p-3" style="--fa-primary-color: #dc0404; --fa-secondary-color: #dc0404; --fa-secondary-opacity: 1;"></i></a>
            </tr>
        </tbody>
    </table>
</div>
</div>