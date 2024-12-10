@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-5">
        <div class="row">
            <div class="col-md-4">
                <h4 class="fw-bolder text-uppercase">mlib</h4>
            </div>
            <div class="col-md-2">
                <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-6 d-grid gap-2 d-md-flex">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-info text-uppercase btn-sm rounded" data-bs-toggle="modal" data-bs-target="#configuration">Add Configuration</button>
    </div>
</div>
@endsection @section('body')
<div class="card">
    <h4 class="fw-bolder text-uppercase text-red">There are currently no MLIB configurations</h4>
</div>

<!-- configuration button -->
<!-- Modal -->
<div class="modal fade" id="configuration" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="configurationLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="configurationLabel">Add configuration</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="system" class="form-label">System</label>
                    <select id="system" name="system" class="form-select">
                        <option value="FX 2.0">FX 2.0</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="mltbServiceUrl" class="form-label">MLIB service URL</label>
                    <input type="text" class="form-control" id="mltbServiceUrl" placeholder="" name="mltbServiceUrl" />
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-12">
                    <div class="row">
                        <div class="col-2">
                            <button type="submit" class="btn btn-danger">Cencle</button>
                        </div>
                        <div class="col-1">
                            <button type="submit" class="btn btn-info">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
