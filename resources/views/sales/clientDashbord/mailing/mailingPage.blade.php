<div class="row p-2">
    <div class="col-6 mb-2">
        <label for="bankName" class="form-label">Mailing</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Mailing</option>
            <option value="2">Notification</option>
        </select>
    </div>
    <div class="col-6 mb-2">
        <label for="mail" class="form-label">Email</label>
        <input type="eamil" class="form-control" id="mail" name="mail" placeholder="" />
    </div>
    <div class="col-6 mb-2">
        <label for="swiftCoad" class="form-label">Bank swift code</label>
        <input type="number" class="form-control" id="swiftCoad" name="swiftCoad" placeholder="" />
    </div>
    <div class="col-6 mb-2">
        <label for="subject" class="form-label">Subject</label>
        <input type="text" class="form-control" id="subject" name="subject" placeholder="" />
    </div>
    <div class="col-12 mb-2">
        <label for="message" class="form-label">Message</label>
        <select id="message" name="message" class="form-control selectpicker" multiple aria-label="size 7 select example">
            <option value="islam">ACCOUNT_EMAIL </option>
            <option value="hindu">ACCOUNT_ADDRESS</option>
            <option value="cristian">ACCOUNT_PHONE</option>
            <option value="cristian">ACCOUNT_NAME</option>
            <option value="cristian">ACCOUNT_SURNAME</option>
            <option value="cristian">ACCOUNT_MANAGER_NAME</option>
            <option value="cristian">CCOUNT_MANAGER_SURNAME</option>
            <option value="cristian">PLATFORM_ADDRESS</option>
        </select>
    </div>
</div>
<div class="row">
    <div class="col-1 mb-2">
        <button type="button" class="btn btn-primary">Back</button>
    </div>
    <div class="col-1 mb-2">
        <button type="button" class="btn btn-primary">Clear</button>
    </div>
    <div class="col-1 mb-2">
        <button type="button" class="btn btn-info">Send</button>
    </div>
</div>
