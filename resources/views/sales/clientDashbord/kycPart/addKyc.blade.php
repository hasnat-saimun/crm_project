
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary rounded" data-bs-toggle="modal" data-bs-target="#kyc">
<i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i>
</button>   

<!-- Add KYC Modal -->
<div class="modal fade" id="kyc" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="kycModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="kycModalLabel">New Identity Request for <span id="kyc-client-email">Client</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                <!-- Loading indicator -->
                <div id="kyc-form-loading" class="text-center p-4" style="display: none;">
                    <i class="fa fa-spinner fa-spin fa-2x text-primary"></i>
                    <p class="mt-2">Submitting KYC request...</p>
                </div>
                
                <!-- Error message -->
                <div id="kyc-form-error" class="alert alert-danger" style="display: none;">
                    <i class="fa fa-exclamation-triangle"></i>
                    <span id="kyc-form-error-message">Failed to submit KYC request.</span>
                </div>
                
                <!-- Success message -->
                <div id="kyc-form-success" class="alert alert-success" style="display: none;">
                    <i class="fa fa-check-circle"></i>
                    <span id="kyc-form-success-message">KYC request submitted successfully!</span>
                </div>
                
                <form id="kycForm" class="kyc-form-content">
                    <ul class="nav nav-tabs" id="kycTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="account-details-tab" data-bs-toggle="tab" data-bs-target="#account-details" type="button" role="tab" aria-controls="account-details" aria-selected="true">Account Details</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="bank-details-tab" data-bs-toggle="tab" data-bs-target="#bank-details" type="button" role="tab" aria-controls="bank-details" aria-selected="false">Bank Details</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="document-tab" data-bs-toggle="tab" data-bs-target="#document" type="button" role="tab" aria-controls="document" aria-selected="false">Document</button>
                        </li>
                    </ul>
                    
                    <div class="tab-content" id="kycTabContent">
                        <!-- Account Details Tab -->
                        <div class="tab-pane fade show active" id="account-details" role="tabpanel" aria-labelledby="account-details-tab" tabindex="0">
                            <div class="row p-3">
                                <div class="col-6 mb-2">
                                    <label for="firstName" class="form-label">First Name *</label>
                                    <input type="text" class="form-control" id="firstName" name="personalDetails[firstname]" required>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="col-6 mb-2">
                                    <label for="lastName" class="form-label">Last Name *</label>
                                    <input type="text" class="form-control" id="lastName" name="personalDetails[lastname]" required>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="col-6 mb-2">
                                    <label for="birthDate" class="form-label">Date of Birth *</label>
                                    <input type="date" class="form-control" id="birthDate" name="personalDetails[dateOfBirth]" required>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="col-6 mb-2">
                                    <label for="phoneNumber" class="form-label">Phone Number *</label>
                                    <input type="tel" class="form-control" id="phoneNumber" name="personalDetails[phoneNumber]" required>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="col-6 mb-2">
                                    <label for="country" class="form-label">Country *</label>
                                    <input type="text" class="form-control" id="country" name="personalDetails[country]" required>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="col-6 mb-2">
                                    <label for="state" class="form-label">State</label>
                                    <input type="text" class="form-control" id="state" name="personalDetails[state]">
                                </div>
                                <div class="col-6 mb-2">
                                    <label for="city" class="form-label">City *</label>
                                    <input type="text" class="form-control" id="city" name="personalDetails[city]" required>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="col-6 mb-2">
                                    <label for="postCode" class="form-label">Post Code</label>
                                    <input type="text" class="form-control" id="postCode" name="personalDetails[postCode]">
                                </div>
                                <div class="col-12 mb-2">
                                    <label for="address" class="form-label">Address *</label>
                                    <textarea class="form-control" id="address" name="personalDetails[address]" rows="2" required></textarea>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Bank Details Tab -->
                        <div class="tab-pane fade" id="bank-details" role="tabpanel" aria-labelledby="bank-details-tab" tabindex="0">
                            <div class="row p-3">
                                <div class="col-6 mb-2">
                                    <label for="bankName" class="form-label">Bank Name</label>
                                    <input type="text" class="form-control" id="bankName" name="bankDetails[bankName]">
                                </div>
                                <div class="col-6 mb-2">
                                    <label for="bankAddress" class="form-label">Bank Address</label>
                                    <input type="text" class="form-control" id="bankAddress" name="bankDetails[bankAddress]">
                                </div>
                                <div class="col-6 mb-2">
                                    <label for="swiftCode" class="form-label">Bank Swift Code</label>
                                    <input type="text" class="form-control" id="swiftCode" name="bankDetails[swiftCode]">
                                </div>
                                <div class="col-6 mb-2">
                                    <label for="bankAccount" class="form-label">Bank Account</label>
                                    <input type="text" class="form-control" id="bankAccount" name="bankDetails[bankAccount]">
                                </div>
                                <div class="col-6 mb-2">
                                    <label for="accountName" class="form-label">Account Name</label>
                                    <input type="text" class="form-control" id="accountName" name="bankDetails[accountName]">
                                </div>
                            </div>
                        </div>
                        
                        <!-- Document Tab -->
                        <div class="tab-pane fade" id="document" role="tabpanel" aria-labelledby="document-tab" tabindex="0">
                            <div class="row p-3">
                                <div class="col-12 mb-3">
                                    <label for="documentType" class="form-label">Document Type</label>
                                    <select class="form-select" id="documentType" name="documentType">
                                        <option value="Identity Document">Identity Document</option>
                                        <option value="Passport">Passport</option>
                                        <option value="Driver License">Driver License</option>
                                        <option value="Proof of Address">Proof of Address</option>
                                        <option value="Bank Statement">Bank Statement</option>
                                    </select>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="documentUpload" class="form-label">Upload Document</label>
                                    <input type="file" class="form-control" id="documentUpload" accept=".pdf,.jpg,.jpeg,.png">
                                    <div class="form-text">Accepted formats: PDF, JPG, PNG. Max size: 5MB</div>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="remark" class="form-label">Remarks</label>
                                    <textarea class="form-control" id="remark" name="remark" rows="3" placeholder="Additional comments or notes..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="submitKycBtn">Submit KYC Request</button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize KYC modal
    const kycModal = document.getElementById('kyc');
    const kycForm = document.getElementById('kycForm');
    const submitBtn = document.getElementById('submitKycBtn');
    
    // Pre-fill client email when modal opens
    kycModal.addEventListener('show.bs.modal', function() {
        const clientEmail = getClientEmailFromContext();
        document.getElementById('kyc-client-email').textContent = clientEmail || 'Client';
        
        // Pre-fill form with existing client data if available
        prefillKycForm(clientEmail);
    });
    
    // Handle form submission
    submitBtn.addEventListener('click', function() {
        submitKycForm();
    });
    
    // Reset form when modal closes
    kycModal.addEventListener('hidden.bs.modal', function() {
        resetKycForm();
    });
});

