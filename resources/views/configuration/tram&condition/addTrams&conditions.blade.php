@extends('header') @section('header')
<div class="row mt-4">
    <div class="col-md-5">
        <h4 class="fw-bolder">Create terms & conditions link</h4>
    </div>
</div>

@endsection @section('body')
<div class="card card-box">
    <form method="POST" class="form" action="">
            <div class="col-4 mb-3">
                <label for="rolsName" class="form-label">Name</label>
                <input type="text" class="form-control" id="rolsName" placeholder="" name="rolsName" />
            </div>
            <div class="col-4 mb-3">
                <label for="url" class="form-label">URl</label>
                <input type="text" class="form-control" id="url" placeholder="" name="url" />
            </div>
            <div class="mb-2 form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Do not show Email
                </label>
            </div>
            <div class="mb-3 form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Do not show Phone number
                </label>
            </div>
            <div class="col-4 mb-3">
                <label for="branches" class="form-label">Branches</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="Test Admin">Test Admin</option>
                    </select>
            </div>
        <div class="row my-4">
            <div class="col-1">
                <a href="{{route('tramsConditions')}}" class="btn btn-success">Back</a>
            </div>
            <div class="col-1">
                <button type="submit" class="btn btn-info">Create</button>
            </div>
        </div>
    </form>
</div>

@endsection
