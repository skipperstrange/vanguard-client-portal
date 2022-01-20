<div class="col-lg-6">
    <div class="row">
        <div class="form-group col-lg-12 ">
            <input type="text" id="vehicle_reg" name="motor-claim[vehicle_reg]" class="form-control" placeholder="Vehicle Reg *" value="" />
        </div>
    </div>
</div>

<div class="form-group col-lg-6">
    <input type="text" id="vehicle_make" name="motor-claim[vehicle_make]" class="form-control" placeholder="Vehicle Make *" value="" />
</div>

<div class="form-group col-lg-6">
    <input type="text" id="vehicle_model" name="motor-claim[vehicle_model]" class="form-control" placeholder="Model *" value="" />
</div>




<div class="form-group col-lg-6">
    <div class="input-group date" id="id_0">
        <input type="text" name="motor-claim[year_of_manufacture]" placeholder="Year Of Manufacture" title="" class="form-control" />
        <div class="input-group-addon input-group-append">
            <div class="input-group-text">
                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
            </div>
        </div>
    </div>
</div>

<div class="form-group col-lg-6 ">
    <div class="input-group date" id="id_0">
        <input type="text" name="motor-claim[year_of_reg]" placeholder="Year Of Registration" title="" class="form-control" />
        <div class="input-group-addon input-group-append">
            <div class="input-group-text">
                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
            </div>
        </div>
    </div>
</div>


<div class="form-group col-lg-6 ">
    <input type="number" id="chassis_no" name="motor-claim[chassis_no]" class="form-control" placeholder="Chassis Number *" value="" />
</div>


<div class="col-lg-12">
    <label for="vehicle_consent">Was the vehicle used with your consent?</label>
</div>
<div class="form-group col-lg-6 col-md-6">
    <input type="radio" name="motor-claim[vehicle_consent]" id="" class="purpose-radio-input vehicle-consent" value="yes">
    <label for="vehicleconsentyes" class="purpose-radio-label">
        <span class="label-text">Yes</span>
    </label>
    &nbsp;
    &nbsp;
    <input type="radio" name="motor-claim[vehicle_consent]" id="" class="purpose-radio-input vehicle-consent" value="no" checked>
    <label for="vehicleconsentno" class="purpose-radio-label">
        <span class="label-text">No</span>
    </label>
</div>