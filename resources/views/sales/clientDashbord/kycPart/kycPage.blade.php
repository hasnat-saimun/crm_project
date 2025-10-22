<div class="row mt-4">
    <div class="col-md-5 py-2">
        <div class="row">
            <div class="col-md-2 ">
                <h4 class="fw-bolder">KYC</h4>
            </div>

            <div class="col-md-2">
                <a href="#" id="refreshKyc"><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
            </div>
            <div class="col-md-2">
             @include('sales.clientDashbord.kycPart.addKyc')
            </div>
        </div>
    </div>
</div>

<!-- Loading indicator -->
<div id="kyc-loading" class="text-center p-4" style="display: none;">
    <i class="fa fa-spinner fa-spin fa-2x text-primary"></i>
    <p class="mt-2">Loading KYC records...</p>
</div>

<!-- Error message -->
<div id="kyc-error" class="alert alert-warning" style="display: none;">
    <i class="fa fa-exclamation-triangle"></i>
    <span id="kyc-error-message">Failed to load KYC records. Please try again.</span>
</div>

<div class="card">
    <div class="col-md-12 table-responsive table-responsive-sm">
        <table class="table table-hover table-sm">
            <caption>List of KYC Records</caption>
            <thead class="bg-dark report-white-font">
                <tr>
                    <th>Status</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Remark</th>
                    <th>Modified by</th>
                    <th>Document Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            
            <tbody id="kyc-records-tbody">
                <!-- Dynamic content will be loaded here -->
            </tbody>
        </table>
        
        <!-- No data message -->
        <div id="kyc-no-data" class="text-center p-4" style="display: none;">
            <i class="fa fa-info-circle fa-2x text-muted"></i>
            <p class="mt-2 text-muted">No KYC records found for this client.</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kyc">
                Create First KYC Request
            </button>
        </div>
    </div>
</div>

<script>
// KYC functionality
document.addEventListener('DOMContentLoaded', function() {
    // Get client email from URL or context
    const clientEmail = getClientEmailFromContext();
    
    if (clientEmail) {
        loadKycRecords(clientEmail);
    } else {
        showKycError('Client email not found');
    }
    
    // Refresh button functionality
    document.getElementById('refreshKyc').addEventListener('click', function(e) {
        e.preventDefault();
        if (clientEmail) {
            loadKycRecords(clientEmail);
        }
    });
});

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
    
    console.log('Client email detected for KYC:', email);
    return email;
}

function loadKycRecords(email) {
    console.log('Loading KYC records for:', email);
    
    // Show loading indicator
    showKycLoading(true);
    hideKycError();
    hideKycNoData();
    
    // Build the API URL
    let apiUrl;
    if (window.location.hostname === 'localhost' && window.location.port === '') {
        // XAMPP setup
        apiUrl = `/crm_project/api/kyc/${encodeURIComponent(email)}`;
    } else {
        // Laravel dev server or relative path
        apiUrl = `/api/kyc/${encodeURIComponent(email)}`;
    }
    
    console.log('KYC API URL:', apiUrl);
    
    // Make API request
    fetch(apiUrl)
        .then(response => {
            console.log('KYC Response status:', response.status);
            
            if (!response.ok) {
                throw new Error(`HTTP ${response.status}: ${response.statusText}`);
            }
            return response.json();
        })
        .then(data => {
            console.log('KYC data received:', data);
            showKycLoading(false);
            
            if (data.success && data.data && data.data.length > 0) {
                renderKycRecords(data.data);
            } else {
                showKycNoData();
            }
        })
        .catch(error => {
            console.error('KYC loading error:', error);
            showKycLoading(false);
            showKycError('Failed to load KYC records: ' + error.message);
            
            // Show demo data as fallback
            showDemoKycData(email);
        });
}

function renderKycRecords(records) {
    const tbody = document.getElementById('kyc-records-tbody');
    
    if (!records || records.length === 0) {
        showKycNoData();
        return;
    }
    
    let html = '';
    
    records.forEach((record, index) => {
        const statusBadge = getKycStatusBadge(record.status);
        const documentType = record.documentType || 'Identity Document';
        
        html += `
            <tr data-kyc-id="${record.id}">
                <td>
                    <span class="badge bg-${statusBadge}">${record.status}</span>
                </td>
                <td>${record.formatted_created || record.created}</td>
                <td>${record.formatted_updated || record.updated || 'N/A'}</td>
                <td>
                    <span title="${record.remark || 'No remarks'}">${truncateText(record.remark || 'No remarks', 30)}</span>
                </td>
                <td>${record.modifiedBy || 'System'}</td>
                <td>${documentType}</td>
                <td>
                    <div class="btn-group btn-group-sm" role="group">
                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="viewKycDetails('${record.id}')">
                            <i class="fa fa-eye"></i>
                        </button>
                        ${record.status === 'PENDING' ? `
                        <button type="button" class="btn btn-outline-success btn-sm" onclick="updateKycStatus('${record.id}', 'APPROVED')">
                            <i class="fa fa-check"></i>
                        </button>
                        <button type="button" class="btn btn-outline-danger btn-sm" onclick="updateKycStatus('${record.id}', 'REJECTED')">
                            <i class="fa fa-times"></i>
                        </button>
                        ` : ''}
                    </div>
                </td>
            </tr>
        `;
    });
    
    tbody.innerHTML = html;
    console.log('Rendered', records.length, 'KYC records');
}

