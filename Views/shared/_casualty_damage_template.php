<div class="row casualty_damage" id="casualty_damage_<?= $count ?>" style="margin-bottom: 1rem;">
    <div class=" col-sm-12">
        <h6 class="title">
            <span class="count"></span> Injury/Damage Info:
            <div class="float-right"><i class="fa fa-times-circle item-remove" onclick="removeItem('casualty_damage_<?= $count ?>', 'casualty')" title="Remove from list"></i></div>
        </h6>
    </div>
    <div class="form-group col-md-4 col-sm-12">
        <input type="text" required name="<?= "casualty_damage[$count][name]" ?>" class="form-control casualty_name" placeholder="Name" value="" />
    </div>
    <div class="form-group col-md-3 col-sm-12">
        <input type="text" required name="<?= "casualty_damage[$count][contact]" ?>" class="form-control casualty_location" placeholder="Contact" value="" />
    </div>
    <div class="form-group col-md-5 col-sm-12">
        <input type="text" required name="<?= "casualty_damage[$count][comment]" ?>" class="form-control casualty_location" placeholder="Comments" value="" />
    </div>

    <!--div class=" col-lg-12">
        <label for="injured_person">Was the Injured person in your vehicle? </label>
    </div>

    <div class="form-group col-lg-12">
        <input type="radio" name="casualty_damage[injured_person]" id="" class="purpose-radio-input injured_person" value="yes">
        <label for="invehicle" class="purpose-radio-label">
            <span class="label-text">Yes</span>
        </label>
        &nbsp;
        &nbsp;
        <input type="radio" name="casualty_damage[injured_person]" id="" class="purpose-radio-input injured_person" value="no" checked>
        <label for="notinvehicle" class="purpose-radio-label">
            <span class="label-text">No</span>
        </label>

    </div>

    <div class="col-lg-12">
        <div class="row">
            <div class="form-group col-lg-6 col-md-6">
                <input type="text" id="vehicle_reg" name="casualty_damage[vehicle_reg]" class="form-control" placeholder="Other Vehicle Reg *" value="" />
            </div>
        </div>
    </div>

    <div class="form-group col-lg-6 col-md-6">
        <input type="text" id="vehicle_make" name="casualty_damage[vehicle_make]" class="form-control" placeholder="Other Vehicle Make *" value="" />
    </div>

    <div class="form-group col-lg-6 col-md-6">
        <input type="text" id="vehicle_model" name="casualty_damage[vehicle_model]" class="form-control" placeholder="Other Vehicle Model *" value="" />
    </div>

    <div class="form-group col-lg-6 col-md-12">
        <input type="text" required name="<?= "casualty_damage[$count][insuername]" ?>" class="form-control casualty_name" placeholder="Name of other vehicle insuer*" value="" />
    </div>

    <div class="form-group col-lg-6 col-md-12">
        <input type="text" required name="<?= "casualty_damage[$count][insueraddress]" ?>" class="form-control casualty_name" placeholder="Address of other vehicle insuer*" value="" />
    </div>

    <div class="form-group col-lg-6 col-md-12">
        <input type="text" required name="<?= "casualty_damage[$count][policynumber]" ?>" class="form-control casualty_name" placeholder="Other vehicle policy number *" value="" />
    </div>
</div-->
</div>