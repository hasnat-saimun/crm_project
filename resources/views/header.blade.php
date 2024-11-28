<!DOCTYPE html>
<html lang="en">
    <!-- Mirrored from demo.dashboardpack.com/admindek-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Sep 2024 12:31:23 GMT -->
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
        <!-- font owsam -->
        <script src="https://kit.fontawesome.com/32dcd4a478.js" crossorigin="anonymous"></script>
        <style>
            .report-white-font tr th{
                color: #fff !important;
            }
            .modal-backdrop {
                z-index: 100;
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

        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script type="text/javascript" src="{{asset('public/admindek-html/')}}/files/bower_components/jquery/js/jquery.min.js"></script>
        <script type="text/javascript" src="{{asset('public/admindek-html/')}}/files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="{{asset('public/admindek-html/')}}/files/bower_components/popper.js/js/popper.min.js"></script>
        <script type="text/javascript" src="{{asset('public/admindek-html/')}}/files/bower_components/bootstrap/js/bootstrap.min.js"></script>

        <script src="{{asset('public/admindek-html/')}}/files/assets/pages/waves/js/waves.min.js"></script>

        <script type="text/javascript" src="{{asset('public/admindek-html/')}}/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

        <script src="{{asset('public/admindek-html/')}}/files/assets/pages/chart/float/jquery.flot.js"></script>
        <script src="{{asset('public/admindek-html/')}}/files/assets/pages/chart/float/jquery.flot.categories.js"></script>
        <script src="{{asset('public/admindek-html/')}}/files/assets/pages/chart/float/curvedLines.js"></script>
        <script src="{{asset('public/admindek-html/')}}/files/assets/pages/chart/float/jquery.flot.tooltip.min.js"></script>

        <script src="{{asset('public/admindek-html/')}}/files/bower_components/chartist/js/chartist.js"></script>

        <script src="{{asset('public/admindek-html/')}}/files/assets/pages/widget/amchart/amcharts.js"></script>
        <script src="{{asset('public/admindek-html/')}}/files/assets/pages/widget/amchart/serial.js"></script>
        <script src="{{asset('public/admindek-html/')}}/files/assets/pages/widget/amchart/light.js"></script>

        <script src="{{asset('public/admindek-html/')}}/files/assets/js/pcoded.min.js"></script>
        <script src="{{asset('public/admindek-html/')}}/files/assets/js/vertical/vertical-layout.min.js"></script>
        <script type="text/javascript" src="{{asset('public/admindek-html/')}}/files/assets/pages/dashboard/custom-dashboard.min.js"></script>
        <script type="text/javascript" src="{{asset('public/admindek-html/')}}/files/assets/js/script.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js" integrity="sha512-FHZVRMUW9FsXobt+ONiix6Z0tIkxvQfxtCSirkKc5Sb4TKHmqq1dZa8DphF0XqKb3ldLu/wgMa8mT6uXiLlRlw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>

    <!-- Mirrored from demo.dashboardpack.com/admindek-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Sep 2024 12:32:14 GMT -->
</html>
@yield('adminContent')