@extends('header') @section('header')
<div class="col-md-6 mt-4">
    <h3 class="fw-bolder text-uppercase">
        Deposite holder name
    </h3>
</div>
<div class="col-md-6">
    <ul class="nav-right">
        <li>
            <a href="{{route('clientProfile')}}">
                <i class="fa-duotone fa-solid fa-left-to-bracket" style="--fa-secondary-opacity: 1;"></i>
            </a>
        </li>
    </ul>
</div>
@endsection @section('body')
<div class="card">
    <form method="POST" class="form" action="">
        <div class="row">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <h5 class="fw-bolder ">Deposite Request</h5>
                    </div>
                </div>
                <div class="card-box">
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label for="uuid" class="form-label">UUID</label>
                            <input type="text" class="form-control" id="uuid" placeholder="eamil@domain.com" name="uuid" />
                        </div>
                        <div class="col-md-3">
                            <label for="account" class="form-label">Account</label>
                            <input type="number" class="form-control" id="account" placeholder="" name="account" />
                        </div>
                        <div class="col-md-3">
                            <label for="Name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="Name" placeholder="" name="Name" />
                        </div>
                        <div class="col-md-3">
                            <label for="Surname" class="form-label">Surname</label>
                            <input type="text" class="form-control" id="Surname" placeholder="" name="Surname" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                        <label for="tradAcc" class="form-label">Trading Account</label>
                        <input type="unmber" class="form-control" id="tradAcc" placeholder="" name="tradAcc" />
                        </div>
                        <div class="col-md-3">
                            <label for="Payment" class="form-label">Payment Gateway</label>
                            <input type="text" class="form-control" id="Payment" placeholder="" name="Payment" />
                        </div>
                        <div class="col-md-3">
                        <label for="faxnum" class="form-label">Fax number</label>
                        <input type="number" class="form-control" id="faxnum" placeholder="" name="faxnum" />
                        </div>
                        <div class="col-md-3">
                        <label for="Currency" class="form-label">Currency</label>
                        <input type="text" class="form-control" id="Currency" placeholder="" name="Currency" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label for="amount" class="form-label">Amount
                            </label>
                            <input type="number" class="form-control" id="amount" placeholder="" name="amount" />
                        </div>
                        <div class="col-md-3">
                            <label for="netAmount" class="form-label">Net Amount</label>
                            <input type="number" class="form-control" id="netAmount" placeholder="" name="netAmount" />
                        </div>
                        <div class="col-md-3">
                            <label for="boked" class="form-label">Booked</label>
                            <input type="text" class="form-control" id="boked" placeholder="" name="boked" />
                        </div>
                        <div class="col-md-3">
                            <label for="created" class="form-label">Created</label>
                            <input type="date" class="form-control" id="created" placeholder="" name="created" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label for="createBy" class="form-label">Created By</label>
                            <input type="text" class="form-control" id="createBy" placeholder="" name="createBy" />
                        </div>
                        <div class="col-md-3">
                            <label for="update" class="form-label">Update</label>
                            <input type="date" class="form-control" id="update" placeholder="" name="update" />
                        </div>
                        <div class="col-md-3">
                            <label for="updateBy" class="form-label">Updated By</label>
                            <input type="text" class="form-control" id="updateBy" placeholder="" name="updateBy" />
                        </div>
                        <div class="col-md-3">
                            <label for="status" class="form-label">Status</label>
                            <input type="text" class="form-control" id="status" placeholder="" name="status" />
                        </div>
                        <div class="col-md-3 mt-2">
                            <label for="oprationNotification" class="form-label">Operation Notification</label>
                            <input type="text" class="form-control" id="oprationNotification" placeholder="" name="oprationNotification" />
                        </div>
                        <div class="col-md-3 mt-2">
                            <label for="paymentId" class="form-label">Payment Id</label>
                            <input type="number" class="form-control" id="paymentId" placeholder="" name="paymentId" />
                        </div>
                        <div class="col-md-8 mt-2">
                            <label for="remark" class="form-label">Remark</label>
                            <textarea class="form-control" id="remark" name="remark" rows="3"></textarea>
                        </div>
                        
                        <div class=" col-8 mt-2">
                            <label for="error" class="form-label">Errors</label>
                            <textarea class="form-control" id="error" name="error" rows="5"></textarea>
                        </div>
                        
                        <div class=" col-8 mt-2">
                            <label for="processingLogs" class="form-label">Processing logs</label>
                            <textarea class="form-control" id="processingLogs" name="processingLogs" rows="6">=================== 2024-08-29T15:15:37.800189Z ==============

                            Request status changed from BOOKED to DONE

                            =================== 2024-08-29T15:15:37.793984Z ==============

                            Request status changed from PROCESSING to BOOKED

                            =================== 2024-08-29T15:15:37.791664Z ==============

                            booked[3000.00] deposit

                            =================== 2024-08-29T15:15:37.767303Z ==============

                            Request status changed from AWAITING_CONFIRMATION to PROCESSING

                            =================== 2024-08-29T15:15:37.766722Z ==============

                            start booking[3000.00] deposit

                            =================== 2024-08-29T15:13:52.401925Z ==============

                            Request status changed from NEW to AWAITING_CONFIRMATION

                            =================== 2024-08-29T15:13:52.382152Z ==============

                            recalculate net amount form amount[3000]

                            =================== 2024-08-29T15:13:52.370464Z ==============

                            Prepare deposit request for:
                            DefaultPaymentRequestDto(paymentGatewayUuid=25998cec-315d-43d7-8568-3a9f3dde2766, tradingAccountUuid=933f0484-cbc7-4f0d-85c6-3db7dcd002c4, currency=USD, amount=3000, successUrl=null, failureUrl=null, expectedAmount=null)
</textarea>
                        </div>
                        
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <h5 class="fw-bolder ">Create Request Info</h5>
                    </div>
                </div>
                <div class="card-box">
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <label for="referencCode" class="form-label">Reference Code</label>
                            <input type="text" class="form-control" id="referencCode" placeholder="" name="referencCode" />
                        </div>
                        <div class="col-md-4">
                            <label for="paymentGatewayUuid" class="form-label">Payment Gateway UUID</label>
                            <input type="text" class="form-control" id="paymentGatewayUuid" placeholder="" name="paymentGatewayUuid" />
                        </div>
                        <div class="col-md-4">
                            <label for="tradingAccountUuid" class="form-label">Trading Account UUID</label>
                            <input type="text" class="form-control" id="tradingAccountUuid" placeholder="" name="tradingAccountUuid" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <label for="currency" class="form-label">currency</label>
                            <input type="text" class="form-control" id="currency" placeholder="" name="currency" />
                        </div>
                        <div class="col-md-4">
                            <label for="amount" class="form-label">Amount</label>
                            <input type="text" class="form-control" id="amount" placeholder="" name="amount" />
                        </div>
                    </div>
                </div>
                <div class="card-box">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row p-4">
                                <div class="d-grid gap-3 col-1   ">
                                    <a href="{{route('clientProfile')}}">
                                    <button type="button" class="btn btn-success ">Back</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </form>
</div>
@endsection