<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\leadControl;
use App\Http\Controllers\configurationControl;
use App\Http\Controllers\logsControl;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[
    'uses'  => 'salesControl@salesCon',
    'as'    => 'salesCon'
]);

Route::get('/broker_analytics',[
    'uses'  => 'brokerControl@brokerCon',
    'as'    => 'brokerCon'
]);

Route::get('/addd',[
    'uses'  => 'mainControl@select',
    'as'    => 'select'
]);

//sales site

//seals page str
Route::get('/sales_dashbord',[
    'uses'  => 'salesControl@salesCon',
    'as'    => 'salesCon'
]);
//seals page end

//taskForm str
Route::get('/sales_dashbord/tasks',[
    'uses'  => 'salesControl@taskForm',
    'as'    => 'taskForm'
]);
//taskForm end

//**client Dashbord str */
// client profile str
Route::get('/sales_dashbord/client/profile/{email}',[
    'uses'  => 'salesControl@clientProfile',
    'as'    => 'clientProfile'
]);
// client profile end

//offfer form str 
Route::get('/sales_dashbord/client/edit-offer',[
    'uses'  => 'salesControl@offerForm',
    'as'    => 'offerForm'
]);
//offer form end

//addTradingAccount str
Route::get('/sales_dashbord/client/add_trading_acconut',[
    'uses'  => 'salesControl@addTradingAcc',
    'as'    => 'addTradingAcc'
]);
//addTradingAcc end

//addDepositAcc str
Route::get('/sales_dashbord/client/add_deposite_acconut',[
    'uses'  => 'salesControl@addDepositAcc',
    'as'    => 'addDepositAcc'
]);
//addDepositAcc end

//addWidthdrawAcc str
Route::get('/sales_dashbord/client/add_widthdraw_acconut',[
    'uses'  => 'salesControl@addWidthdrawAcc',
    'as'    => 'addWidthdrawAcc'
]);
//addWidthdrawAcc end

//trandingAccountDetail str
Route::get('/sales_dashbord/client/trading-account-detail',[
    'uses'  => 'salesControl@trandingAccountDetail',
    'as'    => 'trandingAccountDetail'
]);
//trandingAccountDetail end

//depositRequest str
Route::get('/sales_dashbord/client/deposit_request',[
    'uses'  => 'salesControl@depositRequest',
    'as'    => 'depositRequest'
]);
//depositRequest end

//depositPayment str
Route::get('/sales_dashbord/client/deposit_payment_getway',[
    'uses'  => 'salesControl@depositPayment',
    'as'    => 'depositPayment'
]);
//depositPayment end

//widthdrawRequest etr
Route::get('/sales_dashbord/client/widthdraw_request',[
    'uses'  => 'salesControl@widthdrawRequest',
    'as'    => 'widthdrawRequest'
]);
//widthdrawRequest end

//widthdrawPayment str
Route::get('/sales_dashbord/client/widthdraw_payment_getway',[
    'uses'  => 'salesControl@widthdrawPayment',
    'as'    => 'widthdrawPayment'
]);
//widthdrawPayment end


//**client Dashbord end */
//end


//client site
Route::get('/clients_dashbord',[
    'uses'  => 'clientControl@client',
    'as'    => 'client'
]);

Route::get('/add_client',[
    'uses'  => 'clientControl@addclient',
    'as'    => 'addclient'
]);
//end

//leads str
Route::get('/lead_dashbord',[
    'uses'  => 'leadControl@leads',
    'as'    => 'leads'
]);
Route::get('/add_lead',[
    'uses'  => 'leadControl@addLead',
    'as'    => 'addLead'
]);

Route::post('save-lead',[
    leadControl::class,
    'saveLead'
])->name('saveLead');
//leads end

//trading str
Route::get('/trading_site',[
    'uses'  => 'tradingControl@tradingView',
    'as'    => 'tradingView'
]);
Route::get('/add_trading',[
    'uses'  => 'tradingControl@addTrading',
    'as'    => 'addTrading'
]);
Route::get('/trading_diposit',[
    'uses'  => 'tradingControl@tradingDepo',
    'as'    => 'tradingDepo'
]);
Route::get('/trading_widthdarw',[
    'uses'  => 'tradingControl@tradingWidth',
    'as'    => 'tradingWidth'
]);

