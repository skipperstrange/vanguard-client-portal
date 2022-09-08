<div class="row insured_persons" id="insured_persons_<?= $count ?>">
    <div class=" col-sm-12">
        <h6 class="title">
            <span class="count"></span> Injury/Damage Info:
            <div class="float-right"><i class="fa fa-times-circle item-remove" onclick="removeItem('insured_persons_<?= $count ?>', 'insured_persons')" title="Remove from list"></i></div>
        </h6>
    </div>
    <div class="form-group col-md-4 col-sm-12">
        <input type="text" required name="<?= "insured_persons[$count][name]" ?>" class="form-control insured_name" placeholder="Name" value="" />
    </div>
    <div class="form-group col-md-3 col-sm-12">
        <input type="text" id="dob_<?= $count ?>" required name="<?= "insured_persons[$count][date_of_birth]" ?>" class="form-control insured_location" placeholder="Date of birth" value="" />
    </div>
    <div class="form-group col-md-5 col-sm-12">
        <input type="text" required name="<?= "insured_persons[$count][relationship]" ?>" class="form-control insured_relationship" placeholder="Relationship" value="" />
    </div>

    <div class="form-group col-lg-6 col-md-12">
        <input type="text" required name="<?= "insured_persons[$count][passport_no]" ?>" class="form-control insured_passport_no" placeholder="Passport No." value="" />
    </div>
</div>