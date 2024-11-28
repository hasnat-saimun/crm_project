@extends('header') @section('header')
<div class="col-md-6 mt-4">
    <h3 class="fw-bolder text-uppercase">
        Payment Processor Balance
    </h3>
</div>
@endsection @section('body')
<div class="card">
    <form method="POST" class="form" action="">
        <div class="row">
            <div class="row mt-3">
                <div class="col-md-12">
                    <h5 class="fw-bolder">Withdraw funds</h5>
                </div>
            </div>
            <div class="card-box mb-4">
                <div class="row mt-2">
                    <div class="col-md-3">
                        <label for="mail" class="form-label">Available currencies </label>
                        <select id="actype" class="form-select">
                            <option value="islam">USD </option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="balance" class="form-label">Balance</label>
                        <input type="balance" class="form-control" id="balance" placeholder="" name="balance" />
                    </div>
                    <div class="col-md-3 mt-4">
                        <button type="button" class="btn btn-success">Load Balance</button>
                    </div>

                    <div class="col-md-3 mt-4">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                            Withdraw funds
                        </button>

                        <!-- Add note button -->
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Withdraw funds</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="amount" class="form-label">Amount</label>
                                            <input type="number" class="form-control" id="amount" placeholder="" name="amount" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="note" class="form-label">Trading account</label>
                                            <select id="actype" class="form-select">
                                                <option value="islam">USD </option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="comment" class="form-label">Comment</label>
                                            <input type="text" class="form-control" id="comment" placeholder="" name="comment" />
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Confirm</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