//tradingAccountDetailes str
Route::get('/trading-account-detailes',[
    'uses'  => 'tradingControl@tradingAccountDetailes',
    'as'    => 'tradingAccountDetailes'
]);
//tradingAccountDetailes end

//tradingOffer str
Route::get('/trading-offer',[
    'uses'  => 'tradingControl@tradingOffer',
    'as'    => 'tradingOffer'
]);
//tradingOffer end
//trading end

//deposit str
Route::get('/deposit_site',[
    'uses'  => 'depositControl@depositView',
    'as'    => 'depositView'
]);
Route::get('/add_deposit',[
    'uses'  => 'depositControl@depositadd',
    'as'    => 'depositadd'
]);
Route::get('/deposit_detailes',[
    'uses'  => 'depositControl@detailesDeposit',
    'as'    => 'detailesDeposit'
]);

Route::get('/deposit-payment-gateway',[
    'uses'  => 'depositControl@DipoPaymentGte',
    'as'    => 'DipoPaymentGte'
]);


//deposit ENd

//bankform str
Route::get('/payment_gateway',[
    'uses'  => 'bankControl@paymentGte',
    'as'    => 'paymentGte'
]);


// Route::get('/payment_gaetway',[
//     'uses'  => 'bankControl@paymentGteW',
//     'as'    => 'paymentGteW'
// ]);
//bankform end

//widthdraw str
Route::get('/widthdraw_site',[
    'uses'  => 'widthdrawControll@widthdrawView',
    'as'    => 'widthdrawView'
]);
Route::get('/add_widthdraw',[
    'uses'  => 'widthdrawControll@widthdrawAdd',
    'as'    => 'widthdrawAdd'
]);

//widthdrawDetailes str
Route::get('/widthdraw-detailes',[
    'uses'  => 'widthdrawControll@widthdrawDetailes',
    'as'    => 'widthdrawDetailes'
]);
//widthdrawDetailes end

Route::get('/widthdraw-payment-gateway',[
    'uses'  => 'widthdrawControll@widthdrawPaymentGet',
    'as'    => 'widthdrawPaymentGet'
]);

//widthdraw End

//matchPay str
Route::get('/match2pay',[
    'uses'  => 'match2payControl@matchPay',
    'as'    => 'matchPay'
]);
//matchPay end

//action str===
//
Route::get('/account-removal-requests',[
    'uses'  => 'actionControl@accRemoval',
    'as'    => 'accRemoval'
]);

//trading part str--
Route::get('/trading-account-requests',[
    'uses'  => 'actionControl@tradingAc',
    'as'    => 'tradingAc'
]);

Route::get('/trading-branch-edit-form',[
    'uses'  => 'actionControl@branchEditform',
    'as'    => 'branchEditform'
]);

Route::get('/trading-account-request-form',[
    'uses'  => 'actionControl@tradingAcRqForm',
    'as'    => 'tradingAcRqForm'
]);
//trading part end--
//kyc str--
Route::get('/identity-verification-requests',[
    'uses'  => 'actionControl@kycSite',
    'as'    => 'kycSite'
]);
//kyc end--
//moneymanager srt--
Route::get('/money-managers-requests',[
    'uses'  => 'actionControl@moneyManager',
    'as'    => 'moneyManager'
]);
//moneymanagetr end--

//miling srt---
Route::get('/mailing',[
    'uses'  => 'actionControl@mailing',
    'as'    => 'mailing'
]);
//milin end---
//action end===ibAcc

//IB str===
//ib Account str---

Route::get('/ib-account',[
    'uses'  => 'ibControl@ibAcc',
    'as'    => 'ibAcc'
]);

Route::get('/commission-edit',[
    'uses'  => 'ibControl@commissionEditpage',
    'as'    => 'commissionEditpage'
]);
//ib Account end---

//commission setup str---
Route::get('/commissions-setup',[
    'uses'  => 'ibControl@commissionSetup',
    'as'    => 'commissionSetup'
]);

Route::get('/add-commissions-setup',[
    'uses'  => 'ibControl@addCommiissionSteupForm',
    'as'    => 'addCommiissionSteupForm'
]);
//commission setup end---

