<div class="row casualtyMotorClaim" id="casualtyMotorClaim_<?= $count ?>">
    <div class="col-lg-12">
        <h5 class="title">
            <span class="count"></span> Third party involved in accident:
            <div class="float-right"><i class="fa fa-times-circle item-remove" onclick="removeItem('casualtyMotorClaim_<?= $count ?>', 'casualty')" title="Remove from list"></i></div>
        </h5>
    </div>
    <div class="form-group col-lg-6 col-md-12">
        <input type="text" required name="<?= "casualtyMotorClaim[$count][name]" ?>" class="form-control casualty_name" placeholder="Name of injured person*" value="" />
    </div>
    <div class="form-group col-lg-6 col-md-12">
        <input type="text" required name="<?= "casualtyMotorClaim[$count][address]" ?>" class="form-control casualty_location" placeholder="Address/contact of injured person" value="" />
    </div>
    <div class="form-group col-lg-6 col-md-12">
        <input type="text" required name="<?= "casualtyMotorClaim[$count][injury]" ?>" class="form-control casualty_location" placeholder="Extent of the persons injury" value="" />
    </div>

    <div class=" col-lg-12">
        <label for="injured_person">Was the Injured person in your vehicle? </label>
    </div>

    <div class="form-group col-lg-12">
        <input type="radio" name="casualtyMotorClaim[injured_person]" id="" class="purpose-radio-input injured_person" value="yes">
        <label for="invehicle" class="purpose-radio-label">
            <span class="label-text">Yes</span>
        </label>
        &nbsp;
        &nbsp;
        <input type="radio" name="witnessMotorClaim[injured_person]" id="" class="purpose-radio-input injured_person" value="no" checked>
        <label for="notinvehicle" class="purpose-radio-label">
            <span class="label-text">No</span>
        </label>

    </div>

    <div class="col-lg-12">
        <div class="row">
            <div class="form-group col-lg-6 col-md-6">
                <input type="text" id="vehicle_reg" name="vehicle[vehicle_reg]" class="form-control" placeholder="Other Vehicle Reg *" value="" />
            </div>
        </div>
    </div>

    <div class="form-group col-lg-6 col-md-6">
        <input type="text" id="vehicle_make" name="vehicle[vehicle_make]" class="form-control" placeholder="Other Vehicle Make *" value="" />
    </div>

    <div class="form-group col-lg-6 col-md-6">
        <input type="text" id="vehicle_model" name="vehicle[vehicle_model]" class="form-control" placeholder="Other Vehicle Model *" value="" />
    </div>

    <div class="form-group col-lg-6 col-md-12">
        <input type="text" required name="<?= "casualtyMotorClaim[$count][insuername]" ?>" class="form-control casualty_name" placeholder="Name of other vehicle insuer*" value="" />
    </div>

    <div class="form-group col-lg-6 col-md-12">
        <input type="text" required name="<?= "casualtyMotorClaim[$count][insueraddress]" ?>" class="form-control casualty_name" placeholder="Address of other vehicle insuer*" value="" />
    </div>

    <div class="form-group col-lg-6 col-md-12">
        <input type="text" required name="<?= "casualtyMotorClaim[$count][policynumber]" ?>" class="form-control casualty_name" placeholder="Other vehicle policy number *" value="" />
    </div>



</div>