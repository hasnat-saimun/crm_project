@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-3">
        <div class="row">
            <div class="col-md-6 px-2">
                <h4 class="fw-bolder">Leads</h4>
            </div>

            <div class="col-md-3 px-2">
                <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
            </div>
            <div class="col-md-3 px-2">
                <a href="{{route('addLead')}}"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <form method="POST" class="form" action="">
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <input class="form-control border-right-0 border" type="search" placeholder="Enter Keyword" id="example-search-input" />
                        <div class="input-group-text bg-info"><i class="fa fa-search"></i></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <input type="date" class="form-control" id="to" placeholder="" name="to" />
                </div>
                <div class="col-md-4">
                    <input type="date" class="form-control" id="form" placeholder="" name="form" />
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-3">
        <div class="row">
            <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="button" class="btn btn-info text-uppercase btn-sm rounded">bulk operation</button>
                <button type="button" class="btn btn-secondary text-uppercase btn-sm rounded" data-bs-toggle="modal" data-bs-target="#columnVisibilityModal">
                    <i class="fa fa-columns"></i> Columns
                </button>
            </div>
        </div>
    </div>
</div>
@endsection 
@section('body')
<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">
            <i class="fa fa-users"></i> Leads Management
            <span class="badge badge-info ml-2" id="totalRecords">Loading...</span>
        </h5>
    </div>
    <div class="card-body">
        <div class="table-responsive-enhanced">
            <table class="table table-hover table-sm" id="leadsTable">
        <caption>List of leads</caption>
        <form method="POST" class="form align-items-center" action="">
        <thead class="bg-dark report-white-font">
            <tr>
                <th data-priority="1" class="control">
                    <input class="form-check-input" type="checkbox" id="selectAll">
                </th>
                <th data-priority="2" class="all">Contacted</th>
                <th data-priority="1" class="all">
                    <div class="d-flex flex-column">
                        <span class="mb-1">Email</span>
                        <input type="search" class="form-control form-control-sm" placeholder="Search email..." />
                    </div>
                </th>
                <th data-priority="3" class="desktop">
                    <div class="d-flex flex-column">
                        <span class="mb-1">First Name</span>
                        <input class="form-control form-control-sm" type="search" placeholder="First name..." />
                    </div>
                </th>
                <th data-priority="4" class="desktop">
                    <div class="d-flex flex-column">
                        <span class="mb-1">Last Name</span>
                        <input class="form-control form-control-sm" type="search" placeholder="Last name..." />
                    </div>
                </th>
                <th data-priority="5" class="tablet-l">Created</th>
                <th data-priority="6" class="tablet-l">Last Contact</th>
                <th data-priority="3" class="all">Status</th>
                <th style="width: 150px;">
                    <div class="d-flex flex-column">
                        <span class="mb-1">Manager</span>
                        <input class="form-control form-control-sm" type="search" placeholder="Manager..." />
                    </div>
                </th>
                <th style="width: 150px;">
                    <div class="d-flex flex-column">
                        <span class="mb-1">Phone</span>
                        <input class="form-control form-control-sm" type="search" placeholder="Phone..." />
                    </div>
                </th>
                <th style="width: 80px;">Language</th>
                <th style="width: 120px;">
                    <div class="d-flex flex-column">
                        <span class="mb-1">Lead Source</span>
                        <input class="form-control form-control-sm" type="search" placeholder="Source..." />
                    </div>
                </th>
                <th style="width: 80px;">Country</th>
                <th style="width: 80px;">Type</th>
            </tr>
        </thead>
        </form>
        <tbody>
            @if(empty($leads))
                <tr>
                    <td colspan="14" class="text-center text-muted">
                        <p>No leads found.</p>
                        <small>Debug: {{ isset($leads) ? 'Variable exists but empty' : 'Variable not set' }}</small>
                    </td>
                </tr>
            @endif
            @foreach($leads as $lead)
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox" value="{{ $lead['uuid'] ?? '' }}" id="lead_{{ $loop->index }}">
                </td>
                <td>
                    <span class="badge {{ ($lead['alreadyContacted'] ?? false) ? 'bg-success' : 'bg-warning text-dark' }}">
                        {{ ($lead['alreadyContacted'] ?? false) ? 'Yes' : 'No' }}
                    </span>
                </td>
                <td>
                    <a href="{{route('clientProfile', ['email' => $lead['email'] ?? ''])}}" class="text-primary">
                        {{ $lead['email'] ?? 'N/A' }}
                    </a>
                </td>
                <td>{{ $lead['firstName'] ?? 'N/A' }}</td>
                <td>{{ $lead['lastName'] ?? 'N/A' }}</td>
                <td>
                    <small>
                        {{ isset($lead['created']) ? \Carbon\Carbon::parse($lead['created'])->format('d.m.Y') : 'N/A' }}
                    </small>
                </td>
                <td>
                    <small>
                        {{ isset($lead['toContactDate']) && $lead['toContactDate'] ? \Carbon\Carbon::parse($lead['toContactDate'])->format('d.m.Y') : 'Never' }}
                    </small>
                </td>
                <td>
                    <span class="badge {{ ($lead['verificationStatus'] ?? '') === 'NEW' ? 'bg-info' : (($lead['verificationStatus'] ?? '') === 'PENDING' ? 'bg-warning text-dark' : 'bg-secondary') }}">
                        {{ $lead['verificationStatus'] ?? 'N/A' }}
                    </span>
                </td>
                <td>
                    <small>
                        {{ $lead['managerName'] ?? $lead['accountManager'] ?? 'Unassigned' }}
                    </small>
                </td>
                <td>{{ $lead['phoneNumber'] ?? 'N/A' }}</td>
                <td>
                    <span class="badge bg-light text-dark">
                        {{ strtoupper($lead['language'] ?? 'EN') }}
                    </span>
                </td>
                <td>
                    <span class="badge bg-secondary">
                        {{ $lead['leadSource'] ?? 'Unknown' }}
                    </span>
                </td>
                <td>
                    <span class="badge bg-light text-dark">
                        {{ $lead['country'] ?? 'N/A' }}
                    </span>
                </td>
                <td>
                    <span class="badge {{ ($lead['type'] ?? '') === 'RETAIL' ? 'bg-primary' : 'bg-secondary' }}">
                        {{ $lead['type'] ?? 'N/A' }}
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Column Visibility Modal -->
<div class="modal fade" id="columnVisibilityModal" tabindex="-1" aria-labelledby="columnVisibilityLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="columnVisibilityLabel">
                    <i class="fa fa-columns"></i> Show/Hide Columns
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-sm btn-success" id="showAllColumns">
                                <i class="fa fa-check-square"></i> Show All
                            </button>
                            <button type="button" class="btn btn-sm btn-warning" id="hideAllColumns">
                                <i class="fa fa-square"></i> Hide All
                            </button>
                            <button type="button" class="btn btn-sm btn-info" id="resetColumns">
                                <i class="fa fa-refresh"></i> Reset Default
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row" id="columnToggles">
                    <!-- Column toggles will be dynamically generated here -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="applyColumnSettings">
                    <i class="fa fa-check"></i> Apply Changes
                </button>
            </div>
        </div>
    </div>
</div>

@endsection