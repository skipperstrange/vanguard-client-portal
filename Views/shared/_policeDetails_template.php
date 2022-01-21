<div class="row policeDetails" id="policeDetails">
    <div class="form-group col-lg-6 col-md-6">
        <div class="input-group date" id="id_0">
            <input type="text" name="policeDetails[date]" placeholder="Date accident was reported" title="" class="form-control" required />
            <div class="input-group-addon input-group-append">
                <div class="input-group-text">
                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group col-lg-6">
        <input type="text" id="police_station" required name="policeDetails[location]" class="form-control" placeholder="Which police station was the accident reported to? *" value="" />
    </div>
    <div class="form-group col-lg-6">
        <input type="text" id="police_constable" required name="policeDetails[constable]" class="form-control" placeholder="Name of the constable who took particulars? *" value="" />
    </div>
</div>