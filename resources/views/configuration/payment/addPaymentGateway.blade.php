@extends('header') @section('header')
<div class="col-md-6 mt-4">
    <h3 class="fw-bolder text-uppercase">
        New payment gateway creation
    </h3>
</div>
<div class="col-md-6">
    <ul class="nav-right">
        <li>
            <a href="{{route('paymentGateway')}}">
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
                        <h5 class="fw-bolder ">Info</h5>
                    </div>
                </div>
                <div class="card-box">
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="" name="name" />
                        </div>
                        <div class="col-md-3">
                            <label for="actype" class="form-label">Icon</label>
                            <select id="actype" class="form-select">
                                <option value="islam">improsabank </option>
                                <option value="hindu">skrill </option>
                                <option value="cristian">VirtualPay</option>
                                <option value="cristian">kuveytturk</option>
                                <option value="cristian">tether</option>
                                <option value="cristian">TradoConnect</option>
                                <option value="cristian">bitcoin</option>
                                <option value="cristian">banka-transfer-default</option>
                                <option value="cristian">card_to_USDT_TRC20-v</option>
                                <option value="cristian">senhor-money</option>
                                <option value="cristian">qnb-finans</option>
                                <option value="cristian">revolut</option>
                                <option value="cristian">upi</option>
                                <option value="cristian">Help2Pay_PHP</option>
                                <option value="cristian">Visa-MC</option>
                                <option value="cristian">citibank</option>
                                <option value="cristian">Wise</option>
                                <option value="cristian">aifory</option>
                                <option value="cristian">whishmoney</option>
                                <option value="cristian">Noriapay</option>
                                <option value="cristian">payda</option>
                                <option value="cristian">Interac</option>
                                <option value="cristian">Tron</option>
                                <option value="cristian">wire-transfer</option>
                                <option value="cristian">Help2Pay_IDR</option>
                                <option value="cristian">Visa-MC-EURUSD</option>
                                <option value="cristian">internal-transfer</option>
                                <option value="cristian">go-digits</option>
                                <option value="cristian">card_to_USDT_TRC20-background</option>
                                <option value="cristian">USD_COIN</option>
                                <option value="cristian">Yoomoney</option>
                                <option value="cristian">halkbank</option>
                                <option value="cristian">abcPay</option>
                                <option value="cristian">akbank</option>
                                <option value="cristian">EBUY</option>
                                <option value="cristian">SkyCrypto</option>
                                <option value="cristian">neo-credit</option>
                                <option value="cristian">Tether-BEP20</option>
                                <option value="cristian">vietqr</option>
                                <option value="cristian">Visa-MC-RUBUAHKZTBYN</option>
                                <option value="cristian">WalaoPay</option>
                                <option value="cristian">EcstasyForex</option>
                                <option value="cristian">PerfectMoney-USD</option>
                                <option value="cristian">garanti-bbva</option>
                                <option value="cristian">Tether-TRC20</option>
                                <option value="cristian">qiwi</option>
                                <option value="cristian">Help2Pay_MYR</option>
                                <option value="cristian">ethereum</option>
                                <option value="cristian">VISA-MC-v2</option>
                                <option value="cristian">chase</option>
                                <option value="cristian">ocbc</option>
                                <option value="cristian">ExchangeMagix</option>
                                <option value="cristian">pay-tm</option>
                                <option value="cristian">vakŹfbank</option>
                                <option value="cristian">Tether-ERC20</option>
                                <option value="cristian">payretailers</option>
                                <option value="cristian">neteller</option>
                                <option value="cristian">access2</option>
                                <option value="cristian">btc-cc</option>
                                <option value="cristian">Help2Pay</option>
                                <option value="cristian">Help2Pay_THB</option>
                                <option value="cristian">neo-trade</option>
                                <option value="cristian">neo-token</option>
                                <option value="cristian">btc-wire</option>
                                <option value="cristian">Binance-USD</option>
                                <option value="cristian">turkiye-is-bankasi</option>
                                <option value="cristian">OnlineNaira</option>
                                <option value="cristian">Bolmafx-africa</option>
                                <option value="cristian">Help2Pay_VND</option>
                                <option value="cristian">deutsche-bank</option>
                                <option value="cristian">local-agent</option>
                                <option value="cristian">fasapay</option>
                                <option value="cristian">ZoePayments</option>
                                <option value="cristian">kbz-bank</option>
                                <option value="cristian">HRX</option>
                                <option value="cristian">rubpay</option>
                                <option value="cristian">AdvCash</option>
                                <option value="cristian">Chicode</option>
                                <option value="cristian">Thai_QR_Payment</option>
                                <option value="cristian">Local-Payment</option>
                                <option value="cristian">Zenith2</option>
                                <option value="cristian">PayPort</option>
                                <option value="cristian">BBVA</option>
                                <option value="cristian">AGS-africa</option>
                                <option value="cristian">Paytiko-cashiers-1</option>
                                <option value="cristian">ziraat-bankasi</option>
                                <option value="cristian">kotak</option>
                                <option value="cristian">BNB-Payment</option>
                                <option value="cristian">paypal</option>
                                <option value="cristian">yapikredi</option>
                                <option value="cristian">Payeer</option>
                                <option value="cristian">BNP-Paribas</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="actype" class="form-label">
                            Deposit operation</label>
                            <select id="actype" class="form-select">
                                <option value="islam">Real deposit  </option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="actype" class="form-label">Withdraw operation</label>
                            <select id="actype" class="form-select">
                                <option value="islam">Real withdraw </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <h5 class="fw-bolder ">Activation settings</h5>
                    </div>
                </div>
                <div class="card-box">
                    <div class="row mt-2">
                        <div class="col-md-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Active Deposit
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Active Widthdraw
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <h5 class="fw-bolder ">Payment settings</h5>
                    </div>
                </div>
                <div class="card-box">
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label for="actype" class="form-label">Currency </label>
                            <select id="actype" class="form-select">
                                <option value="islam">USD </option>
                                <option value="hindu">BUSD BEP-20 </option>
                                <option value="cristian">CHF</option>
                                <option value="cristian">DAI</option>
                                <option value="cristian">DOGECOIN</option>
                                <option value="cristian">ETH</option>
                                <option value="cristian">EUR</option>
                                <option value="cristian">GBP</option>
                                <option value="cristian">INR</option>
                                <option value="cristian">JPY</option>
                                <option value="cristian">LTC</option>
                                <option value="cristian">MATIC</option>
                                <option value="cristian">MXN</option>
                                <option value="cristian">NGN</option>
                                <option value="cristian">NRT</option>
                                <option value="cristian">PLN</option>
                                <option value="cristian">PLX</option>
                                <option value="cristian">SOL</option>
                                <option value="cristian">TON</option>
                                <option value="cristian">TRON</option>
                                <option value="cristian">USC</option>
                                <option value="cristian">USDC BEP-20</option>
                                <option value="cristian">USDC ERC-20</option>
                                <option value="cristian">USDC POLYGON</option>
                                <option value="cristian">USDC SOL</option>
                                <option value="cristian">USDC TRC-20</option>
                                <option value="cristian">USDT BEP-20</option>
                                <option value="cristian">USDT ERC-20</option>
                                <option value="cristian">USDT POLYGON</option>
                                <option value="cristian">USDT SOL</option>
                                <option value="cristian">USDT TON</option>
                                <option value="cristian">USDT TRC-20</option>
                                <option value="cristian">USG</option>
                                <option value="cristian">XRP</option>
                                <option value="cristian">ZAR</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="possingFree" class="form-label">
                            Processing Fee[%]</label>
                            <input type="number" class="form-control" id="possingFree" placeholder="" name="possingFree" />
                        </div>
                        <div class="col-md-3">
                            <label for="depoFree" class="form-label">Deposit Fee</label>
                            <input type="number" class="form-control" id="depoFree" placeholder="" name="depoFree" />
                        </div>
                        <div class="col-md-3">
                            <label for="widthFree" class="form-label">Withdraw Fee</label>
                            <input type="number" class="form-control" id="widthFree" placeholder="" name="widthFree" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        
                        <div class="col-md-3 mt-2">
                            <label for="minAmount" class="form-label">Min amount</label>
                            <input type="number" class="form-control" id="minAmount" placeholder="" name="minAmount" />
                        </div>
                        <div class="col-md-3 mt-2">
                            <label for="maxAmount" class="form-label">Max amount</label>
                            <input type="number" class="form-control" id="maxAmount" placeholder="" name="maxAmount" />
                        </div>
                        <div class="col-md-3 mt-2">
                        <label for="supportedCurrency" class="form-label">Supported fiat currency</label>
                            <select id="supportedCurrency" name="supportedCurrency" class="form-select">
                                <option value="islam">FJD </option>
                                <option value="hindu">MXN</option>
                                <option value="cristian">ZAR</option>
                                <option value="cristian">LBP</option>
                                <option value="cristian">TJS</option>
                                <option value="cristian">JOD</option>
                                <option value="cristian">HKD</option>
                                <option value="cristian">RWF</option>
                                <option value="cristian">EUR</option>
                                <option value="cristian">LSL</option>
                                <option value="cristian">DKK</option>
                                <option value="cristian">CAD</option>
                                <option value="cristian">BGN</option>
                                <option value="cristian">TND</option>
                                <option value="cristian">BOV</option>
                                <option value="cristian">MMK</option>
                                <option value="cristian">MUR</option>
                                <option value="cristian">NOK</option>
                                <option value="cristian">SYP</option>
                                <option value="cristian">GIP</option>
                                <option value="cristian">RON</option>
                                <option value="cristian">LKR</option>
                                <option value="cristian">NGN</option>
                                <option value="cristian">CRC</option>
                                <option value="cristian">STN</option>
                                <option value="cristian">CZK</option>
                                <option value="cristian">PKR</option>
                                <option value="cristian">ANG</option>
                                <option value="cristian">HTG</option>
                                <option value="cristian">BHD</option>
                                <option value="cristian">KZT</option>
                                <option value="cristian">SRD</option>
                                <option value="cristian">SZL</option>
                                <option value="cristian">SAR</option>
                                <option value="cristian">SLE</option>
                                <option value="cristian">YER</option>
                                <option value="cristian">MVR</option>
                                <option value="cristian">AFN</option>
                                <option value="cristian">INR</option>
                                <option value="cristian">AWG</option>
                                <option value="cristian">KRW</option>
                                <option value="cristian">NPR</option>
                                <option value="cristian">JPY</option>
                                <option value="cristian">MNT</option>
                                <option value="cristian">AOA</option>
                                <option value="cristian">CUC</option>
                                <option value="cristian">PLN</option>
                                <option value="cristian">GBP</option>
                                <option value="cristian">SBD</option>
                                <option value="cristian">BYN</option>
                                <option value="cristian">HUF</option>
                                <option value="cristian">BIF</option>
                                <option value="cristian">MWK</option>
                                <option value="cristian">MGA</option>
                                <option value="cristian">BZD</option>
                                <option value="cristian">MOP</option>
                                <option value="cristian">EGP</option>
                                <option value="cristian">NAD</option>
                                <option value="cristian">NIO</option>
                                <option value="cristian">PEN</option>
                                <option value="cristian">NZD</option>
                                <option value="cristian">WST</option>
                                <option value="cristian">TMT</option>
                                <option value="cristian">CLF</option>
                                <option value="cristian">SLL</option>
                                <option value="cristian">BRL</option>
                                <option value="cristian">BZD</option>
                                <option value="cristian">SDG</option>
                                <option value="cristian">IQD</option>
                                <option value="cristian">CUP</option>
                                <option value="cristian">SCR</option>
                                <option value="cristian">GMD</option>
                                <option value="cristian">TWD</option>
                                <option value="cristian">RSD</option>
                                <option value="cristian">DOP</option>
                                <option value="cristian">UYI</option>
                                <option value="cristian">KMF</option>
                                <option value="cristian">MYR</option>
                                <option value="cristian">FKP</option>
                                <option value="cristian">GEL</option>
                                <option value="cristian">UYU</option>
                                <option value="cristian">CDF</option>
                                <option value="cristian">MAD</option>
                                <option value="cristian">UYW</option>
                                <option value="cristian">CVE</option>
                                <option value="cristian">UYW</option>
                                <option value="cristian">TOP</option>
                                <option value="cristian">AZN</option>
                                <option value="cristian">OMR</option>
                                <option value="cristian">PGK</option>
                                <option value="cristian">UKES</option>
                                <option value="cristian">SEK</option>
                                <option value="cristian">BTN</option>
                                <option value="cristian">BBD</option>
                                <option value="cristian">UAH</option>
                                <option value="cristian">GNF</option>
                                <option value="cristian">ERN</option>
                                <option value="cristian">MZN</option>
                                <option value="cristian">SVC</option>
                                <option value="cristian">ARS</option>
                                <option value="cristian">QAR</option>
                                <option value="cristian">IRR</option>
                                <option value="cristian">THB</option>
                                <option value="cristian">GTQ</option>
                                <option value="cristian">UZS</option>
                                <option value="cristian">MRU</option>
                                <option value="cristian">BDT</option>
                                <option value="cristian">LYD</option>
                                <option value="cristian">BMD</option>
                                <option value="cristian">KWD</option>
                                <option value="cristian">PHP</option>
                                <option value="cristian">RUB</option>
                                <option value="cristian">PYG</option>
                                <option value="cristian">ISK</option>
                                <option value="cristian">CLP</option>
                                <option value="cristian">JMD</option>
                                <option value="cristian">COP</option>
                                <option value="cristian">MKD</option>
                                <option value="cristian">COU</option>
                                <option value="cristian">DZD</option>
                                <option value="cristian">PAB</option>
                                <option value="cristian">SGD</option>
                                <option value="cristian">USN</option>
                                <option value="cristian">USD</option>
                                <option value="cristian">ETB</option>
                                <option value="cristian">HNL</option>
                                <option value="cristian">VED</option>
                                <option value="cristian">KGS</option>
                                <option value="cristian">SOS</option>
                                <option value="cristian">VUV</option>
                                <option value="cristian">LAK</option>
                                <option value="cristian">BND</option>
                                <option value="cristian">LRD</option>
                                <option value="cristian">CHF</option>
                                <option value="cristian">CHE</option>
                                <option value="cristian">UGX</option>
                                <option value="cristian">DJF</option>
                                <option value="cristian">VES</option>
                                <option value="cristian">ZMW</option>
                                <option value="cristian">TZS</option>
                                <option value="cristian">VND</option>
                                <option value="cristian">AUD</option>
                                <option value="cristian">CHW</option>
                                <option value="cristian">GHS</option>
                                <option value="cristian">GYD</option>
                                <option value="cristian">MXV</option>
                                <option value="cristian">KPW</option>
                                <option value="cristian">BOB</option>
                                <option value="cristian">KHR</option>
                                <option value="cristian">MDL</option>
                                <option value="cristian">IDR</option>
                                <option value="cristian">KYD</option>
                                <option value="cristian">AMD</option>
                                <option value="cristian">BWP</option>
                                <option value="cristian">SHP</option>
                                <option value="cristian">TRY</option>
                            </select>
                        </div>
                        <div class="col-md-3 mt-2">
                            <label for="supportedCountries" class="form-label">Supported countries</label>
                            <select id="supportedCountries" name="supportedCountries" class="form-control selectpicker" multiple aria-label="size 3 select example">
                                <option value="islam">Afghanistan </option>
                                <option value="hindu">Åland Islands</option>
                                <option value="cristian">Albania</option>
                                <option value="cristian">Algeria</option>
                                <option value="cristian">American Samoa</option>
                                <option value="cristian">Andorra</option>
                                <option value="cristian">Angola</option>
                                <option value="cristian">Anguilla</option>
                                <option value="cristian">Antarctica</option>
                                <option value="cristian">Antigua and Barbuda</option>
                                <option value="cristian">Argentina</option>
                                <option value="cristian">Armenia</option>
                                <option value="cristian">Armenia</option>
                                <option value="cristian">Australia</option>
                                <option value="cristian">Austria</option>
                                <option value="cristian">Azerbaijan</option>
                                <option value="cristian">Azerbaijan</option>
                                <option value="cristian">Bahrain</option>
                                <option value="cristian">Bangladesh</option>
                                <option value="cristian">Barbados</option>
                                <option value="cristian">Belarus</option>
                                <option value="cristian">Belgium</option>
                                <option value="cristian">Belize</option>
                                <option value="cristian">Benin</option>
                                <option value="cristian">Bermuda</option>
                                <option value="cristian">Bhutan</option>
                                <option value="cristian">Bolivia</option>
                                <option value="cristian">Bosnia and Herzegovina</option>
                                <option value="cristian">Botswana</option>
                                <option value="cristian">Bouvet Island</option>
                                <option value="cristian">Brazil</option>
                                <option value="cristian"> British Indian Ocean Territory</option>
                                <option value="cristian">Brunei Darussalam</option>
                                <option value="cristian">Bulgaria</option>
                                <option value="cristian">Burkina Faso</option>
                                <option value="cristian">Burundi</option>
                                <option value="cristian">Cambodia</option>
                                <option value="cristian">Cameroon</option>
                                <option value="cristian">Canada</option>
                                <option value="cristian">Cape Verde</option>
                                <option value="cristian">Cayman Islands</option>
                                <option value="cristian">Central African Republic</option>
                                <option value="cristian">Chad</option>
                                <option value="cristian">Chile</option>
                                <option value="cristian">China</option>
                                <option value="cristian">Christmas Island</option>
                                <option value="cristian">Cocos (Keeling) Islands</option>
                                <option value="cristian">Colombia</option>
                                <option value="cristian">Comoros</option>
                                <option value="cristian">Congo</option>
                                <option value="cristian">Congo, The Democratic Republic of the
                                    Cook Islands</option>
                                <option value="cristian">Cook Islands</option>
                                <option value="cristian">Costa Rica</option>
                                <option value="cristian">Côte d'Ivoire</option>
                                <option value="cristian">Croatia</option>
                                <option value="cristian">Cuba</option>
                                <option value="cristian">Cyprus</option>
                                <option value="cristian">Czech Republic</option>
                                <option value="cristian">Denmark</option>
                                <option value="cristian">Djibouti</option>
                                <option value="cristian">Dominica</option>
                                <option value="cristian">Dominican Republic</option>
                                <option value="cristian">Ecuador</option>
                                <option value="cristian">Egypt</option>
                                <option value="cristian">El Salvador</option>
                                <option value="cristian">Equatorial Guinea</option>
                                <option value="cristian">Eritrea</option>
                                <option value="cristian">Estonia</option>
                                <option value="cristian">Ethiopia</option>
                                <option value="cristian"> Falkland Islands (Malvinas)</option>
                                <option value="cristian">Faroe Islands</option>
                                <option value="cristian">Fiji</option>
                                <option value="cristian">Finland</option>
                                <option value="cristian">France</option>
                                <option value="cristian">French Guiana</option>
                                <option value="cristian">French Polynesia</option>
                                <option value="cristian">French Southern Ter</option>
                                <option value="cristian">Gabon</option>
                                <option value="cristian">Gambia</option>
                                <option value="cristian">Georgia</option>
                                <option value="cristian">Germany</option>
                                <option value="cristian">Ghana</option>
                                <option value="cristian">Gibraltar</option>
                                <option value="cristian">Greece</option>
                                <option value="cristian">Greenland</option>
                                <option value="cristian">Grenada</option>
                                <option value="cristian">Guadeloupe</option>
                                <option value="cristian">Guam</option>
                                <option value="cristian">Guatemala</option>
                                <option value="cristian">Guernsey</option>
                                <option value="cristian">Guinea</option>
                                <option value="cristian">Guinea-Bissau</option>
                                <option value="cristian">Guyana</option>
                                <option value="cristian">Haiti</option>
                                <option value="cristian">Heard Island and Mcdonald Islands</option>
                                <option value="cristian">Holy See (Vatican City State)</option>
                                <option value="cristian">Honduras</option>
                                <option value="cristian">Hong Kong</option>
                                <option value="cristian">Hungary</option>
                                <option value="cristian">Iceland</option>
                                <option value="cristian">India</option>
                                <option value="cristian">Indonesia</option>
                                <option value="cristian">Iran, Islamic Republic Of</option>
                                <option value="cristian">Iraq</option>
                                <option value="cristian">Ireland</option>
                                <option value="cristian">Isle of Man</option>
                                <option value="cristian">Israel</option>
                                <option value="cristian">Italy</option>
                                <option value="cristian">Jamaica</option>
                                <option value="cristian">Japan</option>
                                <option value="cristian">Jersey</option>
                                <option value="cristian">Jordan</option>
                                <option value="cristian">Kazakhstan</option>
                                <option value="cristian">Kenya</option>
                                <option value="cristian">Kiribati</option>
                                <option value="cristian">Korea, Democratic People's Republic of</option>
                                <option value="cristian">Korea, Republic of</option>
                                <option value="cristian">Kuwait</option>
                                <option value="cristian">Kyrgyzstan</option>
                                <option value="cristian">Lao People's Democratic Republic</option>
                                <option value="cristian">Latvia</option>
                                <option value="cristian">Lebanon</option>
                                <option value="cristian">Lesotho</option>
                                <option value="cristian">Liberia</option>
                                <option value="cristian">Libyan Arab Jamahiriya</option>
                                <option value="cristian">Liechtenstein</option>
                                <option value="cristian">Lithuania</option>
                                <option value="cristian">Luxembourg</option>
                                <option value="cristian">Macao</option>
                                <option value="cristian">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="cristian">Madagascar</option>
                                <option value="cristian">Malawi</option>
                                <option value="cristian">Malaysia</option>
                                <option value="cristian">Maldives</option>
                                <option value="cristian">Mali</option>
                                <option value="cristian">Malta</option>
                                <option value="cristian">Marshall Islands</option>
                                <option value="cristian">Martinique</option>
                                <option value="cristian">Mauritania</option>
                                <option value="cristian">Mayotte</option>
                                <option value="cristian">Mexico</option>
                                <option value="cristian">Micronesia, Federated States of</option>
                                <option value="cristian">Moldova, Republic of</option>
                                <option value="cristian">Mongolia</option>
                                <option value="cristian">Montenegro</option>
                                <option value="cristian">Montserrat</option>
                                <option value="cristian">Montserrat</option>
                                <option value="cristian">Mozambique</option>
                                <option value="cristian">Myanmar</option>
                                <option value="cristian">Namibia</option>
                                <option value="cristian">Nauru</option>
                                <option value="cristian">Nepal</option>
                                <option value="cristian">Netherlands</option>
                                <option value="cristian">Netherlands Antilles</option>
                                <option value="cristian">New Caledonia</option>
                                <option value="cristian">New Zealand</option>
                                <option value="cristian">Nicaragua</option>
                                <option value="cristian">Niger</option>
                                <option value="cristian">Nigeria</option>
                                <option value="cristian">Niue</option>
                                <option value="cristian">Norfolk Island</option>
                                <option value="cristian">Northern Mariana Islands</option>
                                <option value="cristian">Norway</option>
                                <option value="cristian">Oman</option>
                                <option value="cristian">Palau</option>
                                <option value="cristian">Palestinian Territory, Occupied</option>
                                <option value="cristian">Panama</option>
                                <option value="cristian">Papua New Guinea</option>
                                <option value="cristian">Paraguay</option>
                                <option value="cristian">Peru</option>
                                <option value="cristian">Pitcairn</option>
                                <option value="cristian">Poland</option>
                                <option value="cristian">Portugal</option>
                                <option value="cristian">Puerto Rico</option>
                                <option value="cristian">Saint Kitts and Nevis</option>
                                <option value="cristian"> Saint Helena</option>
                                <option value="cristian">Saint Lucia</option>
                                <option value="cristian">Saint Pierre and Miquelon</option>
                                <option value="cristian">Saint Vincent and the Grenadines</option>
                                <option value="cristian">Samoa</option>
                                <option value="cristian">San Marino</option>
                                <option value="cristian">Sao Tome and Principe</option>
                                <option value="cristian">Saudi Arabia</option>
                                <option value="cristian">Senegal</option>
                                <option value="cristian">Serbia</option>
                                <option value="cristian">Seychelles</option>
                                <option value="cristian">Sierra Leone</option>
                                <option value="cristian">Singapore</option>
                                <option value="cristian">Slovakia</option>
                                <option value="cristian">Slovenia</option>
                                <option value="cristian">Solomon Islands</option>
                                <option value="cristian">Somalia</option>
                                <option value="cristian">South Africa</option>
                                <option value="cristian">South Georgia and the South Sandwich Islands</option>
                                <option value="cristian">Spain</option>
                                <option value="cristian">Sri Lanka</option>
                                <option value="cristian">Sudan</option>
                                <option value="cristian">Sudan</option>
                                <option value="cristian">Svalbard and Jan Mayen</option>
                                <option value="cristian">Swaziland</option>
                                <option value="cristian">Sweden</option>
                                <option value="cristian">Switzerland</option>
                                <option value="cristian">Syrian Arab Republic</option>
                                <option value="cristian">Taiwan, Province of China</option>
                                <option value="cristian">Tajikistan</option>
                                <option value="cristian">Tanzania, United Republic of</option>
                                <option value="cristian">Thailand</option>
                                <option value="cristian">Timor-Leste</option>
                                <option value="cristian">Togo</option>
                                <option value="cristian">Tokelau</option>
                                <option value="cristian">Tonga</option>
                                <option value="cristian">Trinidad and Tobago</option>
                                <option value="cristian">Tunisia</option>
                                <option value="cristian">Turkey</option>
                                <option value="cristian">Turkmenistan</option>
                                <option value="cristian">Turks and Caicos Islands</option>
                                <option value="cristian">Tuvalu</option>
                                <option value="cristian">Uganda</option>
                                <option value="cristian">Ukraine</option>
                                <option value="cristian">United Arab Emirates</option>
                                <option value="cristian">United Kingdom</option>
                                <option value="cristian">United States</option>
                                <option value="cristian">United States Minor Outlying Islands</option>
                                <option value="cristian">Uruguay</option>
                                <option value="cristian">Uzbekistan</option>
                                <option value="cristian">Vanuatu</option>
                                <option value="cristian">Venezuela</option>
                                <option value="cristian">Viet Nam</option>
                                <option value="cristian">Virgin Islands, British</option>
                                <option value="cristian">Virgin Islands, U.S.</option>
                                <option value="cristian">Wallis and Futuna</option>
                                <option value="cristian">Western Sahara</option>
                                <option value="cristian">Yemen</option>
                                <option value="cristian">Zambia</option>
                                <option value="cristian">Zimbabwe</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <h5 class="fw-bolder ">Processing settings</h5>
                    </div>
                </div>
                <div class="card-box">
                    <div class="row mt-2">
                        <div class="col-md-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Auto Deposit
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Auto Widthdraw
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Verification Requied
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2 ">
                        <div class="col-md-3 mt-2">
                            <label for="supportedCurrency" class="form-label">Payment Method </label>
                                <select id="supportedCurrency" name="supportedCurrency" class="form-select">
                                    <option value=" VIRTUAL_PAY"> VIRTUAL_PAY</option>
                                    <option value="INTERNAL_TRANSFER">INTERNAL_TRANSFER</option>
                                    <option value="CRYPTO_WIRE_TRANSFER">CRYPTO_WIRE_TRANSFER</option>
                                    <option value="TAP">TAP</option>
                                    <option value="NOQODI">NOQODI</option>
                                    <option value="RAZORPAY">RAZORPAY</option>
                                    <option value="CUSTOM_BANK_TRANSFER">CUSTOM_BANK_TRANSFER</option>
                                    <option value="VAPAY">VAPAY</option>
                                    <option value="PAYTIKO">PAYTIKO</option>
                                    <option value="MANUAL">MANUAL</option>
                                    <option value="NINE_PAY">NINE_PAY</option>
                                    <option value="FASA_PAY">FASA_PAY</option>
                                    <option value="STRIPE">STRIPE</option>
                                    <option value="PAYPOUND">PAYPOUND</option>
                                    <option value="CRYPTO_CREDIT_CARD">CRYPTO_CREDIT_CARD</option>
                                    <option value="AKURATECO">AKURATECO</option>
                                    <option value="ONLINE_PAYMENT">ONLINE_PAYMENT</option>
                                    <option value="FLUTTER_WAVE">FLUTTER_WAVE</option>
                                    <option value="ODEON_PAY">ODEON_PAY</option>
                                    <option value="SANFUX">SANFUX</option>
                                    <option value="ZENY">ZENY</option>
                                    <option value="SKY_CRYPTO">SKY_CRYPTO</option>
                                    <option value="INTERKASSA">INTERKASSA</option>
                                    <option value="VAULTS_PAY">VAULTS_PAY</option>
                                    <option value="AWEPAY">AWEPAY</option>
                                    <option value="HELP2PAY">HELP2PAY</option>
                                    <option value="PRAXIS">PRAXIS</option>
                                    <option value="OZOW">OZOW</option>
                                    <option value="PAYU">PAYU</option>
                                    <option value="BANK_TRANSFER">BANK_TRANSFER</option>
                                    <option value="PAYRETAILERS">PAYRETAILERS</option>
                                    <option value="BRIDGER_PAY">BRIDGER_PAY</option>
                                    <option value="CRYPTO_AGENT">CRYPTO_AGENT</option>
                                    <option value="ENSO">ENSO</option>
                                    <option value="WEBPAYS">WEBPAYS</option>
                                    <option value="REDIRECT_PAYMENT">REDIRECT_PAYMENT</option>
                                    <option value="WINTECH">WINTECH</option>
                                </select>
                        </div>
                    </div>
                </div>
                
                
                <div class="card-box">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row p-4">
                                <div class="d-grid gap-3 col-1   ">
                                    <a href="{{route('paymentGateway')}}">
                                    <button type="button" class="btn btn-success ">Back</button>
                                    </a>
                                    
                                </div>
                                <div class="d-grid gap-2 col-1   ">
                                    <a href="">
                                    <button type="button" class="btn btn-danger">Clear</button>
                                    </a>
                                    
                                </div>
                                <div class="d-grid gap-2 col-1 ">
                                    <a href="">
                                        
                                    <button type="button" class="btn btn-info">save</button>
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