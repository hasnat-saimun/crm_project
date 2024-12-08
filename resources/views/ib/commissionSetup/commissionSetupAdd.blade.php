@extends('header') @section('header')
<div class="col-md-6 mt-4">
    <h3 class="fw-bolder text-uppercase">
       Commission name
    </h3>
</div>
@endsection @section('body')
<div class="card">
    <form method="POST" class="form" action="">
        <div class="row">
            <div class="card-box">
                <div class="row mt-2 py-4">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="" name="name" />
                    </div>
                    <div class="col-md-6">
                        <label for="description " class="form-label">Description </label>
                        <input type="text" class="form-control" id="description" placeholder="" name="description" />
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="card">
    <div class="row mt-2">
        <div class="col-md-3 px-2">
            <h4 class="fw-bolder">Commission levels</h4>
        </div>
        <div class="col-md-1 px-2">
            <a href=""><i class="fa-regular fa-arrows-rotate-reverse fa-sm bg-info rounded p-3"></i></a>
        </div>
        <div class="col-md-1 px-2">
            <button type="button" class="btn  btn-sm rounded px-2" data-bs-toggle="modal" data-bs-target="#commission">
                <i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success rounded p-3" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i>
            </button>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-12 table-responsive table-responsive-sm">
            <table class="table table-hover table-sm ">
            <caption>List of users</caption>
                <thead class="bg-dark report-white-font">
                    <tr>
                        <th scope="col">Type</th>
                        <th>Offer</th>
                        <th>Depth</th>
                        <th>Levels</th>
                        <th>Instruments</th>
                        <th scope="col">Only for non-zero bfalance</th>
                    </tr>
                </thead>
                <tbody >
                    <tr>
                    <td>$ per lot</td>
                    <td>Standerd</td>
                    <td>1</td>
                    <td>[4.0]</td>
                    <td>All instruments</td>
                    <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="row">
        <div class="col-1">
            <a href="">
                <button type="button" class="btn btn-info">Edit</button>
            </a>    
        </div>
        <div class="col-1 ">
            <a href="">
                <button type="button" class="btn btn-info">save</button>
            </a>    
        </div>
        <div class="col-1 ">
            <a href="">
                <button type="button" class="btn btn-danger">Clear</button>
            </a>    
        </div>
    </div>


<!-- sub ID button -->
<!-- Modal -->
<div class="modal fade" id="commission" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="commissionLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="commissionLabel">Add commission level</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class=" col-6 mb-3">
                        <label for="leadSource" class="form-label">Type</label>
                            <select id="supportedCurrency" name="supportedCurrency" class="form-select">
                                <option value="islam">$ per 100k$</option>
                                <option value="hindu">Revenue share</option>
                                <option value="cristian">% of markup</option>
                                <option value="cristian">% of spread</option>
                                <option value="cristian">Pips</option>
                                <option value="cristian">$ per lot</option>
                            </select>
                    </div>
                    <div class=" col-6 mb-3">
                        <label for="leadSource" class="form-label">Offer</label>
                            <select id="supportedCurrency" name="supportedCurrency" class="form-select">
                                <option value="islam">LGNFX Sub IB</option>
                                <option value="hindu">Vission IB</option>
                                <option value="cristian">Vission Sub IB</option>
                                <option value="cristian">Golden</option>
                                <option value="cristian">IB Account</option>
                                <option value="cristian">Sub IB</option>
                                <option value="cristian">DEMO</option>
                                <option value="cristian">DEMO ACCOUNT</option>
                                <option value="cristian">Google</option>
                                <option value="cristian">Standard</option>
                                <option value="cristian">PREMIUM</option>
                                <option value="cristian">LGNFX IB</option>
                            </select>
                    </div>
                    <div class="col-5">
                        <a href="">
                            <button type="button" class="btn btn-danger">Remove last level</button>
                        </a>    
                    </div>
                    <div class="col-4">
                        <a href="">
                            <button type="button" class="btn btn-info">Add level</button>
                        </a>    
                    </div>
                </div>
                <div class="row mt-3">
                        <div class="col-md-6 ">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" />
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Creat as a diposit client
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="form-check">
                                <label for="list" class="form-label">Comma separated instrument list</label>
                                <input type="text" class="form-control" id="mail" placeholder="" name="list" />
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault2" checked />
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Creat trading account
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault2" checked />
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Creat trading account
                                </label>
                            </div>
                        </div>
                        
                    </div>
                
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-5">
                        <a href="">
                            <button type="button" class="btn btn-danger">Cancle</button>
                        </a>    
                    </div>
                    <div class="col-4 ">
                        <a href="">
                            <button type="button" class="btn btn-info">save</button>
                        </a>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!--   -->