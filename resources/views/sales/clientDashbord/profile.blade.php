@php
    // Helper function to format dates
    function formatDate($date) {
        if (empty($date)) return '';
        try {
            return \Carbon\Carbon::parse($date)->format('Y-m-d');
        } catch (Exception $e) {
            return $date;
        }
    }
    
    // Helper function to format datetime
    function formatDateTime($datetime) {
        if (empty($datetime)) return 'N/A';
        try {
            return \Carbon\Carbon::parse($datetime)->format('d.m.Y H:i');
        } catch (Exception $e) {
            return $datetime;
        }
    }
    
    // Helper function to safely get nested array values with fallback
    function safeGet($array, $key, $default = 'N/A') {
        $value = $array[$key] ?? $default;
        return empty($value) ? $default : $value;
    }
    
    // Helper function to display currency with proper formatting
    function formatCurrency($amount) {
        if (is_null($amount) || $amount === '') return '0.00';
        return number_format((float)$amount, 2);
    }
    
    // Helper function to safely get string value from potentially array field
    function safeString($value, $default = '') {
        if (is_array($value)) {
            // If it's an array, try to get meaningful data
            if (isset($value['name'])) return $value['name'];
            if (isset($value['email'])) return $value['email'];
            if (isset($value['value'])) return $value['value'];
            // If none of the above, return empty
            return $default;
        }
        return $value ?? $default;
    }
@endphp

<style>
    .text-muted-placeholder {
        color: #6c757d !important;
        font-style: italic;
    }
    
    .alert-primary h3.text-info, .alert-primary h4.text-info {
        color: #0dcaf0 !important;
    }
    
    .form-control[readonly] {
        background-color: #f8f9fa;
    }
</style>

