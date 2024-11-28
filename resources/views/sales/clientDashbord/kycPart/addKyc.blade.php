

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary rounded" data-bs-toggle="modal" data-bs-target="#kyc">
<i class="fa-duotone fa-solid fa-user-plus fa-sm bg-success" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 1;"></i>
</button>   

<!-- Add note button -->
<!-- Modal -->
<div class="modal fade" id="kyc" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="staticBackdropLabel">New Identity Request for testclient@gmail.com</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="row align-items-center query-box">
                    <div class="col-12 mx-auto">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Account Details</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Bank Details</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Document</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
    <form action="" class="form-control">
        <div class="row">
            <div class="col-6 mb-2">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="">
            </div>
            <div class="col-6 mb-2">
                <label for="surName" class="form-label">Surname</label>
                <input type="text" class="form-control" id="surName" name="surName" placeholder="">
            </div>
            <div class="col-6 mb-2">
                <label for="birthDate" class="form-label">Date of birth</label>
                <input type="date" class="form-control" id="birthDate" name="birthDate" placeholder="">
            </div>
            <div class="col-6 mb-2">
                <label for="mobile" class="form-label">Phone number</label>
                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="">
            </div>
            <div class="col-6 mb-2">
                <label for="country" class="form-label">Country</label>
                <input type="text" class="form-control" id="country" name="country" placeholder="">
            </div>
            <div class="col-6 mb-2">
                <label for="state" class="form-label">State</label>
                <input type="text" class="form-control" id="state" name="state"placeholder="">
            </div>
            <div class="col-6 mb-2">
                <label for="city" class="form-label">city</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="">
            </div>
            <div class="col-6 mb-2">
                <label for="PostCoad" class="form-label">Post coad</label>
                <input type="text" class="form-control" id="PostCoad" name="PostCoad" placeholder="">
            </div>
            <div class="col-6 mb-2">
                <label for="address" class="form-label">Adddress</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="">
            </div>
        </div>
        <div class="row">
            <div class="col-6 mb-2">
                <button type="button" class="btn btn-primary">Cancle</button>
            </div>
            <div class="col-6 mb-2">
                <button type="button" class="btn btn-info">Create</button>
            </div>
        </div>

    </form>
  </div>
  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
  <div class="row p-2">
            <div class="col-6 mb-2">
                <label for="bankName" class="form-label">Bank name</label>
                <input type="text" class="form-control" id="bankName " name="bankName " placeholder="">
            </div>
            <div class="col-6 mb-2">
                <label for="bankAddress" class="form-label">Bank address</label>
                <input type="text" class="form-control" id="bankAddress" name="bankAddress" placeholder="">
            </div>
            <div class="col-6 mb-2">
                <label for="swiftCoad" class="form-label">Bank swift code</label>
                <input type="number" class="form-control" id="swiftCoad" name="swiftCoad" placeholder="">
            </div>
            <div class="col-6 mb-2">
                <label for="bankAcount" class="form-label">Bank account</label>
                <input type="number" class="form-control" id="bankAcount" name="bankAcount" placeholder="">
            </div>
            <div class="col-6 mb-2">
                <label for="accountName" class="form-label">Account name</label>
                <input type="text" class="form-control" id="accountName" name="accountName" placeholder="">
            </div>
            <div class="col-6 mb-2">
                <label for="state" class="form-label">State</label>
                <input type="text" class="form-control" id="state" name="state"placeholder="">
            </div>
            <div class="col-6 mb-2">
                <label for="city" class="form-label">city</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="">
            </div>
            <div class="col-6 mb-2">
                <label for="PostCoad" class="form-label">Post coad</label>
                <input type="text" class="form-control" id="PostCoad" name="PostCoad" placeholder="">
            </div>
            <div class="col-6 mb-2">
                <label for="address" class="form-label">Adddress</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="">
            </div>
        </div>
        <div class="row">
            <div class="col-6 mb-2">
                <button type="button" class="btn btn-primary">Cancle</button>
            </div>
            <div class="col-6 mb-2">
                <button type="button" class="btn btn-info">Create</button>
            </div>
        </div>
  </div>
</div>
                    </div>
                </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Confirm</button>
            </div>
        </div>
    </div>
</div>