function showDemoKycData(email) {
    console.log('Showing demo KYC data for:', email);
    
    const demoData = [
        {
            id: 'KYC_' + Math.random().toString(36).substr(2, 9),
            status: 'PENDING',
            formatted_created: '20-10-2025',
            formatted_updated: '21-10-2025 14:30',
            remark: 'Identity verification under review',
            modifiedBy: 'Admin User',
            documentType: 'Identity Document'
        },
        {
            id: 'KYC_' + Math.random().toString(36).substr(2, 9),
            status: 'APPROVED',
            formatted_created: '15-10-2025',
            formatted_updated: '16-10-2025 09:15',
            remark: 'Document verification completed successfully',
            modifiedBy: 'System Admin',
            documentType: 'Proof of Address'
        }
    ];
    
    renderKycRecords(demoData);
    
    // Show a notice that this is demo data
    const table = document.querySelector('.table');
    const demoNotice = document.createElement('div');
    demoNotice.className = 'alert alert-info mt-3';
    demoNotice.innerHTML = '<i class="fa fa-info-circle"></i> <strong>Demo Data:</strong> KYC API endpoint not available. Showing sample KYC records.';
    table.parentNode.appendChild(demoNotice);
}

function getKycStatusBadge(status) {
    const statusLower = status.toLowerCase();
    
    switch (statusLower) {
        case 'approved':
        case 'verified':
        case 'completed':
            return 'success';
        case 'pending':
        case 'under_review':
        case 'submitted':
            return 'warning';
        case 'rejected':
        case 'declined':
        case 'failed':
            return 'danger';
        default:
            return 'info';
    }
}

function truncateText(text, maxLength) {
    if (text.length <= maxLength) return text;
    return text.substr(0, maxLength) + '...';
}

function viewKycDetails(kycId) {
    // TODO: Implement KYC details modal
    alert('View KYC details for ID: ' + kycId);
}

function updateKycStatus(kycId, newStatus) {
    if (!confirm(`Are you sure you want to ${newStatus.toLowerCase()} this KYC request?`)) {
        return;
    }
    
    // Build the API URL
    let apiUrl;
    if (window.location.hostname === 'localhost' && window.location.port === '') {
        apiUrl = `/crm_project/api/kyc/${kycId}/status`;
    } else {
        apiUrl = `/api/kyc/${kycId}/status`;
    }
    
    fetch(apiUrl, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
        },
        body: JSON.stringify({
            status: newStatus,
            remark: `Status updated to ${newStatus} by user`
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('KYC status updated successfully');
            // Reload the records
            const clientEmail = getClientEmailFromContext();
            if (clientEmail) {
                loadKycRecords(clientEmail);
            }
        } else {
            alert('Failed to update KYC status: ' + (data.message || 'Unknown error'));
        }
    })
    .catch(error => {
        console.error('KYC status update error:', error);
        alert('Failed to update KYC status: ' + error.message);
    });
}

function showKycLoading(show) {
    const loadingEl = document.getElementById('kyc-loading');
    const tableEl = document.querySelector('.card');
    
    if (show) {
        loadingEl.style.display = 'block';
        tableEl.style.display = 'none';
    } else {
        loadingEl.style.display = 'none';
        tableEl.style.display = 'block';
    }
}

function showKycError(message) {
    const errorEl = document.getElementById('kyc-error');
    const messageEl = document.getElementById('kyc-error-message');
    
    messageEl.textContent = message;
    errorEl.style.display = 'block';
}

function hideKycError() {
    document.getElementById('kyc-error').style.display = 'none';
}

function showKycNoData() {
    document.getElementById('kyc-no-data').style.display = 'block';
    document.querySelector('.table').style.display = 'none';
}

function hideKycNoData() {
    document.getElementById('kyc-no-data').style.display = 'none';
    document.querySelector('.table').style.display = 'table';
}
</script>