<div class="card">
    <form method="POST" class="form" action="">
        <div class="row">
            <div class="col-md-6">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <h5 class="fw-bolder">Account details</h5>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 mb-2">
                        <label for="mail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="mail" placeholder="email@domain.com" name="mail" value="{{ $clientData['contactDetails']['email'] ?? '' }}" />
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="Name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="Name" placeholder="" name="Name" value="{{ $clientData['personalDetails']['firstname'] ?? '' }}" />
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="Surname" class="form-label">Surname</label>
                        <input type="text" class="form-control" id="Surname" placeholder="" name="Surname" value="{{ $clientData['personalDetails']['lastname'] ?? '' }}" />
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="birth" class="form-label">Date of birth</label>
                        <input type="date" class="form-control" id="birth" placeholder="" name="birth" value="{{ formatDate($clientData['personalDetails']['dateOfBirth'] ?? '') }}" />
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 mb-2">
                        <label for="mobile" class="form-label">Phone number</label>
                        <input type="text" class="form-control" id="mobile" placeholder="" name="mobile" value="{{ $clientData['contactDetails']['phoneNumber'] ?? '' }}" />
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="faxnum" class="form-label">Fax number</label>
                        <input type="text" class="form-control" id="faxnum" placeholder="" name="faxnum" value="{{ $clientData['contactDetails']['faxNumber'] ?? '' }}" />
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="tin" class="form-label">Tax Identification Number (TIN)</label>
                        <input type="text" class="form-control" id="tin" placeholder="" name="tin" value="{{ $clientData['personalDetails']['taxIdentificationNumber'] ?? '' }}" />
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 mb-2">
                        <label for="marital" class="form-label">Marital status </label>
                        <input type="text" class="form-control" id="marital" placeholder="" name="marital" value="{{ $clientData['personalDetails']['maritalStatus'] ?? '' }}" />
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="acmanager" class="form-label">Account manager</label>
                        <input type="text" class="form-control" id="acmanager" placeholder="" name="acmanager" value="{{ $clientData['accountConfiguration']['accountManager']['name'] ?? $clientData['accountConfiguration']['accountManager']['email'] ?? '' }}" />
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="verification" class="form-label">Verification status</label>
                        <input type="text" class="form-control" id="verification" placeholder="" name="verification" value="{{ safeString($clientData['accountConfiguration']['verificationStatus'] ?? '') }}" />
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="actype" class="form-label">Account type</label>
                        <select id="actype" class="form-select">
                            <option value="EXPERIENCED" {{ safeString($clientData['accountConfiguration']['accountType'] ?? '') == 'EXPERIENCED' ? 'selected' : '' }}>EXPERIENCED</option>
                            <option value="PROFESSIONAL" {{ safeString($clientData['accountConfiguration']['accountType'] ?? '') == 'PROFESSIONAL' ? 'selected' : '' }}>PROFESSIONAL</option>
                            <option value="RETAIL" {{ safeString($clientData['accountConfiguration']['accountType'] ?? '') == 'RETAIL' ? 'selected' : '' }}>RETAIL</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 mb-2">
                        <label for="roll" class="form-label">Role</label>
                        <select id="roll" class="form-select">
                            <option value="IB" {{ safeString($clientData['accountConfiguration']['role'] ?? '') == 'IB' ? 'selected' : '' }}>IB</option>
                            <option value="SUB_IB" {{ safeString($clientData['accountConfiguration']['role'] ?? '') == 'SUB_IB' ? 'selected' : '' }}>SUB_IB</option>
                            <option value="USER" {{ safeString($clientData['accountConfiguration']['role'] ?? '') == 'USER' ? 'selected' : '' }}>USER</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="branch" class="form-label">Branch</label>
                        <input type="text" class="form-control" id="branch" placeholder="" name="branch" value="{{ safeString($clientData['accountConfiguration']['branch'] ?? '') }}" />
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="ibacc" class="form-label">IB Account</label>
                        <input type="text" class="form-control" id="ibacc" placeholder="" name="ibacc" value="{{ safeString($clientData['accountConfiguration']['ibAccount'] ?? '') }}" />
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="lead" class="form-label">Lead status</label>
                        <input type="text" class="form-control" id="lead" placeholder="" name="lead" value="{{ $clientData['leadDetails']['leadStatus'] ?? '' }}" />
                    </div>
                    <div class="col-md-6 mb-2 mt-2">
                        <label for="leadsq" class="form-label">Lead source</label>
                        <input type="text" class="form-control" id="leadsq" placeholder="" name="leadsq" value="{{ $clientData['leadDetails']['leadSource'] ?? '' }}" />
                    </div>
                    <div class="col-md-6 mb-2 mt-2">
                        <label for="create" class="form-label">Created at</label>
                        <input type="text" class="form-control" id="create" placeholder="" name="create" value="{{ $clientData['accountConfiguration']['createdAt'] ?? '' }}" />
                    </div>
                    <div class="col-md-6 mb-2 mt-2">
                        <label for="convert" class="form-label">Converted from lead at</label>
                        <input type="text" class="form-control" id="convert" placeholder="" name="convert" value="{{ $clientData['leadDetails']['convertedFromLeadAt'] ?? '' }}" />
                    </div>
                    <div class="col-md-6 mb-2 mt-2">
                        <label for="lastIp" class="form-label">Last ip</label>
                        <input type="text" class="form-control" id="lastIp" placeholder="" name="lastIp" value="{{ $clientData['accountConfiguration']['lastLoginIp'] ?? '' }}" />
                    </div>
                    <div class="col-md-6 mb-2 mt-2">
                        <label for="leadProvider" class="form-label">Lead provider</label>
                        <input type="text" class="form-control" id="leadProvider" placeholder="" name="leadProvider" value="{{ $clientData['leadDetails']['leadProvider'] ?? '' }}" />
                    </div>
                    <div class="col-md-6 mb-2 mt-2">
                        <label for="contactDate" class="form-label">Contact Date</label>
                        <input type="date" class="form-control" id="contactDate" placeholder="" name="contactDate" value="{{ formatDate($clientData['contactDetails']['contactDate'] ?? '') }}" />
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12">
                        <h5 class="fw-bolder">Address details</h5>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 mb-2">
                        <label for="gen" class="form-label">Citizenship</label>
                        <input type="text" class="form-control" id="gen" placeholder="" name="gen" value="{{ $clientData['personalDetails']['citizenship'] ?? '' }}" />
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="country" class="form-label">Country</label>
                        <input type="text" class="form-control" id="country" placeholder="" name="country" value="{{ $clientData['addressDetails']['country'] ?? '' }}" />
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="language" class="form-label">Language</label>
                        <input type="text" class="form-control" id="language" placeholder="" name="language" value="{{ $clientData['personalDetails']['language'] ?? '' }}" />
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 mb-2">
                        <label for="state" class="form-label">State</label>
                        <input type="text" class="form-control" id="state" placeholder="" name="state" value="{{ $clientData['addressDetails']['state'] ?? '' }}" />
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" placeholder="" name="city" value="{{ $clientData['addressDetails']['city'] ?? '' }}" />
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="pcoad" class="form-label">Post code</label>
                        <input type="text" class="form-control" id="pcoad" placeholder="" name="pcoad" value="{{ $clientData['addressDetails']['postCode'] ?? '' }}" />
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 mb-2">
                        <label for="address" class="form-label">Address </label>
                        <input type="text" class="form-control" id="address" placeholder="" name="address" value="{{ $clientData['addressDetails']['address'] ?? '' }}" />
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="id" class="form-label">Passport/Id number</label>
                        <input type="text" class="form-control" id="id" placeholder="" name="id" value="{{ $clientData['personalDetails']['passport']['number'] ?? '' }}" />
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="cip" class="form-label">Country of issuance of passport</label>
                        <input type="text" class="form-control" id="cip" placeholder="" name="cip" value="{{ $clientData['personalDetails']['passport']['country'] ?? '' }}" />
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <h5 class="fw-bolder">Bank details</h5>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 mb-2">
                        <label for="bankname" class="form-label">Bank name</label>
                        <input type="text" class="form-control" id="bankname" placeholder="" name="bankname" value="{{ $clientData['bankingDetails']['bankName'] ?? '' }}" />
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="bankaddress" class="form-label"> Bank address</label>
                        <input type="text" class="form-control" id="bankaddress" placeholder="" name="bankaddress" value="{{ $clientData['bankingDetails']['bankAddress'] ?? '' }}" />
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 mb-2">
                        <label for="swifcoad" class="form-label">Bank swift code</label>
                        <input type="text" class="form-control" id="swifcoad" placeholder="" name="swifcoad" value="{{ $clientData['bankingDetails']['bankSwiftCode'] ?? '' }}" />
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="bankacc" class="form-label">Bank account</label>
                        <input type="text" class="form-control" id="bankacc" placeholder="" name="bankacc" value="{{ $clientData['bankingDetails']['bankAccount'] ?? '' }}" />
                    </div>
                    <div class="col-md-6 mb-2 mt-2">
                        <label for="accname" class="form-label">Account name</label>
                        <input type="text" class="form-control" id="accname" placeholder="" name="accname" value="{{ $clientData['bankingDetails']['accountName'] ?? '' }}" />
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row mt-5  p-3">
                    <div class="col-md-6 mb-4">
                        <div class="alert alert-primary text-center">
                            <!-- <div class=""></div> -->
                            <h4 class="fw-bold text-info">
                                {{ formatDateTime($clientData['accountConfiguration']['lastLoginTime'] ?? '') }}
                            </h4>
                            <h5 class="fw-bold">Last online</h5>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="alert alert-primary text-center p-3">
                            <!-- <div class=""></div> -->
                            <h3 class="fw-bold text-info">
                                {{ $clientData['accountConfiguration']['weather'] ?? 'N/A' }}
                            </h3>
                            <h5 class="fw-bold">Weather</h5>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="alert alert-primary text-center p-3">
                            <!-- <div class=""></div> -->
                            <h3 class="fw-bold text-info">
                                {{ $clientData['accountConfiguration']['localTime'] ?? 'N/A' }}
                            </h3>
                            <h5 class="fw-bold">Local time</h5>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="alert alert-primary text-center p-3">
                            <!-- <div class=""></div> -->
                            <h3 class="fw-bold text-info">
                                {{ formatCurrency($clientData['accountConfiguration']['balance'] ?? null) }}
                            </h3>
                            <h5 class="fw-bold">Balance</h5>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="alert alert-primary text-center p-3">
                            <!-- <div class=""></div> -->
                            <h3 class="fw-bold text-info">
                                {{ formatCurrency($clientData['accountConfiguration']['credit'] ?? null) }}
                            </h3>
                            <h5 class="fw-bold">Credit</h5>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="alert alert-primary text-center p-3">
                            <!-- <div class=""></div> -->
                            <h3 class="fw-bold text-info">
                                {{ formatCurrency($clientData['accountConfiguration']['equity'] ?? null) }}
                            </h3>
                            <h5 class="fw-bold">Equity</h5>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="alert alert-primary text-center p-3">
                            <!-- <div class=""></div> -->
                            <h3 class="fw-bold text-info">
                                {{ formatCurrency($clientData['accountConfiguration']['freeMargin'] ?? null) }}
                            </h3>
                            <h5 class="fw-bold">Free margin</h5>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="alert alert-primary text-center p-3">
                            <!-- <div class=""></div> -->
                            <h3 class="fw-bold text-info">
                                {{ formatCurrency($clientData['accountConfiguration']['totalDeposits'] ?? null) }}
                            </h3>
                            <h5 class="fw-bold">Deposits</h5>
                        </div>
                    </div>
                    <div class="col-md-6 mx-auto mb-4">
                        <div class="alert alert-primary text-center p-3">
                            <!-- <div class=""></div> -->
                            <h3 class="fw-bold text-info">
                                {{ formatCurrency($clientData['accountConfiguration']['totalWithdrawals'] ?? null) }}
                            </h3>
                            <h5 class="fw-bold">Withdrawals</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row p-4">
                        <div class="d-grid gap-3 col-1">
                                <button type="button" class="btn btn-success">Back</button>
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
                        <div class="d-grid gap-2 col-2">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                                Add note
                            </button>   
                        </div>
                        <div class="d-grid col-2">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Set Password</button> 
                        </div>
                        <div class="d-grid col-2">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">Edit Email</button> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Add note button -->
