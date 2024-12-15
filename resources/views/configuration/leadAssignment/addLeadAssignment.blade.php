@extends('header') @section('header')
<div class="col-md-6 mt-4">
    <h3 class="fw-bolder text-uppercase">
    New lead assignment rule creation
    </h3>
</div>
<div class="col-md-6">
    <ul class="nav-right">
        <li>
            <a href="{{route('leadAssignment')}}">
                <i class="fa-duotone fa-solid fa-left-to-bracket" style="--fa-secondary-opacity: 1;"></i>
            </a>
        </li>
    </ul>
</div>
@endsection @section('body')
<div class="card">
    <form method="POST" class="form" action="">
        <div class="row">
            <div class="card-box">
                <div class="row mt-2">
                    <div class="col-6">
                        <div class="col-md-8 mb-3">
                            <label for="leadName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="leadName" placeholder="" name="leadName" />
                        </div>
                        <div class="col-md-8 mb-3">
                            <label for="country" class="form-label">Country</label>
                            <select class="selectpicker" multiple aria-label="size 3 select example">
                            
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, The Democratic Republic of the">Congo, The Democratic Republic of the</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Te">French Southern Te</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option> 
                                <option value="Haiti">Haiti</option>
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran, Islamic Republic Of">Iran, Islamic Republic Of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="MaMalirtinique">MaMalirtinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru"></option>
                                <option value="Philippines">Philippines</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Helena">Saint Helena</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republi">Syrian Arab Republi</option>
                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-Leste">Timor-Leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                        
                        <div class="col-md-8 mb-3">
                            <label for="Languages" class="form-label">Languages</label>
                            <select class="selectpicker" multiple aria-label="size 3 select example">
                                <option value=" Arabic (Qatar)"> Arabic (Qatar)</option>
                                <option value="Arabic (Saudi Arabia)">Arabic (Saudi Arabia)</option>
                                <option value="Arabic (Syria)">Arabic (Syria)</option>
                                <option value="Arabic (Tunisia)">Arabic (Tunisia)</option>
                                <option value="Arabic (Yemen)">Arabic (Yemen)</option>
                                <option value="Azeri (Latin)">Azeri (Latin)</option>
                                <option value="Azeri (Latin) (Azerbaijan)">Azeri (Latin) (Azerbaijan)</option>
                                <option value="Azeri (Cyrillic) (Azerbaijan)">Azeri (Cyrillic) (Azerbaijan)</option>
                                <option value="Belarusian">Belarusian</option>
                                <option value="Belarusian (Belarus)">Belarusian (Belarus)</option>
                                <option value="Bulgarian">Bulgarian</option>
                                <option value="Bulgarian (Bulgaria)">Bulgarian (Bulgaria)</option>
                                <option value="Bosnian (Bosnia)">Bosnian (Bosnia)</option>=
                                <option value="Catalan">Catalan</option>
                                <option value="Catalan (Spain)">Catalan (Spain)</option>
                                <option value="Czech">Czech</option>
                                <option value="Czech (Czech Republic)">Czech (Czech Republic)</option>
                                <option value="Welsh">Welsh</option>
                                <option value="Welsh (United Kingdom)">Welsh (United Kingdom)</option>
                                <option value="Danish">Danish</option>
                                <option value="Danish (Denmark)">Danish (Denmark)</option>
                                <option value="German">German</option>
                                <option value="German (Austria)">German (Austria)</option>
                                <option value="German (Switzerland)">German (Switzerland)</option>
                                <option value="German (Germany)">German (Germany)</option>
                                <option value="German (Liechtenstein)">German (Liechtenstein)</option>
                                <option value="German (Luxembourg)">German (Luxembourg)</option>
                                <option value="Divehi">Divehi</option>
                                <option value="Divehi (Maldives)">Divehi (Maldives)</option>
                                <option value="Greek">Greek</option>
                                <option value="Greek (Greece)">Greek (Greece)</option>
                                <option value="English">English</option>
                                <option value="English (Australia)">English (Australia)</option>
                                <option value="English (Canada)">English (Canada)</option>
                                <option value="English (Caribbean)">English (Caribbean)</option>
                                <option value="English (United Kingdom)">English (United Kingdom)</option>
                                <option value="English (Ireland)">English (Ireland)</option>
                                <option value="English (Jamaica)">English (Jamaica)</option>
                                <option value="English (New Zealand)">English (New Zealand)</option>
                                <option value="English (Republic of the Philippines)">English (Republic of the Philippines)</option>
                                <option value="English (Trinidad and Tobago)">English (Trinidad and Tobago)</option>
                                <option value="English (United States)">English (United States)</option>
                                <option value="English (South Africa)">English (South Africa)</option>
                                <option value="English (Zimbabwe)">English (Zimbabwe)</option>
                                <option value="Esperanto">Esperanto</option>
                                <option value="Spanish">Spanish</option>
                                <option value="Spanish (Argentina)">Spanish (Argentina)</option>
                                <option value="Spanish (Bolivia)">Spanish (Bolivia)</option>
                                <option value="Spanish (Chile)">Spanish (Chile)</option>
                                <option value="Spanish (Colombia)">Spanish (Colombia)</option>
                                <option value="Spanish (Costa Rica)">Spanish (Costa Rica)</option>
                                <option value="Spanish (Dominican Republic)">Spanish (Dominican Republic)</option>
                                <option value="Spanish (Ecuador)">Spanish (Ecuador)</option>
                                <option value="Spanish (Guatemala)">Spanish (Guatemala)</option>
                                <option value="Spanish (Honduras)">Spanish (Honduras)</option>
                                <option value="Spanish (Mexico)">Spanish (Mexico)</option>
                                <option value="Spanish (Nicaragua)">Spanish (Nicaragua)</option>
                                <option value="Spanish (Panama)">Spanish (Panama)</option>
                                <option value="Spanish (Peru)">Spanish (Peru)</option>
                                <option value="Spanish (Puerto Rico)">Spanish (Puerto Rico)</option>
                                <option value="Spanish (Paraguay)">Spanish (Paraguay)</option>
                                <option value="Spanish (El Salvador)">Spanish (El Salvador)</option>
                                <option value="Spanish (Uruguay)">Spanish (Uruguay)</option>
                                <option value="Spanish (Venezuela)">Spanish (Venezuela)</option>
                                <option value=" Basque (Spain)"> Basque (Spain)</option>
                                <option value="Farsi">Farsi</option>
                                <option value="Farsi (Iran)">Farsi (Iran)</option>
                                <option value="Finnish">Finnish</option>
                                <option value="Finnish (Finland)">Finnish (Finland)</option>
                                <option value="Faroese">Faroese</option>
                                <option value="Faroese (Faroe Islands)">Faroese (Faroe Islands)</option>
                                <option value="French">French</option>
                                <option value="French (Belgium)">French (Belgium)</option>
                                <option value="French (Canada)">French (Canada)</option>
                                <option value="French (Switzerland)">French (Switzerland)</option>
                                <option value="French (France)">French (France)</option>
                                <option value="French (Luxembourg)">French (Luxembourg)</option>
                                <option value="French (Principality of Monaco)">French (Principality of Monaco)</option>
                                <option value="Galician">Galician</option>
                                <option value="Galician (Spain)">Galician (Spain)</option>
                                <option value="Gujarati">Gujarati</option>
                                <option value="Gujarati (India)">Gujarati (India)</option>
                                <option value="Hebrew">Hebrew</option>
                                <option value="Hebrew (Israel)">Hebrew (Israel)</option>
                                <option value="Hindi">Hindi</option>
                                <option value="Hindi (India)">Hindi (India)</option>
                                <option value="Croatian">Croatian</option>
                                <option value="Croatian (Bosnia and Herzegovina)">Croatian (Bosnia and Herzegovina)</option>
                                <option value="Croatian (Croatia)">Hungarian</option>
                                <option value="Hungarian (Hungary)">Hungarian (Hungary)</option>
                                <option value="FYRO Macedonian">FYRO Macedonian</option>
                                <option value="FYRO Macedonian (Former Yugoslav Republic of Macedonia)">FYRO Macedonian (Former Yugoslav Republic of Macedonia)</option>
                                <option value="Mongolian">Mongolian</option>
                                <option value="Mongolian (Mongolia)">Mongolian (Mongolia)</option>
                                <option value="Marathi">Marathi</option>
                                <option value="Marathi (India)">Marathi (India)</option>
                                <option value="Malay">Malay</option>
                                <option value="Malay (Brunei Darussalam)">Malay (Brunei Darussalam)</option>
                                <option value="Malay (Malaysia)">Malay (Malaysia)</option>
                                <option value="Maltese">Maltese</option>
                                <option value="Maltese (Malta)">Maltese (Malta)</option>
                                <option value="Norwegian (Bokmål)">Norwegian (Bokmål)</option>
                                <option value="Norwegian (Bokmål) (Norway)">Norwegian (Bokmål) (Norway)</option>
                                <option value="Dutch">Dutch</option>
                                <option value="Dutch (Belgium)">Dutch (Belgium)</option>
                                <option value="Dutch (Netherlands)"></option>Dutch (Netherlands)</option>
                                <option value="Norwegian (Nynorsk) (Norway)">Norwegian (Nynorsk) (Norway)</option>
                                <option value="Northern Sotho">Northern Sotho</option>
                                <option value="Northern Sotho (South Africa)">Northern Sotho (South Africa)</option>
                                <option value="Punjabi">Punjabi</option>
                                <option value="Punjabi (India)">Punjabi (India)</option>
                                <option value="Polish">Polish</option>
                                <option value="Polish (Poland)">Polish (Poland)</option>
                                <option value="Pashto">Pashto</option>
                                <option value="Pashto (Afghanistan)">Pashto (Afghanistan)</option>
                                <option value="Portuguese">Portuguese</option>
                                <option value="Portuguese (Brazil)">Portuguese (Brazil)</option>
                                <option value="Slovenian">Slovenian</option>
                                <option value="Slovenian (Slovenia)">Slovenian (Slovenia)</option>
                                <option value="Albanian">Albanian</option>
                                <option value="Albanian (Albania)">Albanian (Albania)</option>
                                <option value="Serbian (Latin) (Bosnia and Herzegovina)">Serbian (Latin) (Bosnia and Herzegovina)</option>
                                <option value="Serbian (Cyrillic) (Bosnia and Herzegovina)">Serbian (Cyrillic) (Bosnia and Herzegovina)</option>
                                <option value="Serbian (Latin) (Serbia and Montenegro)">Serbian (Latin) (Serbia and Montenegro)</option>
                                <option value="Serbian (Cyrillic) (Serbia and Montenegro)">Serbian (Cyrillic) (Serbia and Montenegro)</option>
                                <option value="Swedish">Swedish</option>
                                <option value="Swedish (Finland)">Swedish (Finland)</option>
                                <option value="Swedish (Sweden)">Swedish (Sweden)</option>
                                <option value="Swahili">Swahili</option>
                                <option value="Swahili (Kenya)">Swahili (Kenya)</option>
                                <option value="Syriac">Syriac</option>
                                <option value="Syriac (Syria)">Syriac (Syria)</option>
                                <option value="Tamil">Tamil</option>
                                <option value="Tamil (India)">Tamil (India)</option>
                                <option value="Telugu">Telugu</option>
                                <option value="Telugu (India)">Telugu (India)</option>
                                <option value="Thai">Thai</option>
                                <option value="Thai (Thailand)">Thai (Thailand)</option>
                                <option value="Tagalog">Tagalog</option>
                                <option value="Tagalog (Philippines)">Tagalog (Philippines)</option>
                                <option value="Tswana">Tswana</option>
                                <option value="Tswana (South Africa)">Tswana (South Africa)</option>
                                <option value="Turkish">Turkish</option>
                                <option value="Turkish (Turkey)">Turkish (Turkey)</option>
                                <option value="Tatar">Tatar</option>
                                <option value="Tatar (Russia)">Tatar (Russia)</option>
                                <option value="Tsonga">Tsonga</option>
                                <option value="Ukrainian">Ukrainian</option>
                                <option value="Ukrainian (Ukraine)">Ukrainian (Ukraine)</option>
                                <option value="Urdu">Urdu</option>
                                <option value="Urdu (Islamic Republic of Pakistan)">Urdu (Islamic Republic of Pakistan)</option>
                                <option value="Uzbek (Latin)">Uzbek (Latin)</option>
                                <option value="Uzbek (Latin) (Uzbekistan)">Uzbek (Latin) (Uzbekistan)</option>
                                <option value="Uzbek (Cyrillic) (Uzbekistan)">Uzbek (Cyrillic) (Uzbekistan)</option>
                                <option value="Vietnamese">Vietnamese</option>
                                <option value="Vietnamese (Viet Nam)">Vietnamese (Viet Nam)</option>
                                <option value="Xhosa">Xhosa</option>
                                <option value="Xhosa (South Africa)">Xhosa (South Africa)</option>
                                <option value="Chinese">Chinese</option>
                                <option value="Chinese (S)">Chinese (S)</option>
                                <option value="Chinese (Hong Kong)">Chinese (Hong Kong)</option>
                                <option value="Chinese (Macau)">Chinese (Macau)</option>
                                <option value="Chinese (Singapore)">Chinese (Singapore)</option>
                                <option value="Chinese (T)">Chinese (T)</option>
                                <option value="Zulu">Zulu</option>
                                <option value="Zulu (South Africa)">Zulu (South Africa)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow">
                            <div class="row p-3">
                                <div class="col-md-12 table-responsive table-responsive-sm">
                                    <table class="table table-hover table-sm">
                                        <caption>
                                            List of users
                                        </caption>
                                        <thead class="bg-dark report-white-font">
                                            <tr>
                                                <th scope="col">Account Manager</th>
                                                <th scope="col">Assignment Ratio</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label for="accManager" class="form-label">Account manager</label>
                            <select class="form-select" aria-label="Default select example">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label for="newLeadsPercentage" class="form-label">New leads percentage</label>
                            <input type="text" class="form-control" id="newLeadsPercentage" placeholder="" name="newLeadsPercentage" />
                        </div>
                        <div class="col-md-3 px-2">
                            <a href=""><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row p-4">
                    <div class="d-grid gap-3 col-1">
                        <a href="{{route('leadAssignment')}}">
                            <button type="button" class="btn btn-success">Back</button>
                        </a>
                    </div>
                    <div class="d-grid gap-2 col-1">
                        <a href="">
                            <button type="button" class="btn btn-danger">Edit</button>
                        </a>
                    </div>
                    <div class="d-grid gap-2 col-1">
                        <a href="">
                            <button type="button" class="btn btn-danger">Clear</button>
                        </a>
                    </div>
                    <div class="d-grid gap-2 col-1">
                        <a href="">
                            <button type="button" class="btn btn-info">save</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