//ibCommission str
Route::get('/ib-commissions',[
    'uses'  => 'ibControl@ibCommission',
    'as'    => 'ibCommission'
]);
//ibCommission end

//ibRequest str
Route::get('/ib-request',[
    'uses'  => 'ibControl@ibRequest',
    'as'    => 'ibRequest'
]);
//ibRequest end

//cpaProgram str
Route::get('/cpa-program',[
    'uses'  => 'ibControl@cpaProgram',
    'as'    => 'cpaProgram'
]);

Route::get('/add-cpa-program',[
    'uses'  => 'ibControl@addCpaProgram',
    'as'    => 'addCpaProgram'
]);

//cpaProgram end
//IB end===

//Report str
//leadSource str
Route::get('/lead-souirce',[
    'uses'  => 'reportControl@leadSource',
    'as'    => 'leadSource'
]);
//leadSource end

//leadProvider str
Route::get('/lead-provider',[
    'uses'  => 'reportControl@leadProvider',
    'as'    => 'leadProvider'
]);
//leadProvider end

//accountManager str
Route::get('/account-manager',[
    'uses'  => 'reportControl@accountManager',
    'as'    => 'accountManager'
]);
//accountManager end

//ibReport str
Route::get('/id-report',[
    'uses'  => 'reportControl@ibReport',
    'as'    => 'ibReport'
]);
//ibReport end

//cpareport str
Route::get('/cpa-report',[
    'uses'  => 'reportControl@cpaReport',
    'as'    => 'cpaReport'
]);
//cpareport end
//Report end

//configuration str
//oparation str

Route::get('/configuration/oparation',[
    'uses'  => 'configurationControl@oparation', //Oparation view page
    'as'    => 'oparation'
]);

Route::get('/configuration/add-oparation',[
    'uses'  => 'configurationControl@addOparation', //addOparation view form
    'as'    => 'addOparation'
]);


Route::get('configuration/edit-oparation',[
    configurationControl::class,            //Edit Oparation form
    'editOparation'
])->name('editOparation');


Route::get('configuration/email-nonification-create',[
    configurationControl::class,                        //Email Notification Create
    'emailNotification'
])->name('emailNotification');

//oparation end

//offers str
Route::get('/configuration/offers',[
    'uses'  => 'configurationControl@offers',
    'as'    => 'offers'
]);

Route::get('/configuration/add-offer',[
    configurationControl::class,                  // Add offer form
    'addOffer'
])->name('addOffer');

//offers end

//paymentyGateway str
Route::get('/configuration/payment-gateway',[
    'uses'  => 'configurationControl@paymentGateway',
    'as'    => 'paymentGateway'
]);

Route::get('/configuration/add-payment-gateway',[
    configurationControl::class,                  //add-payment-gateway
    'addPaymentGateway'
])->name('addPaymentGateway');

Route::get('/configuration/edit-payment-gateway',[
    configurationControl::class,                  // edit-payment-gateway
    'editPaymentGateway'
])->name('editPaymentGateway');
//paymentyGateway end

//rolesManagement str
Route::get('/configuration/roles-management',[
    'uses'  => 'configurationControl@rolesManagement',  //rolse management page
    'as'    => 'rolesManagement'
]);

Route::get('/configuration/add-roles-management',[
    configurationControl::class,                        // ADD rolse management page
    'addRolesManagement'
])->name('addRolesManagement');

Route::get('/configuration/edit-roles-management',[
    configurationControl::class,                        // EDIT rolse management page
    'editRolesManagement'
])->name('editRolesManagement');
//rolesManagement end

//mlib str
Route::get('/configuration/MLIB',[
    'uses'  => 'configurationControl@mlib',
    'as'    => 'mlib'
]);
//mlib end

//banner str
Route::get('/configuration/banner',[
    configurationControl::class,                        //banner main poage
    'banner'
])->name('banner');

Route::get('/configuration/add-banner',[
    configurationControl::class,                        // Add banner page
    'addBanner'
])->name('addBanner');
//banner end

//poolManagement str

Route::get('/configuration/pool-management',[
    configurationControl::class,                        //poolManagement main page
    'poolManagement'
])->name('poolManagement');