<!-- Modal -->
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add note</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="event" class="form-label">Event type</label>
                    <input type="text" class="form-control" id="event" placeholder="" name="event">
                </div>
                <div class="mb-3">
                    <label for="note" class="form-label">Note</label>
                    <textarea class="form-control" id="note" name="note" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Confirm</button>
            </div>
        </div>
    </div>
</div>

<!-- set pass button -->
 <!-- Modal -->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Password</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="pass" class="form-label">Password</label>
                <input type="password" id="pass" class="form-control" aria-describedby="passwordHelpBlock" name="pass">
            </div>
            <div class="modal-body">
                <label for="rePass" class="form-label">Repate Password</label>
                <input type="password" id="rePass" class="form-control" aria-describedby="passwordHelpBlock" name="rePass">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Confirm</button>
            </div>
        </div>
    </div>
</div>

<!-- set edit male -->
 <!-- Modal -->
 <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Email</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="oldEmail" class="form-label">Old Email</label>
                <input type="email" id="oldEmail" class="form-control" aria-describedby="passwordHelpBlock" name="oldEmail">
            </div>
            <div class="modal-body">
                <label for="newmail" class="form-label">New Email</label>
                <input type="password" id="newmail" class="form-control" aria-describedby="passwordHelpBlock" name="newmail">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Confirm</button>
            </div>
        </div>
    </div>
</div>