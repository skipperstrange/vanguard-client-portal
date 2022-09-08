<div class="row beneficiaries" id="beneficiaries_<?= $count ?>" style="margin-botom:1em;">
    <div class=" col-sm-12">
        <h6 class="title">
            <span class="count"></span> Beneficiaries Info:
            <div class="float-right"><i class="fa fa-times-circle item-remove" onclick="removeItem('beneficiaries_<?= $count ?>', 'beneficiaries')" title="Remove from list"></i></div>
        </h6>
    </div>
    <div class="form-group col-md-4 col-sm-12">
        <input type="text" required name="<?= "beneficiaries[$count][name]" ?>" class="form-control beneficiary_name" placeholder="Name" value="" />
    </div>
    <div class="form-group col-md-3 col-sm-12">
        <input type="text" id="bdob_<?= $count ?>" required name="<?= "beneficiaries[$count][date_of_birth]" ?>" class="form-control beneficiary_dob" placeholder="Date of birth" value="" />
    </div>
    <div class="form-group col-md-5 col-sm-12">
        <input type="text" required name="<?= "beneficiaries[$count][relationship]" ?>" class="form-control beneficiary_relationship" placeholder="Relationship" value="" />
    </div>

    <div class="form-group col-lg-6 col-md-12">
        <input type="text" required name="<?= "beneficiaries[$count][address]" ?>" class="form-control beneficiary_address" placeholder="Address" value="" />
    </div>

</div>