Route::get('/configuration/add-pool-management',[
    configurationControl::class,                        // Add poolManagement page
    'addPoolManagement'
])->name('addPoolManagement');
//poolManagement end

//tramsConditions str

Route::get('/configuration/trams&conditions',[
    configurationControl::class,                         // trams & conditon mani page
    'tramsConditions'
])->name('tramsConditions');

Route::get('/configuration/add-trams&conditions',[
    configurationControl::class,                         // trams & conditon add page
    'addTramsConditions'
])->name('addTramsConditions');

Route::get('/configuration/edit-trams&conditions',[
    configurationControl::class,                         // trams & conditon edit page
    'editTramsConditions'
])->name('editTramsConditions');


//tramsConditions end

//leadStatus str

Route::get('/configuration/lead-status',[
    configurationControl::class,                         // lead status main page
    'leadStatus'
])->name('leadStatus');

Route::get('/configuration/add-lead-status',[
    configurationControl::class,                         // lead status add page
    'addLeadStatus'
])->name('addLeadStatus');

Route::get('/configuration/edit-lead-status',[
    configurationControl::class,                         // lead status edit page
    'editLeadStatus'
])->name('editLeadStatus');
//leadStatus end

//leadAssignment str
Route::get('/configuration/lead-assignment',[
    configurationControl::class,                         // lead assignment main page
    'leadAssignment'
])->name('leadAssignment');

Route::get('/configuration/add-lead-assignment',[
    configurationControl::class,                         // lead assignment add page
    'addLeadAssignment'
])->name('addLeadAssignment');

Route::get('/configuration/edit-lead-assignment',[
    configurationControl::class,                         // lead assignment edit page
    'editLeadAssignment'
])->name('editLeadAssignment');

//leadAssignment end

//depositBonuse str
Route::get('/configuration/deposit-bonuses',[
    configurationControl::class,                         // deposit bonuses main page
    'depositBonuse'
])->name('depositBonuse');

Route::get('/configuration/add-eposit-bonuses',[
    configurationControl::class,                         // deposit bonuses add page
    'addDepositBonuse'
])->name('addDepositBonuse');

Route::get('/configuration/edit-deposit-bonuses',[
    configurationControl::class,                         // deposit bonuses edit page
    'editDepositBonuse'
])->name('editDepositBonuse');

//depositBonuse end

//cashBack str

Route::get('/configuration/cashBack',[
    configurationControl::class,                         //   cash back main page
    'cashBack'
])->name('cashBack');


Route::get('/configuration/add-cashBack',[
    configurationControl::class,                         //   cash back add page
    'addCashBack'
])->name('addCashBack');


Route::get('/configuration/edit-cashBack',[
    configurationControl::class,                         //   cash back edit page
    'editCashBack'
])->name('editCashBack');
//cashBack end

//branchandUser str
Route::get('/configuration/branch&user',[
    'uses'  => 'configurationControl@branchandUser',   //barnch & user main page
    'as'    => 'branchandUser'
]);

Route::get('/configuration/branch&user/add-branch',[
    configurationControl::class,                       //add branch page
    'addBranch',
])->name('addBranch');

Route::get('/configuration/branch&user/edit-branch',[
    configurationControl::class,                        // edite branch
    'editBranch',
])->name('editBranch');

Route::get('/configuration/branch&user/add-user',[
    configurationControl::class,                        // add user
    'addUser',
])->name('addUser');
//branchandUserend

//kyc str
Route::get('/configuration/kyc',[
    'uses'  => 'configurationControl@kyc',
    'as'    => 'kyc'
]);
//kyc end
//configuration end

//logs styr
//crmAudit str
Route::get('/logs/crm-audit-logs',[
    logsControl::class,                        // audit log page
    'crmAudit',
])->name('crmAudit');


Route::get('/logs/crm-view-audit-logs',[
    logsControl::class,                        // view-audit log page
    'viewAuditlog',
])->name('viewAuditlog');

//crmAudit end

//clientLog str

Route::get('/logs/crm-cilent-logs',[
    logsControl::class,                        // client log page
    'clientLog',
])->name('clientLog');

Route::get('/logs/crm-view-cilent-log',[
    logsControl::class,                        // view-client log page
    'viewClienlog',
])->name('viewClienlog');
//clientLog end
// logs end