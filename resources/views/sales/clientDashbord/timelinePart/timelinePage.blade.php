<div class="row">
    <div class="row">
        <div class="col-2 mb-2">
            <button type="button" class="btn btn-primary rounded">Add Task</button>
        </div>
        <div class="col-2 mb-2">
            <button type="button" class="btn btn-primary rounded">Add note</button>
        </div>
        <div class="col-1 mb-2">
        <a href="#" id="refreshTimeline"><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
        </div>
        <div class="col-md-6">
        <form method="POST" class="form" action="">
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <input class="form-control border-right-0 border" type="search" placeholder="Search activities..." id="timeline-search-input" />
                        <div class="input-group-text bg-info"><i class="fa fa-search"></i></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
    <div class="col-12">
        <div class="card latest-update-card">
            <div class="card-header">
                <h5>Latest Activity</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                        <li><i class="feather icon-maximize full-card"></i></li>
                        <li><i class="feather icon-minus minimize-card"></i></li>
                        <li><i class="feather icon-refresh-cw reload-card" id="reloadTimeline"></i></li>
                        <li><i class="feather icon-trash close-card"></i></li>
                        <li><i class="feather icon-chevron-left open-card-option"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <!-- Loading indicator -->
                <div id="timeline-loading" class="text-center p-4" style="display: none;">
                    <i class="fa fa-spinner fa-spin fa-2x text-primary"></i>
                    <p class="mt-2">Loading timeline data...</p>
                </div>
                
                <!-- Error message -->
                <div id="timeline-error" class="alert alert-warning" style="display: none;">
                    <i class="fa fa-exclamation-triangle"></i>
                    <span id="timeline-error-message">Failed to load timeline data. Please try again.</span>
                </div>
                
                <!-- Timeline content -->
                <div class="scroll-widget" id="timeline-content">
                    <div class="latest-update-box" id="timeline-activities">
                        <!-- Dynamic content will be loaded here -->
                    </div>
                </div>
                
                <!-- No data message -->
                <div id="timeline-no-data" class="text-center p-4" style="display: none;">
                    <i class="fa fa-info-circle fa-2x text-muted"></i>
                    <p class="mt-2 text-muted">No activities found for this client.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Timeline functionality
