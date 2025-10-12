@extends('header') @section('header')
<div class="col-md-6 mt-4">
    <h3 class="fw-bolder text-uppercase">
        Sales dashboard
    </h3>
</div>
<div class="col-md-6">
    <ul class="nav-right">
        <li class="header-search">
            <div class="main-search morphsearch-search">
                <div class="input-group">
                    <span class="input-group-prepend search-close">
                        <i class="feather icon-x input-group-text"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Enter Keyword" />
                    <span class="input-group-append search-btn">
                        <i class="feather icon-search input-group-text"></i>
                    </span>
                </div>
            </div>
        </li>
        <li>
            <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                <i class="full-screen feather icon-maximize"></i>
            </a>
        </li>
    </ul>
</div>
@endsection @section('body')
<div class="card">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12 text-center">
                <h3 class="fw-bolder text-uppercase fs-5 p-2">Last month statistics</h3>
            </div>
        </div>
        <div class="col-md-3 text-center p-3">
            <!-- <div class=""></div> -->
            <h3 class="text-info">
                0
            </h3>
            <h6>Deposited clients</h6>
        </div>
        <div class="col-md-3 text-center p-3">
            <!-- <div class=""></div> -->
            <h3 class="text-info">
                0
            </h3>
            <h6>Number of leads</h6>
        </div>
        <div class="col-md-3 text-center p-3">
            <!-- <div class=""></div> -->
            <h3 class="text-info">
                0/0
            </h3>
            <h6>Conversion rate</h6>
        </div>
        <div class="col-md-3 text-center p-3">
            <!-- <div class=""></div> -->
            <h3 class="text-info">
                0USD
            </h3>
            <h6>Net deposit</h6>
        </div>
    </div>