function prefillKycForm(email) {
    // Try to get client data from the page context if available
    if (typeof clientData !== 'undefined' && clientData) {
        // Pre-fill personal details
        document.getElementById('firstName').value = clientData.personalDetails?.firstname || '';
        document.getElementById('lastName').value = clientData.personalDetails?.lastname || '';
        document.getElementById('birthDate').value = clientData.personalDetails?.dateOfBirth || '';
        document.getElementById('phoneNumber').value = clientData.contactDetails?.phoneNumber || '';
        document.getElementById('country').value = clientData.addressDetails?.country || '';
        document.getElementById('state').value = clientData.addressDetails?.state || '';
        document.getElementById('city').value = clientData.addressDetails?.city || '';
        document.getElementById('postCode').value = clientData.addressDetails?.postCode || '';
        document.getElementById('address').value = clientData.addressDetails?.address || '';
        
        // Pre-fill bank details
        document.getElementById('bankName').value = clientData.bankingDetails?.bankName || '';
        document.getElementById('bankAddress').value = clientData.bankingDetails?.bankAddress || '';
        document.getElementById('swiftCode').value = clientData.bankingDetails?.bankSwiftCode || '';
        document.getElementById('bankAccount').value = clientData.bankingDetails?.bankAccount || '';
        document.getElementById('accountName').value = clientData.bankingDetails?.accountName || '';
    }
}

