@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-5">
        <h4 class="fw-bolder">New notification creation</h4>
    </div>
</div>

@endsection @section('body')
<div class="card card-box">
    <form method="POST" class="form" action="">
        <div class="row mt-3 align-items-center">
            <div class="col-4 mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="" name="name" />
            </div>
            <div class="col-4 mb-3">
                <div class="form-check mt-4">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">
                        Sent notification to client
                    </label>
                </div>
            </div>
            <div class="col-1">
                <a href="{{route('editOparation')}}" class="btn btn-success">Back</a>
            </div>
            <div class="col-1 my-4">
                <button type="submit" class="btn btn-info">Save</button>
            </div>
        </div>
    </form>
</div>

<div class="row mt-5 align-items-center mt-4 query-box">
    <div class="col-6">
        <nav class="p-2 card card-body border-0 query-box-heading shadow">
            <div class="nav justify-content-center nav-underline" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">select option nick name</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Branch Config</button>
            </div>
        </nav>
    </div>
    <div class="col-md-4">
        <select class="form-select" aria-label="Default select example">
            <option value="Afrikaans (South Africa)">Afrikaans (South Africa)</option>
            <option value="Arabic">Arabic</option>
            <option value="Afrikaans">Afrikaans</option>
            <option value="Arabic (U.A.E.)">Arabic (U.A.E.)</option>
            <option value="Arabic (Bahrain)">Arabic (Bahrain)</option>
            <option value="Arabic (Algeria)">Arabic (Algeria)</option>
            <option value="Arabic (Egypt)">Arabic (Egypt)</option>
            <option value="Arabic (Iraq)">Arabic (Iraq)</option>
            <option value="Arabic (Jordan)">Arabic (Jordan)</option>
            <option value="Arabic (Kuwait)">Arabic (Kuwait)</option>
            <option value="Arabic (Lebanon)">Arabic (Lebanon)</option>
            <option value="Arabic (Libya)">Arabic (Libya)</option>
            <option value="Arabic (Morocco)">Arabic (Morocco)</option>
            <option value="Arabic (Oman)">Arabic (Oman)</option>
            <option value="Arabic (Qatar)">Arabic (Qatar)</option>
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
            <option value="Bosnian (Bosnia and Herzegovina)">Bosnian (Bosnia and Herzegovina)</option>
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
            <option value="English (Belize)">English (Belize)</option>
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
            <option value="Spanish (Spain)">Spanish (Spain)</option>
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
            <option value="">Spanish (Venezuela)</option>
            <option value="Estonian">Estonian</option>
            <option value="Estonian (Estonia)">Estonian (Estonia)</option>
            <option value="Basque">Basque</option>
            <option value="Basque (Spain)">Basque (Spain)</option>
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
            <option value=" Galician (Spain)"> Galician (Spain)</option>
            <option value=" Icelandic (Iceland)"> Icelandic (Iceland)</option>
            <option value="Kyrgyz (Kyrgyzstan)">Kyrgyz (Kyrgyzstan)</option>
            <option value="Lithuanian (Lithuania)">Lithuanian (Lithuania)</option>
            <option value="Latvian">Latvian</option>
            <option value="Latvian (Latvia)">Latvian (Latvia)</option>
            <option value="Maori">Maori</option>
            <option value="Maori (New Zealand)">Maori (New Zealand)</option>
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
            <option value="">Dutch</option>
            <option value="Dutch (Belgium)">Dutch (Belgium)</option>
            <option value="Dutch (Netherlands)">Dutch (Netherlands)</option>
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
            <option value="Portuguese (Portugal)">Portuguese (Portugal)</option>
            <option value="Quechua">Quechua</option>
            <option value="Quechua (Bolivia)">Quechua (Bolivia)</option>
            <option value="Quechua (Ecuador)">Quechua (Ecuador)</option>
            <option value="Quechua (Peru)">Quechua (Peru)</option>
            <option value="Romanian">Romanian</option>
            <option value="Romanian (Romania)">Romanian (Romania)</option>
            <option value="Russian">Russian</option>
            <option value="Russian (Russia)">Russian (Russia)</option>
            <option value="Sanskrit">Sanskrit</option>
            <option value="Sanskrit (India)">Sanskrit (India)</option>
            <option value="Zulu (South Africa) ">Zulu (South Africa)</option>
            <option value="Zulu">Zulu</option>
            <option value="Chinese (T)">Chinese (T)</option>
            <option value="Chinese (Singapore)">Chinese (Singapore)</option>
            <option value="Chinese (Macau) ">Chinese (Macau)</option>
            <option value="Chinese (Hong Kong) ">Chinese (Hong Kong)</option>
            <option value="Chinese (S) ">Chinese (S)</option>
            <option value=" Chinese">Chinese</option>
            <option value="Xhosa (South Africa) ">Xhosa (South Africa)</option>
            <option value="Xhosa ">Xhosa</option>
            <option value="Vietnamese (Viet Nam) ">Vietnamese (Viet Nam)</option>
            <option value="Vietnamese ">Vietnamese</option>
            <option value=" Uzbek (Cyrillic) (Uzbekistan)">Uzbek (Cyrillic) (Uzbekistan)</option>
            <option value=" Uzbek (Latin) (Uzbekistan)">Uzbek (Latin) (Uzbekistan)</option>
            <option value="Uzbek (Latin) ">Uzbek (Latin)</option>
            <option value=" Urdu (Islamic Republic of Pakistan)">Urdu (Islamic Republic of Pakistan)</option>
            <option value="Urdu ">Urdu</option>
            <option value="Ukrainian (Ukraine) ">Ukrainian (Ukraine)</option>
            <option value="Ukrainian ">Ukrainian</option>
            <option value="Galician ">Galician</option>
            <option value="Galician (Spain) ">Galician (Spain)</option>
            <option value="Gujarati ">Gujarati</option>
            <option value="Gujarati (India) ">Gujarati (India)</option>
            <option value="Hebrew ">Hebrew</option>
            <option value="Tsonga ">Tsonga</option>
            <option value="Hebrew (Israel) ">Hebrew (Israel)</option>
            <option value="Hindi ">Hindi</option>
            <option value="Hindi (India) ">Hindi (India)</option>
            <option value="Croatian ">Croatian</option>
            <option value="Tatar (Russia) ">Tatar (Russia)</option>
            <option value="French (Principality of Monaco) ">French (Principality of Monaco)</option>
            <option value="Croatian (Bosnia and Herzegovina) ">Croatian (Bosnia and Herzegovina)</option>
            <option value="Croatian (Croatia) ">Croatian (Croatia)</option>
            <option value="Hungarian ">Hungarian</option>
            <option value="Hungarian (Hungary) ">Hungarian (Hungary)</option>
            <option value="Armenian ">Armenian</option>
            <option value="Armenian (Armenia) ">Armenian (Armenia)</option>
            <option value="Indonesian ">Indonesian</option>
            <option value="Indonesian (Indonesia) ">Indonesian (Indonesia)</option>
            <option value="Icelandic ">Icelandic</option>
            <option value="Icelandic (Iceland) ">Icelandic (Iceland)</option>
            <option value="Italian ">Italian</option>
            <option value="Italian (Switzerland) ">Italian (Switzerland)</option>
            <option value="Italian (Italy) ">Italian (Italy)</option>
            <option value="Japanese ">Japanese</option>
            <option value="Japanese (Japan) ">Japanese (Japan)</option>
            <option value="Georgian ">Georgian</option>
            <option value="CrGeorgian (Georgia) ">Georgian (Georgia)</option>
            <option value="Kazakh ">Kazakh</option>
            <option value="Kazakh (Kazakhstan) ">Kazakh (Kazakhstan)</option>
            <option value="Kannada ">Kannada</option>
            <option value="Kannada (India) ">Kannada (India)</option>
            <option value="Korean ">Korean</option>
            <option value="Korean (Korea) ">Korean (Korea)</option>
            <option value="Konkani ">Konkani</option>
            <option value="Konkani (India) ">Konkani (India)</option>
            <option value="Kyrgyz ">Kyrgyz</option>
            <option value="Sami ">Sami</option>
            <option value="Sami (Finland) ">Sami (Finland)</option>
            <option value="Sami (Norway) ">Sami (Norway)</option>
            <option value="Sami (Sweden) ">Sami (Sweden)</option>
            <option value="Tatar ">Tatar</option>
            <option value="Turkish (Turkey)">Turkish (Turkey)</option>
            <option value="Turkish ">Turkish</option>
            <option value="Tswana (South Africa) ">Tswana (South Africa)</option>
            <option value="Tswana">Tswana</option>
            <option value="Tagalog (Philippines)">Tagalog (Philippines)</option>
            <option value="Tagalog">Tagalog</option>
            <option value="Thai (Thailand)">Thai (Thailand)</option>
            <option value="Thai ">Thai</option>
            <option value="Telugu (India) ">Telugu (India)</option>
            <option value="Telugu ">Telugu</option>
            <option value=" Tamil (India)">Tamil (India)</option>
            <option value="Tamil">Tamil</option>
            <option value="Syriac (Syria)">Syriac (Syria)</option>
            <option value="Syriac">Syriac</option>
            <option value="Swahili (Kenya)">Swahili (Kenya)</option>
            <option value="Swahili">Swahili</option>
            <option value="Swedish (Sweden)">Swedish (Sweden)</option>
            <option value="Swedish (Finland)">Swedish (Finland)</option>
            <option value="Swedish">Swedish</option>
            <option value="Serbian (Cyrillic) (Serbia and Montenegro)">Serbian (Cyrillic) (Serbia and Montenegro)</option>
            <option value="Serbian (Latin) (Serbia and Montenegro)">Serbian (Latin) (Serbia and Montenegro)</option>
            <option value="Serbian (Cyrillic) (Bosnia and Herzegovina)">Serbian (Cyrillic) (Bosnia and Herzegovina)</option>
            <option value="Serbian (Latin) (Bosnia and Herzegovina)">Serbian (Latin) (Bosnia and Herzegovina)</option>
            <option value="Albanian (Albania)">Albanian (Albania)</option>
            <option value="Albanian">Albanian</option>
            <option value="Slovenian (Slovenia) ">Slovenian (Slovenia)</option>
            <option value="Slovenian ">Slovenian</option>
            <option value="Slovak (Slovakia)">Slovak (Slovakia)</option>
            <option value="Slovak ">Slovak</option>
        </select>
    </div>
    
    <div class="col-1">
                <a href="#" class="btn btn-success">Add</a>
            </div>
            <div class="col-1 my-4">
                    <a href="#" class="btn btn-danger">Delete</a>
            </div>
    <div class="col-11 mx-auto tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
            <div class="card card-body">
                <div class="row">
                    <form method="POST" class="form" action="">
                        <div class="row">
                            <div class="mb-3">
                                <label for="mail" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="mail" id="mail" placeholder="name@example.com" />
                            </div>
                            <div class="col-3 mb-3">
                                <label for="insert" class="form-label">Insert variables</label>
                                <select class="selectpicker" id="insert" name="insert" multiple aria-label="size 3 select example">
                                    <option value="1">ACCOUNT_EMAIL</option>
                                    <option value="2">ACCOUNT_NAME</option>
                                    <option value="3">ACCOUNT_SURNAME</option>
                                    <option value="4">CO_ONE_TIME_LOGIN_CODE_URL</option>
                                    <option value="4">MTR_ONE_TIME_LOGIN_CODE_URL</option>
                                    <option value="4">PLATFORM_ADDRESS</option>
                                </select>
                            </div>
                            <div class="col-4 mb-3">
                                <label for="content" class="form-label">Content</label>
                                <textarea class="form-control" id="content" name="content" rows="12"></textarea>
                            </div>

                            <div class="col-5 mb-3">
                                <label for="content" class="form-label">Preview</label>
                                <textarea class="form-control" id="content" name="content" rows="12"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
