@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-5">
        <div class="row">
            <div class="col-md-4 ">
                <h4 class="fw-bolder">Offers</h4>
            </div>
            <div class="col-md-2">
                <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
            </div>
            <div class="col-md-2 ">
                <a href="{{route('addOffer')}}"><i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-2 d-grid gap-2 d-md-flex ">
        <button type="button" class="btn btn-info text-uppercase btn-sm rounded">Change Oeder</button>
    </div>
</div>
@endsection 
@section('body')
<div class="card">
    <div class="col-md-12 table-responsive table-responsive-sm">
    <table class="table table-hover table-sm" id="offersTable">
        <caption>List of users</caption>
        <form method="POST" class="form align-items-center" action="">
        <thead class="bg-dark report-white-font">
            <tr>
                <th>Name</th>
                <th>Group</th>
                <th>System</th>
                <th>Branch</th>
                <th>Intral deposit</th>
                <th>Currency</th>
                <th>Demo</th>
            </tr>
        </thead>
        </form>

        @php
    /**
     * Safely render values coming from API:
     * - arrays/objects → JSON or joined string
     * - booleans → "Yes"/"No"
     * - null → fallback
     */
    function show_val($value, $fallback = 'N/A') {
        if (is_null($value)) return $fallback;
        if (is_bool($value)) return $value ? 'Yes' : 'No';
        if (is_array($value) || is_object($value)) {
            // Try some common patterns: name, id, code; otherwise JSON
            $v = (array)$value;
            foreach (['name','title','symbol','code','id'] as $k) {
                if (array_key_exists($k, $v) && !is_array($v[$k]) && !is_object($v[$k])) {
                    return (string)$v[$k];
                }
            }
            return json_encode($value, JSON_UNESCAPED_UNICODE);
        }
        return (string)$value;
    }
@endphp

        <tbody>
            @foreach($offers as $offer)
                <tr>
                    <td>
                        <a href="{{ route('offerForm') }}" class="text-primary">
                            {{ show_val(data_get($offer, 'name'), 'No Name') }}
                        </a>
                    </td>
                    <td>{{ show_val(data_get($offer, 'group')) }}</td>
                    <td>{{ show_val(data_get($offer, 'system')) }}</td>
                    <td>{{ show_val(data_get($offer, 'branch')) }}</td>
                    <td>{{ show_val(data_get($offer, 'intra_deposit')) }}</td>
                    <td>{{ show_val(data_get($offer, 'currency')) }}</td>
                    <td>{{ show_val(data_get($offer, 'demo')) }}</td>
                </tr>
            @endforeach


        </tbody>
    </table>
</div>
</div>
@endsection