<div class="col-lg-6">
    <div class="row">
        <div class="form-group col-lg-12 ">
            <input type="text" id="vehicle_reg" name="vehiclemotor-claim[vehicle_reg]" class="form-control" placeholder="Vehicle Reg *" value="" />
        </div>
    </div>
</div>

<div class="form-group col-lg-6">
    <input type="text" id="vehicle_make" name="vehiclemotor-claim[vehicle_make]" class="form-control" placeholder="Vehicle Make *" value="" />
</div>

<div class="form-group col-lg-6">
    <input type="text" id="vehicle_model" name="vehiclemotor-claim[vehicle_model]" class="form-control" placeholder="Model *" value="" />
</div>




<div class="form-group col-lg-6">
    <div class="input-group date" id="id_0">
        <input type="text" name="vehiclemotor-claim[year_of_manufacture]" placeholder="Year Of Manufacture" title="" class="form-control" />
        <div class="input-group-addon input-group-append">
            <div class="input-group-text">
                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
            </div>
        </div>
    </div>
</div>

<div class="form-group col-lg-6 ">
    <div class="input-group date" id="id_0">
        <input type="text" name="vehiclemotor-claim[year_of_reg]" placeholder="Year Of Registration" title="" class="form-control" />
        <div class="input-group-addon input-group-append">
            <div class="input-group-text">
                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
            </div>
        </div>
    </div>
</div>


<div class="form-group col-lg-6 ">
    <input type="number" id="chassis_no" name="vehiclemotor-claim[chassis_no]" class="form-control" placeholder="Chassis Number *" value="" />
</div>


<div class="col-lg-12">
    <label for="vehicle_agreement">Is the vehicle the subject of a hire purchase or loan agreement?</label>
</div>
<div class="form-group col-lg-6 col-md-6">
    <input type="radio" name="vehiclemotor-claim[<?= $count ?>][vehicle_agreement]" id="vehicleagreementyes_<?= $count ?>" class="purpose-radio-input vehicle-consent" onchange="appear('vehicleagreementyes_<?= $count ?>','yes', 'agreement', '<?= $count ?>')" value="yes">
    <label for="vehicleconsentyes" class="purpose-radio-label">
        <span class="label-text">Yes</span>
    </label>
    &nbsp;
    &nbsp;
    <input type="radio" name="vehiclemotor-claim[<?= $count ?>][vehicle_agreement]" id="vehicleagreementno" class="purpose-radio-input vehicle-consent" onchange="appear('vehicleagreementno','yes', 'agreement', '<?= $count ?>')" value="no" checked>
    <label for="vehicleconsentno" class="purpose-radio-label">
        <span class="label-text">No</span>
    </label>
</div>

<div class="col-lg-12" id="agreement_<?= $count ?>">

</div>


<div class="form-group col-md-12">
    <textarea textarea name="vehiclemotor-claim[purpose_of_vehicle]" title="purpose of vehicle?" class="form-control" placeholder="State fully the purpose of which the vehicle is being used." style="width: 100%; height: 100px;"></textarea>
</div>

<div class="col-lg-12">
    <label for="vehicle_consent">Was the vehicle used with your consent?</label>
</div>
<div class="form-group col-lg-6 col-md-6">
    <input type="radio" name="vehiclemotor-claim[vehicle_consent]" id="" class="purpose-radio-input vehicle-consent" value="yes">
    <label for="vehicleconsentyes" class="purpose-radio-label">
        <span class="label-text">Yes</span>
    </label>
    &nbsp;
    &nbsp;
    <input type="radio" name="vehiclemotor-claim[vehicle_consent]" id="" class="purpose-radio-input vehicle-consent" value="no" checked>
    <label for="vehicleconsentno" class="purpose-radio-label">
        <span class="label-text">No</span>
    </label>
</div>