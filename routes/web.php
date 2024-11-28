<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/sales_dashbord/client/profile',[
    'uses'  => 'salesControl@clientProfile',
    'as'    => 'clientProfile'
]);
// client profile end

//offfer form str 
Route::get('/sales_dashbord/client/offer',[
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
//ib Account end---

//commission setup str---
Route::get('/commissions-setup',[
    'uses'  => 'ibControl@commissionSetup',
    'as'    => 'commissionSetup'
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
    'uses'  => 'configurationControl@oparation',
    'as'    => 'oparation'
]);
//oparation end

//offers str
Route::get('/configuration/offers',[
    'uses'  => 'configurationControl@offers',
    'as'    => 'offers'
]);
//offers end

//paymentyGateway str
Route::get('/configuration/payment-gateway',[
    'uses'  => 'configurationControl@paymentGateway',
    'as'    => 'paymentGateway'
]);
//paymentyGateway end

//rolesManagement str
Route::get('/configuration/roles-management',[
    'uses'  => 'configurationControl@rolesManagement',
    'as'    => 'rolesManagement'
]);
//rolesManagement end

//mlib str
Route::get('/configuration/MLIB',[
    'uses'  => 'configurationControl@mlib',
    'as'    => 'mlib'
]);
//mlib end

//banner str
Route::get('/configuration/banners',[
    'uses'  => 'configurationControl@banner',
    'as'    => 'banner'
]);
//banner end

//poolManagement str
Route::get('/configuration/pool-management',[
    'uses'  => 'configurationControl@poolManagement',
    'as'    => 'poolManagement'
]);
//poolManagement end

//tramsConditions str
Route::get('/configuration/trams&conditions',[
    'uses'  => 'configurationControl@tramsConditions',
    'as'    => 'tramsConditions'
]);
//tramsConditions end

//leadStatus str
Route::get('/configuration/lead-status',[
    'uses'  => 'configurationControl@leadStatus',
    'as'    => 'leadStatus'
]);
//leadStatus end

//leadAssignment str
Route::get('/configuration/lead-assignment',[
    'uses'  => 'configurationControl@leadAssignment',
    'as'    => 'leadAssignment'
]);
//leadAssignment end

//depositBonuse str
Route::get('/configuration/deposit-bonuses',[
    'uses'  => 'configurationControl@depositBonuse',
    'as'    => 'depositBonuse'
]);
//depositBonuse end

//cashBack str
Route::get('/configuration/cashBack',[
    'uses'  => 'configurationControl@cashBack',
    'as'    => 'cashBack'
]);
//cashBack end

//branchandUser str
Route::get('/configuration/branch&user',[
    'uses'  => 'configurationControl@branchandUser',
    'as'    => 'branchandUser'
]);
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
    'uses'  => 'logsControl@crmAudit',
    'as'    => 'crmAudit'
]);
//crmAudit end

//clientLog str
route::get('/logs/cilent_logs',[
 'uses'=>'logsControl@clientLog',
 'as' => 'clientLog'
]);
//clientLog end
// logs end