document.addEventListener('DOMContentLoaded', function() {
    // Get client email from URL or context
    const clientEmail = getClientEmailFromContext();
    
    if (clientEmail) {
        loadTimelineData(clientEmail);
    } else {
        showTimelineError('Client email not found');
    }
    
    // Refresh button functionality
    document.getElementById('refreshTimeline').addEventListener('click', function(e) {
        e.preventDefault();
        if (clientEmail) {
            loadTimelineData(clientEmail);
        }
    });
    
    document.getElementById('reloadTimeline').addEventListener('click', function(e) {
        e.preventDefault();
        if (clientEmail) {
            loadTimelineData(clientEmail);
        }
    });
    
    // Search functionality
    document.getElementById('timeline-search-input').addEventListener('input', function(e) {
        filterTimelineActivities(e.target.value);
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
    
    console.log('Client email detected:', email);
    return email;
}

function loadTimelineData(email) {
    console.log('Loading timeline data for:', email);
    
    // Show loading indicator
    showTimelineLoading(true);
    hideTimelineError();
    hideTimelineNoData();
    
    // Build the API URL - determine the correct base path
    const basePath = window.location.pathname.includes('/crm_project/') ? '/crm_project' : '';
    const apiUrl = `${basePath}/api/timeline/${encodeURIComponent(email)}`;
    
    console.log('API URL:', apiUrl);
    console.log('Current location:', window.location.href);
    console.log('Base path detected:', basePath);
    
    // First, let's test if the API endpoint is reachable
    const testUrl = `${basePath}/api/timeline-test`;
    
    console.log('Testing API availability at:', testUrl);
    
    fetch(testUrl)
        .then(response => {
            console.log('Test endpoint response status:', response.status);
            if (response.ok) {
                console.log('Test endpoint working, proceeding with timeline data fetch');
                return fetchTimelineData(apiUrl);
            } else {
                throw new Error(`Test endpoint failed with status ${response.status}`);
            }
        })
        .catch(error => {
            console.error('Test endpoint failed, trying alternative approaches:', error);
            // Try alternative URL structures
            tryAlternativeUrls(email);
        });
}

function fetchTimelineData(apiUrl) {
    return fetch(apiUrl)
        .then(response => {
            console.log('Timeline response status:', response.status);
            console.log('Timeline response headers:', [...response.headers.entries()]);
            
            if (!response.ok) {
                throw new Error(`HTTP ${response.status}: ${response.statusText}`);
            }
            return response.json();
        })
        .then(data => {
            console.log('Timeline data received:', data);
            showTimelineLoading(false);
            
            if (data.success && data.data && data.data.length > 0) {
                renderTimelineActivities(data.data);
            } else {
                showTimelineNoData();
            }
        })
        .catch(error => {
            console.error('Timeline loading error:', error);
            showTimelineLoading(false);
            showTimelineError('Failed to load timeline data: ' + error.message);
        });
}

function tryAlternativeUrls(email) {
    const alternatives = [
        `/api/timeline/${encodeURIComponent(email)}`,
        `/crm_project/api/timeline/${encodeURIComponent(email)}`,
        `/public/api/timeline/${encodeURIComponent(email)}`,
        `/crm_project/public/api/timeline/${encodeURIComponent(email)}`
    ];
    
    console.log('Trying alternative URLs:', alternatives);
    
    let currentIndex = 0;
    
    function tryNext() {
        if (currentIndex >= alternatives.length) {
            showTimelineLoading(false);
            console.log('All alternatives failed, showing demo data');
            showDemoTimelineData(email);
            return;
        }
        
        const url = alternatives[currentIndex];
        console.log(`Trying alternative ${currentIndex + 1}:`, url);
        
        fetch(url)
            .then(response => {
                if (response.ok) {
                    console.log(`Alternative ${currentIndex + 1} worked!`);
                    return response.json();
                } else {
                    throw new Error(`Status ${response.status}`);
                }
            })
            .then(data => {
                console.log('Timeline data received from alternative URL:', data);
                showTimelineLoading(false);
                
                if (data.success && data.data && data.data.length > 0) {
                    renderTimelineActivities(data.data);
                } else {
                    showTimelineNoData();
                }
            })
            .catch(error => {
                console.log(`Alternative ${currentIndex + 1} failed:`, error.message);
                currentIndex++;
                tryNext();
            });
    }
    
    tryNext();
}

function showDemoTimelineData(email) {
    console.log('Showing demo timeline data for:', email);
    
    const demoData = [
        {
            type: 'registration',
            title: 'Account Created',
            description: 'Client account was successfully created',
            formatted_date: 'Oct 20, 2025 14:30',
            relative_date: '2 days ago',
            icon: 'fa-user-plus',
            color: 'primary'
        },
        {
            type: 'deposit',
            title: 'Deposit Request',
            description: 'Deposit of 1000 USD - Status: completed',
            formatted_date: 'Oct 21, 2025 09:15',
            relative_date: '1 day ago',
            icon: 'fa-arrow-down',
            color: 'success',
            amount: 1000,
            currency: 'USD',
            status: 'completed'
        },
        {
            type: 'trading_account',
            title: 'Trading Account Created',
            description: 'Trading Account #12345 (REAL) was created',
            formatted_date: 'Oct 21, 2025 10:30',
            relative_date: '1 day ago',
            icon: 'fa-chart-line',
            color: 'info',
            accountId: '12345',
            accountType: 'REAL'
        },
        {
            type: 'verification',
            title: 'Verification Status Updated',
            description: 'Account verification status changed to: VERIFIED',
            formatted_date: 'Oct 22, 2025 11:00',
            relative_date: '3 hours ago',
            icon: 'fa-check-circle',
            color: 'success',
            status: 'VERIFIED'
        }
    ];
    
    renderTimelineActivities(demoData);
    
    // Show a notice that this is demo data
    const container = document.getElementById('timeline-activities');
    const demoNotice = document.createElement('div');
    demoNotice.className = 'alert alert-info mt-3';
    demoNotice.innerHTML = '<i class="fa fa-info-circle"></i> <strong>Demo Data:</strong> API endpoint not available. Showing sample timeline data.';
    container.appendChild(demoNotice);
}

function renderTimelineActivities(activities) {
    const container = document.getElementById('timeline-activities');
    
    if (!activities || activities.length === 0) {
        showTimelineNoData();
        return;
    }
    
    let html = '';
    
    activities.forEach((activity, index) => {
        const iconClass = getActivityIcon(activity.type, activity.icon);
        const colorClass = getActivityColor(activity.color);
        const isLast = index === activities.length - 1;
        
        html += `
            <div class="row ${isLast ? '' : 'p-b-30'}" data-activity-type="${activity.type}">
                <div class="col-auto text-right update-meta p-r-0">
                    <i class="${colorClass} update-icon ring ${iconClass}"></i>
                </div>
                <div class="col p-l-5">
                    <h6><a href="#!">${activity.title}</a></h6>
                    <p class="text-muted m-b-0">${activity.description}</p>
                    <small class="text-info">
                        <i class="fa fa-clock"></i> ${activity.formatted_date} 
                        <span class="text-muted">(${activity.relative_date})</span>
                    </small>
                    ${activity.amount ? `<br><small class="text-success"><strong>${activity.amount} ${activity.currency}</strong></small>` : ''}
                    ${activity.status ? `<br><small class="badge badge-${getStatusBadgeColor(activity.status)}">${activity.status}</small>` : ''}
                </div>
            </div>
        `;
    });
    
    container.innerHTML = html;
    console.log('Rendered', activities.length, 'timeline activities');
}

function getActivityIcon(type, defaultIcon) {
    const icons = {
        'registration': 'fa fa-user-plus',
        'deposit': 'fa fa-arrow-down',
        'withdrawal': 'fa fa-arrow-up', 
        'trading_account': 'fa fa-chart-line',
        'verification': 'fa fa-check-circle',
        'note': 'fa fa-sticky-note',
        'task': 'fa fa-tasks',
        'login': 'fa fa-sign-in-alt',
        'trade': 'fa fa-exchange-alt'
    };
    
    return icons[type] || defaultIcon || 'fa fa-info-circle';
}

function getActivityColor(color) {
    const colorMap = {
        'primary': 'b-primary',
        'success': 'b-success', 
        'danger': 'b-danger',
        'warning': 'b-warning',
        'info': 'b-info',
        'secondary': 'b-secondary'
    };
    
    return colorMap[color] || 'b-primary';
}

function getStatusBadgeColor(status) {
    const statusLower = status.toLowerCase();
    
    if (['done', 'completed', 'success', 'verified'].includes(statusLower)) {
        return 'success';
    } else if (['pending', 'processing', 'in_progress'].includes(statusLower)) {
        return 'warning';
    } else if (['failed', 'rejected', 'cancelled'].includes(statusLower)) {
        return 'danger';
    } else {
        return 'info';
    }
}

function filterTimelineActivities(searchTerm) {
    const activities = document.querySelectorAll('#timeline-activities > div[data-activity-type]');
    const term = searchTerm.toLowerCase();
    
    activities.forEach(activity => {
        const title = activity.querySelector('h6').textContent.toLowerCase();
        const description = activity.querySelector('p').textContent.toLowerCase();
        const matches = title.includes(term) || description.includes(term);
        
        activity.style.display = matches ? '' : 'none';
    });
}

function showTimelineLoading(show) {
    const loadingEl = document.getElementById('timeline-loading');
    const contentEl = document.getElementById('timeline-content');
    
    if (show) {
        loadingEl.style.display = 'block';
        contentEl.style.display = 'none';
    } else {
        loadingEl.style.display = 'none';
        contentEl.style.display = 'block';
    }
}

function showTimelineError(message) {
    const errorEl = document.getElementById('timeline-error');
    const messageEl = document.getElementById('timeline-error-message');
    
    messageEl.textContent = message;
    errorEl.style.display = 'block';
}

function hideTimelineError() {
    document.getElementById('timeline-error').style.display = 'none';
}

function showTimelineNoData() {
    document.getElementById('timeline-no-data').style.display = 'block';
    document.getElementById('timeline-content').style.display = 'none';
}

function hideTimelineNoData() {
    document.getElementById('timeline-no-data').style.display = 'none';
}
</script>