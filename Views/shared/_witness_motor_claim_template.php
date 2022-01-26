<div class="row witness_motor_claim" id="witness_motor_claim_<?= $count ?>">
    <div class="col-lg-12">
        <h5 class="title">
            <span class="count"></span> Witness Info:
            <div class="float-right"><i class="fa fa-times-circle item-remove" onclick="removeItem('witness_motor_claim_<?= $count ?>', 'witness_motor_claim')" title="Remove from list"></i></div>
        </h5>
    </div>
    <div class="form-group col-lg-6">
        <input type="text" required name="witness_motor_claim[<?= $count ?>][name]" class="form-control witness_name" placeholder="Name *" value="" />
    </div>

    <div class="form-group col-lg-6 ">
        <input type="text" required name="witness_motor_claim[<?= $count ?>][location]" class="form-control witness_location" placeholder="Address/Contact=" />
    </div>

    <div class=" col-lg-12">
        <label for="independent_witness">Is this an independent witness? </label>
    </div>

    <div class="form-group col-lg-12">
        <input type="radio" name="witness_motor_claim[independent_witness]" id="" class="purpose-radio-input independent_witness" value="yes">
        <label for="independentwitnessyes" class="purpose-radio-label">
            <span class="label-text">Yes</span>
        </label>
        &nbsp;
        &nbsp;
        <input type="radio" name="witness_motor_claim[independent_witness]" id="" class="purpose-radio-input independent_witness" value="no" checked>
        <label for="independentwitnessyes" class="purpose-radio-label">
            <span class="label-text">No</span>
        </label>

    </div>

    <div class=" col-lg-12">
        <label for="accident_reported">Has the accident been reported to the police? </label>
    </div>

    <div class="form-group col-lg-12">
        <input type="radio" name="witness_motor_claim[<?= $count ?>][accident_reported]" id="accidentreportyes_<?= $count ?>" class="purpose-radio-input accident_reported" onchange="appear('accidentreportyes_<?= $count ?>','yes', 'police_details', '<?= $count ?>')" value="yes">
        <label for="accidentreportedyes" class="purpose-radio-label">
            <span class="label-text">Yes</span>
        </label>
        
        &nbsp;
        &nbsp;
        <input type="radio" name="witness_motor_claim[<?= $count ?>][accident_reported]" id="accidentreportno" class="purpose-radio-input accident_reported" onchange="appear('accidentreportno','yes', 'police_details', '<?= $count ?>')" value="no" checked>
        <label for="accidentreportedno" class="purpose-radio-label">
            <span class="label-text">No</span>
        </label>

    </div>

    <div id="police_details_<?= $count ?>">
        
    </div>






</div>