<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CRM ||| Admin Controling Site</title>

        <!--[if lt IE 10]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
        <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app" />
        <meta name="author" content="colorlib" />

        <link rel="icon" href="{{asset('public/admindek-html/')}}/files/assets/images/favicon.ico" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="{{asset('public/admindek-html/')}}/files/bower_components/bootstrap/css/bootstrap.min.css" />

        <link rel="stylesheet" href="{{asset('public/admindek-html/')}}/files/assets/pages/waves/css/waves.min.css" type="text/css" media="all" />

        <link rel="stylesheet" type="text/css" href="{{asset('public/admindek-html/')}}/files/assets/icon/feather/css/feather.css" />

        <link rel="stylesheet" type="text/css" href="{{asset('public/admindek-html/')}}/files/assets/css/font-awesome-n.min.css" />

        <link rel="stylesheet" href="{{asset('public/admindek-html/')}}/files/bower_components/chartist/css/chartist.css" type="text/css" media="all" />

        <link rel="stylesheet" type="text/css" href="{{asset('public/admindek-html/')}}/files/assets/css/style.css" />
        <link rel="stylesheet" type="text/css" href="{{asset('public/admindek-html/')}}/files/assets/css/widget.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" integrity="sha512-mR/b5Y7FRsKqrYZou7uysnOdCIJib/7r5QeJMFvLNHNhtye3xJp1TdJVPLtetkukFn227nKpXD9OjUc09lx97Q==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />

        <!-- DataTables CSS -->
        <!-- DataTables (Bootstrap 4) CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap4.min.css">
        <!-- DataTables Buttons CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap4.min.css">
        <!-- DataTables Responsive CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap4.min.css">
        <!-- DataTables ColVis CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/colreorder/1.7.0/css/colReorder.bootstrap4.min.css">


        <!-- font owsam -->
        <script src="https://kit.fontawesome.com/32dcd4a478.js" crossorigin="anonymous"></script>
        <style>
            .report-white-font tr th{
                color: #fff !important;
            }
            .modal-backdrop {
                z-index: 100;
            }
            
            /* Column Visibility Modal Styling */
            .column-toggle-container {
                max-height: 400px;
                overflow-y: auto;
            }
            
            .form-check {
                padding: 8px 12px;
                border: 1px solid #e9ecef;
                border-radius: 4px;
                background: #f8f9fa;
                transition: all 0.2s ease;
            }
            
            .form-check:hover {
                background: #e9ecef;
                border-color: #007bff;
            }
            
            .form-check-input:checked ~ .form-check-label {
                color: #007bff;
                font-weight: 500;
            }
            
            .btn-group-column-controls {
                border-bottom: 1px solid #dee2e6;
                padding-bottom: 15px;
                margin-bottom: 15px;
            }
            
            /* DataTables Column Visibility Button Styling */
            .dt-button.buttons-colvis {
                background: #6c757d;
                border-color: #6c757d;
                color: white;
            }
            
            .dt-button.buttons-colvis:hover {
                background: #5a6268;
                border-color: #5a6268;
                color: white;
            }
            
            /* Enhanced Responsive Table Styling */
            .table-responsive-enhanced {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                border: 1px solid #dee2e6;
                border-radius: 0.375rem;
            }
            
            .dt-buttons {
                margin-bottom: 15px;
                flex-wrap: wrap;
                gap: 5px;
            }
            
            .dt-button {
                margin-right: 5px !important;
                margin-bottom: 5px !important;
                border-radius: 4px !important;
                font-size: 12px !important;
                padding: 6px 12px !important;
            }
            
            .dt-button:hover {
                transform: translateY(-1px);
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            }
            
            /* Export dropdown styling */
            .dt-button-collection {
                border-radius: 6px;
                box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                border: none;
            }
            
            .dt-button-collection .dt-button {
                width: 100%;
                text-align: left;
                border: none;
                border-radius: 0;
                margin: 0;
            }
            
            .dt-button-collection .dt-button:hover {
                background-color: #f8f9fa;
                transform: none;
                box-shadow: none;
            }
            
            /* Responsive table controls */
            .dataTables_wrapper .dataTables_length,
            .dataTables_wrapper .dataTables_filter,
            .dataTables_wrapper .dataTables_info,
            .dataTables_wrapper .dataTables_paginate {
                margin: 10px 0;
            }
            
            @media (max-width: 768px) {
                .dt-buttons {
                    text-align: center;
                    width: 100%;
                }
                
                .dt-button {
                    margin: 2px !important;
                    font-size: 11px !important;
                    padding: 4px 8px !important;
                }
                
                .dataTables_wrapper .dataTables_length,
                .dataTables_wrapper .dataTables_filter {
                    text-align: center;
                    float: none;
                    margin: 5px 0;
                }
                
                .dataTables_wrapper .dataTables_info,
                .dataTables_wrapper .dataTables_paginate {
                    text-align: center;
                    float: none;
                }
            }
            
            /* Enhanced responsive details */
            .dtr-details {
                background-color: #f8f9fa;
                border: 1px solid #dee2e6;
                border-radius: 4px;
                padding: 10px;
            }
            
            .dtr-details ul {
                margin: 0;
                padding: 0;
                list-style: none;
            }
            
            .dtr-details li {
                border-bottom: 1px solid #dee2e6;
                padding: 8px 0;
            }
            
            .dtr-details li:last-child {
                border-bottom: none;
            }
            
            .dtr-title {
                font-weight: bold;
                color: #495057;
                min-width: 120px;
                display: inline-block;
            }
            
            .dtr-data {
                color: #6c757d;
            }
            
            /* Processing indicator */
            .dataTables_processing {
                background: rgba(255,255,255,0.9);
                color: #007bff;
                font-weight: bold;
                border-radius: 4px;
                border: 1px solid #007bff;
            }

        </style>
    </head>
    <body>
        <div class="loader-bg">
            <div class="loader-bar"></div>
        </div>

        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
                <nav class="navbar header-navbar pcoded-header">
                    <div class="navbar-wrapper">
                        <div class="navbar-logo">
                                <img class="img-fluid" src="{{asset('public/admindek-html/')}}/files/assets/images/logo.png" alt="Theme-Logo" />
                            <a class="mobile-menu" id="mobile-collapse" href="#!">
                                <i class="feather icon-menu icon-toggle-right"></i>
                            </a>
                            <a class="mobile-options waves-effect waves-light">
                                <i class="feather icon-more-horizontal"></i>
                            </a>
                        </div>
                        <div class="navbar-container container-fluid">
                            <div class="row">

                            @yield('header')
                            </div>
                        </div>
                    </div>
                </nav>

                <div id="sidebar" class="users p-chat-user showChat">
                    <div class="had-container">
                        <div class="p-fixed users-main">
                            <div class="user-box">
                                <div class="chat-search-box">
                                    <a class="back_friendlist">
                                        <i class="feather icon-x"></i>
                                    </a>
                                    <div class="right-icon-control">
                                        <div class="input-group input-group-button">
                                            <input type="text" id="search-friends" name="footer-email" class="form-control" placeholder="Search Friend" />
                                            <div class="input-group-append">
                                                <button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                        <nav class="pcoded-navbar">
                            <div class="nav-list">
                                <div class="pcoded-inner-navbar main-menu">
                                    <div class="pcoded-navigation-label">C R M</div>
                                    <ul class="pcoded-item pcoded-left-item">
                                        <li class="pcoded-hasmenu ">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                                <span class="pcoded-mtext">Tast Admin</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="active">
                                                    <a href="index-2.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Match 2 Pay</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{asset('public/admindek-html/')}}/default/dashboard-crm.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Social Tranding</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{asset('public/admindek-html/')}}/default/dashboard-analytics.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Bridge Manager</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{asset('public/admindek-html/')}}/default/dashboard-analytics.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Trade Report</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{asset('public/admindek-html/')}}/default/dashboard-analytics.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Notifications</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{asset('public/admindek-html/')}}/default/dashboard-analytics.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Security</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{asset('public/admindek-html/')}}/default/dashboard-analytics.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Api Access</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{asset('public/admindek-html/')}}/default/dashboard-analytics.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Log Out</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class>
                                            <a href="{{route('brokerCon')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon">
                                                    <i class="feather icon-menu"></i>
                                                </span>
                                                <span class="pcoded-mtext">Broker Analytics</span>
                                            </a>
                                        </li>
                                        <li class>
                                            <a href="{{route('salesCon')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon">
                                                    <i class="feather icon-menu"></i>
                                                </span>
                                                <span class="pcoded-mtext">Sales Dashboard</span>
                                            </a>
                                        </li>
                                        <li class>
                                            <a href="{{route('client')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon">
                                                    <i class="feather icon-menu"></i>
                                                </span>
                                                <span class="pcoded-mtext">Clients</span>
                                            </a>
                                        </li>
                                        <li class>
                                            <a href="{{route('leads')}} " class="waves-effect waves-dark">
                                                <span class="pcoded-micon">
                                                    <i class="feather icon-menu"></i>
                                                </span>
                                                <span class="pcoded-mtext">Leads</span>
                                            </a>
                                        </li>
                                        <li class>
                                            <a href="{{route('tradingView')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon">
                                                    <i class="feather icon-menu"></i>
                                                </span>
                                                <span class="pcoded-mtext">Tranding Accounts</span>
                                            </a>
                                        </li>
                                        <li class>
                                            <a href="{{route('depositView')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon">
                                                    <i class="feather icon-menu"></i>
                                                </span>
                                                <span class="pcoded-mtext">Deposito</span>
                                            </a>
                                        </li>
                                        <li class>
                                            <a href="{{route('widthdrawView')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon">
                                                    <i class="feather icon-menu"></i>
                                                </span>
                                                <span class="pcoded-mtext">Withdrawals</span>
                                            </a>
                                        </li>
                                        <li class>
                                            <a href="{{route('matchPay')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon">
                                                    <i class="feather icon-menu"></i>
                                                </span>
                                                <span class="pcoded-mtext">MATCH2PAY</span>
                                            </a>
                                        </li>
                                        <li class="pcoded-hasmenu">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                <span class="pcoded-micon">
                                                    <i class="feather icon-layers"></i>
                                                </span>
                                                <span class="pcoded-mtext">Actions</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class>
                                                    <a href="{{route('accRemoval')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Accounts Removal</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{route('tradingAc')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Trading Accounts</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{route('kycSite')}} " class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">KYC</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{route('moneyManager')}} " class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Money Managers</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{route('mailing')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Mailing</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="pcoded-hasmenu">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                <span class="pcoded-micon">
                                                    <i class="feather icon-layers"></i>
                                                </span>
                                                <span class="pcoded-mtext">IB</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class>
                                                    <a href="{{route('ibAcc')}} " class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">IB Accounts</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{route('commissionSetup')}} " class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Commissions Setup</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{route('ibCommission')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">IB Commissions</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{route('ibRequest')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">IB Requests</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{route('cpaProgram')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">CAP Program</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="pcoded-hasmenu">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                <span class="pcoded-micon">
                                                    <i class="feather icon-layers"></i>
                                                </span>
                                                <span class="pcoded-mtext">Reports</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class>
                                                    <a href="{{route('leadSource')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Lead Source</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{route('leadProvider')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Lead providers</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{route('accountManager')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Accounts Managers</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{route('ibReport')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">IB Report</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{route('cpaReport')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">CAP Report</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="pcoded-hasmenu">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                <span class="pcoded-micon">
                                                    <i class="feather icon-layers"></i>
                                                </span>
                                                <span class="pcoded-mtext">Configuration</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class>
                                                    <a href="{{route('oparation')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Operation</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{route('offers')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Offers</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{route('paymentGateway')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Payment Gateways</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{route('branchandUser')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Branches & users</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{route('kyc')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">KYC</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{route('rolesManagement')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Roles Management</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{route('mlib')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">MLIB</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{route('banner')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Banners</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{route('poolManagement')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Pools Management</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{route('tramsConditions')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Terms & Conditions</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{route('leadStatus')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Lead Statuses</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{route('leadAssignment')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Lead Assigment</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{route('depositBonuse')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Deposit Bonuses</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{route('cashBack')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Cash Bank</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="pcoded-hasmenu">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                <span class="pcoded-micon">
                                                    <i class="feather icon-layers"></i>
                                                </span>
                                                <span class="pcoded-mtext">Logs</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class>
                                                    <a href="{{route('crmAudit')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">CRM Audit Logs</span>
                                                    </a>
                                                </li>
                                                <li class>
                                                    <a href="{{route('clientLog')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Client Logs</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>

                        <div class="pcoded-content">
                            <div class="pcoded-inner-content">
                                <div class="main-body">
                                    <div class="page-wrapper">
                                        <div class="page-body">
                                            <div class="row">
                                                @yield('body')
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="styleSelector"></div>
                    </div>
                </div>
            </div>
        </div>

        <!--[if lt IE 10]>
            <div class="ie-warning">
                <h1>Warning!!</h1>
                <p>
                    You are using an outdated version of Internet Explorer, please upgrade <br />
                    to any of the following web browsers to access this website.
                </p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="./files/assets/images/browser/chrome.png" alt="Chrome" />
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="./files/assets/images/browser/firefox.png" alt="Firefox" />
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="./files/assets/images/browser/opera.png" alt="Opera" />
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="./files/assets/images/browser/safari.png" alt="Safari" />
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="./files/assets/images/browser/ie.png" alt="" />
                                <div>IE (9 & above)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
        <![endif]-->
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

        <!-- Bootstrap 4 (load this BEFORE DataTables’ BS4 adapter) -->
        <script type="text/javascript" src="{{asset('public/admindek-html/')}}/files/bower_components/popper.js/js/popper.min.js"></script>
        <script type="text/javascript" src="{{asset('public/admindek-html/')}}/files/bower_components/bootstrap/js/bootstrap.min.js"></script>

        <!-- DataTables core + Bootstrap 4 integration -->
        <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap4.min.js"></script>
        <!-- DataTables Buttons -->
        <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>
        <!-- DataTables Responsive -->
        <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap4.min.js"></script>


        <script src="{{asset('public/admindek-html/')}}/files/assets/pages/waves/js/waves.min.js"></script>

        <script type="text/javascript" src="{{asset('public/admindek-html/')}}/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

        

        <script src="{{asset('public/admindek-html/')}}/files/bower_components/chartist/js/chartist.js"></script>

        <script src="{{asset('public/admindek-html/')}}/files/assets/pages/widget/amchart/amcharts.js"></script>
        <script src="{{asset('public/admindek-html/')}}/files/assets/pages/widget/amchart/serial.js"></script>
        <script src="{{asset('public/admindek-html/')}}/files/assets/pages/widget/amchart/light.js"></script>

        <script src="{{asset('public/admindek-html/')}}/files/assets/js/pcoded.min.js"></script>
        <script src="{{asset('public/admindek-html/')}}/files/assets/js/vertical/vertical-layout.min.js"></script>
        <script type="text/javascript" src="{{asset('public/admindek-html/')}}/files/assets/js/script.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js" integrity="sha512-FHZVRMUW9FsXobt+ONiix6Z0tIkxvQfxtCSirkKc5Sb4TKHmqq1dZa8DphF0XqKb3ldLu/wgMa8mT6uXiLlRlw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
$(document).ready(function() {
    // Common DataTables configuration
    var dtConfig = {
        paging: true,
        searching: true,
        ordering: true,
        info: true,
        lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        pageLength: 25,
        responsive: {
            details: {
                type: 'column',
                target: 'tr'
            },
            breakpoints: [
                { name: 'bigdesktop', width: Infinity },
                { name: 'meddesktop', width: 1480 },
                { name: 'desktop', width: 1024 },
                { name: 'tablet', width: 768 },
                { name: 'fablet', width: 480 },
                { name: 'phone', width: 320 }
            ]
        },
        autoWidth: false,
        scrollX: true,
        scrollCollapse: true,
        processing: true,
        stateSave: true,
        language: {
            search: "Search:",
            lengthMenu: "Show _MENU_ entries",
            info: "Showing _START_ to _END_ of _TOTAL_ entries",
            infoEmpty: "No entries available",
            infoFiltered: "(filtered from _MAX_ total entries)",
            zeroRecords: "No matching records found",
            emptyTable: "No data available in table",
            processing: "Processing...",
            paginate: {
                first: "First",
                last: "Last",
                next: "Next",
                previous: "Previous"
            }
        },
        dom: '<"row"<"col-sm-12 col-md-4"l><"col-sm-12 col-md-4 text-center"B><"col-sm-12 col-md-4"f>>' +
             '<"row"<"col-sm-12"tr>>' +
             '<"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>',
        buttons: {
            dom: {
                button: {
                    className: 'btn btn-sm'
                },
                collection: {
                    className: 'btn-group'
                },
                container: {
                    className: 'dt-buttons btn-group flex-wrap'
                }
            },
            buttons: [
                {
                    extend: 'collection',
                    text: '<i class="fa fa-download"></i> Export',
                    className: 'btn btn-sm btn-primary dropdown-toggle',
                    buttons: [
                        {
                            extend: 'copy',
                            text: '<i class="fa fa-copy"></i> Copy to Clipboard',
                            className: 'btn btn-sm btn-info',
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        {
                            extend: 'csv',
                            text: '<i class="fa fa-file-csv"></i> Export CSV',
                            className: 'btn btn-sm btn-success',
                            filename: function() {
                                return 'leads_export_' + new Date().getFullYear() + '-' + 
                                       (new Date().getMonth() + 1) + '-' + new Date().getDate();
                            },
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        {
                            extend: 'excel',
                            text: '<i class="fa fa-file-excel"></i> Export Excel',
                            className: 'btn btn-sm btn-success',
                            filename: function() {
                                return 'leads_export_' + new Date().getFullYear() + '-' + 
                                       (new Date().getMonth() + 1) + '-' + new Date().getDate();
                            },
                            exportOptions: {
                                columns: ':visible'
                            },
                            customize: function(xlsx) {
                                var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                // Add custom styling for Excel export
                                $('row c[r^="A"]', sheet).attr('s', '7');
                            }
                        },
                        {
                            extend: 'pdf',
                            text: '<i class="fa fa-file-pdf"></i> Export PDF',
                            className: 'btn btn-sm btn-danger',
                            filename: function() {
                                return 'leads_export_' + new Date().getFullYear() + '-' + 
                                       (new Date().getMonth() + 1) + '-' + new Date().getDate();
                            },
                            exportOptions: {
                                columns: ':visible'
                            },
                            customize: function(doc) {
                                doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                                doc.defaultStyle.fontSize = 8;
                                doc.styles.tableHeader.fontSize = 9;
                                doc.styles.tableHeader.fillColor = '#007bff';
                                doc.pageOrientation = 'landscape';
                                doc.pageSize = 'A4';
                            }
                        }
                    ]
                },
                {
                    extend: 'print',
                    text: '<i class="fa fa-print"></i> Print',
                    className: 'btn btn-sm btn-warning',
                    exportOptions: {
                        columns: ':visible'
                    },
                    customize: function(win) {
                        $(win.document.body)
                            .css('font-size', '10pt')
                            .prepend('<div><h3>Leads Report - Generated on ' + new Date().toLocaleDateString() + '</h3></div>');
                        
                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', '9pt');
                    }
                },
                {
                    extend: 'colvis',
                    text: '<i class="fa fa-columns"></i> Columns',
                    className: 'btn btn-sm btn-secondary',
                    columnText: function(dt, idx, title) {
                        return (idx + 1) + ': ' + title;
                    }
                },
                {
                    text: '<i class="fa fa-refresh"></i> Refresh',
                    className: 'btn btn-sm btn-info',
                    action: function(e, dt, node, config) {
                        dt.ajax.reload();
                    }
                }
            ]
        }
    };

    // Initialize DataTables for specific tables
    var tables = {
        // Main data tables
        '#leadsTable': dtConfig,
        '#clientsTable': dtConfig,
        '#tradingTable': dtConfig,
        '#depositsTable': dtConfig,  // Global deposits table (not client-specific)
        '#withdrawalsTable': dtConfig,  // Global withdrawals table (not client-specific)
        
        // Configuration tables
        '#rolesTable': dtConfig,
        '#offersTable': dtConfig,
        '#operationsTable': dtConfig,
        '#paymentGatewayTable': dtConfig,
        '#leadStatusTable': dtConfig,
        '#poolManagementTable': dtConfig,
        '#bonusTable': dtConfig,
        
        // Action tables
        '#accountRemovalTable': dtConfig,
        '#tradingAccountTable': dtConfig,
        '#moneyManagerTable': dtConfig,
        '#mailingTable': dtConfig,
        
        // Legacy table
        '#myTable': dtConfig
    };

    // Initialize all tables
    $.each(tables, function(selector, config) {
        if ($(selector).length) {
            var table = $(selector).DataTable(config);
            
            // Per-column search functionality
            table.columns().every(function(idx) {
                var col = this;
                $('thead th:eq(' + idx + ') input, thead td:eq(' + idx + ') input')
                    .on('keyup change clear', function() {
                        if (col.search() !== this.value) {
                            col.search(this.value).draw();
                        }
                    })
                    .on('click', function(e) {
                        e.stopPropagation();
                    });
            });
        }
    });

    // Global search enhancement
    $('.dataTables_filter input').attr('placeholder', 'Search all columns...');
    
    // Column Visibility Functionality
    window.initializeColumnVisibility = function(tableId) {
        var table = $(tableId).DataTable();
        var modal = $('#columnVisibilityModal');
        var togglesContainer = $('#columnToggles');
        
        // Generate column toggles
        function generateColumnToggles() {
            togglesContainer.empty();
            table.columns().every(function(index) {
                var column = this;
                var header = $(column.header());
                var columnName = header.text().trim() || header.find('span').first().text().trim() || 'Column ' + (index + 1);
                
                // Skip the first column (checkbox) from being toggled
                if (index === 0) return;
                
                var isVisible = column.visible();
                var toggleHtml = `
                    <div class="col-md-4 col-sm-6 mb-2">
                        <div class="form-check">
                            <input class="form-check-input column-toggle" type="checkbox" 
                                   data-column="${index}" ${isVisible ? 'checked' : ''} 
                                   id="col_${index}">
                            <label class="form-check-label" for="col_${index}">
                                ${columnName}
                            </label>
                        </div>
                    </div>
                `;
                togglesContainer.append(toggleHtml);
            });
        }
        
        // Show All Columns
        $('#showAllColumns').on('click', function() {
            $('.column-toggle').prop('checked', true);
        });
        
        // Hide All Columns  
        $('#hideAllColumns').on('click', function() {
            $('.column-toggle').prop('checked', false);
        });
        
        // Reset to Default
        $('#resetColumns').on('click', function() {
            // Reset to default visibility (show first 8 columns, hide the rest)
            $('.column-toggle').each(function(index) {
                $(this).prop('checked', index < 7);
            });
        });
        
        // Apply Column Settings
        $('#applyColumnSettings').on('click', function() {
            $('.column-toggle').each(function() {
                var columnIndex = $(this).data('column');
                var isChecked = $(this).is(':checked');
                table.column(columnIndex).visible(isChecked);
            });
            modal.modal('hide');
            
            // Save settings to localStorage
            var visibilitySettings = {};
            $('.column-toggle').each(function() {
                visibilitySettings[$(this).data('column')] = $(this).is(':checked');
            });
            localStorage.setItem(tableId + '_columnVisibility', JSON.stringify(visibilitySettings));
        });
        
        // Load saved settings
        function loadColumnSettings() {
            var savedSettings = localStorage.getItem(tableId + '_columnVisibility');
            if (savedSettings) {
                var settings = JSON.parse(savedSettings);
                Object.keys(settings).forEach(function(columnIndex) {
                    table.column(parseInt(columnIndex)).visible(settings[columnIndex]);
                });
            }
        }
        
        // Initialize when modal is shown
        modal.on('show.bs.modal', function() {
            generateColumnToggles();
        });
        
        // Load saved settings on initialization
        loadColumnSettings();
    };
    
    // Initialize column visibility for leads table
    if ($('#leadsTable').length) {
        setTimeout(function() {
            initializeColumnVisibility('#leadsTable');
            
            // Update record count
            var table = $('#leadsTable').DataTable();
            $('#totalRecords').text(table.data().length + ' records');
            
            // Update count on search/filter
            table.on('search.dt draw.dt', function() {
                var info = table.page.info();
                $('#totalRecords').text(info.recordsDisplay + ' of ' + info.recordsTotal + ' records');
            });
        }, 100);
    }
    
    // Enhanced mobile menu for DataTables
    $(window).on('resize', function() {
        $('.dataTable').each(function() {
            if ($(this).hasClass('dataTable')) {
                $(this).DataTable().columns.adjust().responsive.recalc();
            }
        });
    });
    
    // Add loading indicator
    $('.dataTables_processing').html('<i class="fa fa-spinner fa-spin"></i> Loading...');
    
    // Custom styling for buttons
    setTimeout(function() {
        $('.dt-buttons').addClass('mb-3');
        $('.dataTables_wrapper').addClass('mt-3');
        $('.dataTables_filter input').addClass('form-control-sm');
        $('.dataTables_length select').addClass('form-control-sm');
    }, 200);
});
</script>
    </body>
</html>