</div>
<div class="card">
    <div class="row p-2">
        <div class="col-md-2">
            <h4 class="fw-bolder">Lead stages</h4>
        </div>
        <div class="col-md-10">
            <i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header bg-info">
                    New contact
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer bg-dark text-white">
                    Total leads: 1
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header bg-success">
                    Contacted
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer bg-dark text-white">
                    Total leads: 0
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header bg-primary">
                    Ready to deposit
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer bg-dark text-white">
                    Total leads: 1
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header bg-danger">
                    Need analysis
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer bg-dark text-white">
                    Total leads: 0
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="row p-3">
                    <div class="col-md-4">
                        <h4 class="fw-bolder">
                            Last events <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
                        </h4>
                    </div>
                    <div class="col-md-4">
                        <form method="POST" class="form" action="">
                            <div class="input-group">
                                <input class="form-control border-right-0 border" type="search" placeholder="Enter Keyword" id="example-search-input" />
                                <div class="input-group-text bg-info"><i class="fa fa-search"></i></div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <h4 class="fw-bolder">
                            Last events <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
                        </h4>
                    </div>

                    <div class="col-md-12 table-responsive table-responsive-sm">
                        <table class="table table-hover table-sm">
                            <caption>
                                List of users
                            </caption>
                            <thead class="bg-dark report-white-font">
                                <tr>
                                    <th scope="col">Message</th>
                                    <th scope="col">created</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Balance</th>
                                    <th scope="col">Login</th>
                                    <th scope="col">status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#" class=""><h6 class="text-primary">Md Abu Yousuf Successful deposit 20</h6></a>
                                    </td>
                                    <td>04.09.2024 13:38:</td>
                                    <td>Successful depo</td>
                                    <td>500 USD</td>
                                    <td>542331 USD</td>
                                    <td>N/A</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="3"><h6 class="text-primary">Md Abu Yousuf Successful deposit 20</h6></a>
                                    </td>
                                    <td>04.09.2024 13:38:</td>
                                    <td>04.09.2024 13:38:</td>
                                    <td>Successful depo</td>
                                    <td>500 USD</td>
                                    <td>542331</td>
                                    <td>N/A</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="3" class=""><h6 class="text-primary">Md Abu Yousuf Successful deposit 20</h6></a>
                                    </td>
                                    <td>04.09.2024 13:38:</td>
                                    <td>04.09.2024 13:38:</td>
                                    <td>Successful depo</td>
                                    <td>500 USD</td>
                                    <td>542331</td>
                                    <td>N/A</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="row">
                    <div class="col-md-12 p-3">
                        <h4 class="">
                            Clients segmentation <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
                        </h4>
                    </div>
                    <div class="col-md-12 table-responsive table-responsive-sm">
                        <table class="table table-hover table-sm">
                            <caption>
                                List of users
                            </caption>
                            <thead class="bg-dark report-white-font">
                                <tr>
                                    <th scope="col">Status</th>
                                    <th scope="col">Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>542331</td>
                                    <td>N/A</td>
                                </tr>
                                <tr>
                                    <td>542331</td>
                                    <td>N/A</td>
                                </tr>
                                <tr>
                                    <td>542331</td>
                                    <td>N/A</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5 align-items-center query-box">
    <div class="col-12 mx-auto">
        <nav class="p-2 card card-body border-0 query-box-heading shadow">
            <div class="nav justify-content-center nav-underline" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Tasks</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">History</button>
            </div>
        </nav>
    </div>
    <div class="col-12 mx-auto tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"                aria-labelledby="nav-home-tab" tabindex="0">
            <div class="card">
                <div class="row mt-4 p-2">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="fw-bolder">Your tasks</h4>
                            </div>

                            <div class="col-md-2">
                                <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
                            </div>
                            <div class="col-md-2 px-2">
                                <a href="{{route('taskForm')}}">
                                    <i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i>
                                </a>
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
                </div>
                <div class="col-md-12 table-responsive table-responsive-sm">
                    <table class="table table-hover table-sm">
                        <caption>
                            List of users
                        </caption>
                        <form method="POST" class="form align-items-center" action="">
                            <thead class="bg-dark report-white-font">
                                <tr>
                                    <th>Event Type</th>
                                    <th>Start Date</th>
                                    <th>Status</th>
                                    <th>Account name</th>
                                    <th>Account status</th>
                                    <th>Assigned to</th>
                                    <th>Comment</th>
                                </tr>
                            </thead>
                        </form>
                        <tbody>
                            <tr>
                                <td>15484</td>
                                <td>hasnat@gmail.com</td>
                                <td>satndard</td>
                                <td>Test admin</td>
                                <td>Done</td>
                            </tr>
                            <tr>
                                <td>15484</td>
                                <td>hasnat@gmail.com</td>
                                <td>satndard</td>
                                <td>Test admin</td>
                                <td>Done</td>
                            </tr>
                            <tr>
                                <td>15484</td>
                                <td>hasnat@gmail.com</td>
                                <td>satndard</td>
                                <td>Test admin</td>
                                <td>Done</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
            <div class="card">
                <div class="row mt-4 p-2">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="fw-bolder">History</h4>
                            </div>

                            <div class="col-md-2">
                                <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
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
                </div>
                <div class="col-md-12 table-responsive table-responsive-sm">
                    <table class="table table-hover table-sm">
                        <caption>
                            List of users
                        </caption>
                        <form method="POST" class="form align-items-center" action="">
                            <thead class="bg-dark report-white-font">
                                <tr>
                                    <th>Event Type</th>
                                    <th>Start Date</th>
                                    <th>Status</th>
                                    <th>Account name</th>
                                    <th>Account status</th>
                                    <th>Assigned to</th>
                                    <th>Comment</th>
                                </tr>
                            </thead>
                        </form>
                        <tbody>
                            <tr>
                                <td>15484</td>
                                <td>hasnat@gmail.com</td>
                                <td>satndard</td>
                                <td>Test admin</td>
                                <td>Done</td>
                            </tr>
                            <tr>
                                <td>15484</td>
                                <td>hasnat@gmail.com</td>
                                <td>satndard</td>
                                <td>Test admin</td>
                                <td>Done</td>
                            </tr>
                            <tr>
                                <td>15484</td>
                                <td>hasnat@gmail.com</td>
                                <td>satndard</td>
                                <td>Test admin</td>
                                <td>Done</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