function submitKycForm() {
    const form = document.getElementById('kycForm');
    const formData = new FormData(form);
    const clientEmail = getClientEmailFromContext();
    
    // Validate required fields
    if (!validateKycForm()) {
        return;
    }
    
    // Convert FormData to object
    const data = {};
    for (let [key, value] of formData.entries()) {
        setNestedValue(data, key, value);
    }
    
    // Show loading
    showKycFormLoading(true);
    hideKycFormError();
    hideKycFormSuccess();
    
    // Build API URL
    let apiUrl;
    if (window.location.hostname === 'localhost' && window.location.port === '') {
        apiUrl = `/crm_project/api/kyc/${encodeURIComponent(clientEmail)}`;
    } else {
        apiUrl = `/api/kyc/${encodeURIComponent(clientEmail)}`;
    }
    
    console.log('Submitting KYC form:', data);
    
    fetch(apiUrl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(result => {
        console.log('KYC submission result:', result);
        showKycFormLoading(false);
        
        if (result.success) {
            showKycFormSuccess('KYC request submitted successfully!');
            
            // Reload KYC records in the main table
            setTimeout(() => {
                if (typeof loadKycRecords === 'function') {
                    loadKycRecords(clientEmail);
                }
                
                // Close modal after 2 seconds
                setTimeout(() => {
                    const modal = bootstrap.Modal.getInstance(document.getElementById('kyc'));
                    modal.hide();
                }, 2000);
            }, 1000);
            
        } else {
            showKycFormError(result.message || 'Failed to submit KYC request');
            
            if (result.errors) {
                displayValidationErrors(result.errors);
            }
        }
    })
    .catch(error => {
        console.error('KYC submission error:', error);
        showKycFormLoading(false);
        showKycFormError('Failed to submit KYC request: ' + error.message);
    });
}

function validateKycForm() {
    const requiredFields = [
        'personalDetails[firstname]',
        'personalDetails[lastname]',
        'personalDetails[dateOfBirth]',
        'personalDetails[phoneNumber]',
        'personalDetails[country]',
        'personalDetails[city]',
        'personalDetails[address]'
    ];
    
    let isValid = true;
    
    requiredFields.forEach(fieldName => {
        const field = document.querySelector(`[name="${fieldName}"]`);
        if (field && !field.value.trim()) {
            field.classList.add('is-invalid');
            const feedback = field.nextElementSibling;
            if (feedback && feedback.classList.contains('invalid-feedback')) {
                feedback.textContent = 'This field is required';
            }
            isValid = false;
        } else if (field) {
            field.classList.remove('is-invalid');
        }
    });
    
    return isValid;
}

function displayValidationErrors(errors) {
    for (const [fieldPath, messages] of Object.entries(errors)) {
        const field = document.querySelector(`[name="${fieldPath}"]`);
        if (field) {
            field.classList.add('is-invalid');
            const feedback = field.nextElementSibling;
            if (feedback && feedback.classList.contains('invalid-feedback')) {
                feedback.textContent = messages[0];
            }
        }
    }
}

function setNestedValue(obj, path, value) {
    const keys = path.replace(/\[(\w+)\]/g, '.$1').split('.');
    let current = obj;
    
    for (let i = 0; i < keys.length - 1; i++) {
        const key = keys[i];
        if (!(key in current)) {
            current[key] = {};
        }
        current = current[key];
    }
    
    current[keys[keys.length - 1]] = value;
}

function resetKycForm() {
    const form = document.getElementById('kycForm');
    form.reset();
    
    // Remove validation classes
    const fields = form.querySelectorAll('.form-control, .form-select');
    fields.forEach(field => {
        field.classList.remove('is-invalid');
    });
    
    // Hide messages
    hideKycFormError();
    hideKycFormSuccess();
    showKycFormLoading(false);
    
    // Reset to first tab
    const firstTab = document.getElementById('account-details-tab');
    const firstTabPane = document.getElementById('account-details');
    
    // Remove active from all tabs
    document.querySelectorAll('#kycTab .nav-link').forEach(tab => {
        tab.classList.remove('active');
        tab.setAttribute('aria-selected', 'false');
    });
    
    document.querySelectorAll('#kycTabContent .tab-pane').forEach(pane => {
        pane.classList.remove('show', 'active');
    });
    
    // Activate first tab
    firstTab.classList.add('active');
    firstTab.setAttribute('aria-selected', 'true');
    firstTabPane.classList.add('show', 'active');
}

function showKycFormLoading(show) {
    const loadingEl = document.getElementById('kyc-form-loading');
    const contentEl = document.querySelector('.kyc-form-content');
    const submitBtn = document.getElementById('submitKycBtn');
    
    if (show) {
        loadingEl.style.display = 'block';
        contentEl.style.display = 'none';
        submitBtn.disabled = true;
    } else {
        loadingEl.style.display = 'none';
        contentEl.style.display = 'block';
        submitBtn.disabled = false;
    }
}

function showKycFormError(message) {
    const errorEl = document.getElementById('kyc-form-error');
    const messageEl = document.getElementById('kyc-form-error-message');
    
    messageEl.textContent = message;
    errorEl.style.display = 'block';
}

function hideKycFormError() {
    document.getElementById('kyc-form-error').style.display = 'none';
}

function showKycFormSuccess(message) {
    const successEl = document.getElementById('kyc-form-success');
    const messageEl = document.getElementById('kyc-form-success-message');
    
    messageEl.textContent = message;
    successEl.style.display = 'block';
}

function hideKycFormSuccess() {
    document.getElementById('kyc-form-success').style.display = 'none';
}

// Make sure we can access the getClientEmailFromContext function
function getClientEmailFromContext() {
    // Try to get email from URL parameters
    const urlParams = new URLSearchParams(window.location.search);
    let email = urlParams.get('email');
    
    if (!email) {
        // Try to get from URL path (for routes like /client/profile/{email})
        const pathParts = window.location.pathname.split('/');
        const profileIndex = pathParts.indexOf('profile');
        if (profileIndex > -1 && pathParts[profileIndex + 1]) {
            email = decodeURIComponent(pathParts[profileIndex + 1]);
        }
    }
    
    if (!email) {
        // Fallback to demo email
        email = 'integration-demo@match-trade.com';
    }
    
    return email;
}
</script>