<div class="form-group col-lg-6">
    <input type="text" id="fullname" name="motor-claim[accident_details][fullname]" class="form-control" placeholder="Name of driver *" value="" />
</div>

<div class="form-group col-lg-6">
    <input type="text" id="postalAddress" name="motor-claim[accident_details][postal_address]" class="form-control" placeholder="Postal Address" value="" />
</div>

<div class="form-group col-lg-6">
    <div class="input-group date" id="id_0">
        <input type="text" id="dob" name="motor-claim[accident_details][dob]" placeholder="Date of Birth" title="" class="form-control" />
        <div class="input-group-addon input-group-append">
            <div class="input-group-text">
                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
            </div>
        </div>
    </div>
</div>

<div class="form-group col-lg-6">
    <input type="text" id="occupation" name="motor-claim[accident_details][driver_occupation]" class="form-control" placeholder="Driver Occupation *" value="" />
</div>

<div class="form-group col-lg-6">
    <input type="tel" id="contact" name="motor-claim[accident_details][contact]" class="form-control" placeholder="Contact *" value="" />
</div>

<div class="form-group col-lg-6">
    <input type="text" id="license_no" name="motor-claim[accident_details][driver_license_no]" class="form-control" placeholder="Driving license No *" value="" />
</div>

<div class="form-group col-lg-6">
    <div class="input-group date" id="id_0">
        <input type="text" id="dob" name="motor-claim[accident_details][date_of_issue]" placeholder="Date of Issue" title="" class="form-control" />
        <div class="input-group-addon input-group-append">
            <div class="input-group-text">
                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
            </div>
        </div>
    </div>
</div>

<div class="form-group col-lg-6">
    <input type="text" id="license_group" name="motor-claim[accident_details][license_group]" class="form-control" placeholder="group of vehicles that the license has been issued *" value="" />
</div>


<!-- motor offence query -->
<div class="col-lg-12">
    <label for="accident_details">Has the driver been convicted for a motor offence? </label>
</div>

<div class="form-group col-lg-12">
    <input type="radio" name="motor-claim[accident_details][motor_offence][<?= $count ?>]" id="motoroffenceyes_<?= $count ?>" class="purpose-radio-input motor-offence" onchange="appear('motoroffenceyes_<?= $count ?>','yes', 'motor_offence', '<?= $count ?>')"  value="yes">
    <label for="motoroffenceyes" class="purpose-radio-label">
        <span class="label-text">Yes</span>
    </label>
    &nbsp;
    &nbsp;
    <input type="radio" name="motor-claim[accident_details][motor_offence][<?= $count ?>]" id="motoroffenceno" class="purpose-radio-input motor-offence" onchange="appear('motoroffenceno','yes', 'motor_offence', '<?= $count ?>')" value="no" checked>
    <label for="motoroffenceno" class="purpose-radio-label">
        <span class="label-text">No</span>
    </label>

</div>

<div class="col-lg-12" id="motor_offence_<?= $count ?>">

</div>

<!-- pending further discussions -->
<!-- <div class="form-group col-lg-6">
    <input type="text" id=""  name="accident_details[driver]" class="form-control" placeholder="Relationship between the driver and the car e.g: The owner *" value="" />
</div> -->




<!-- remember to put back required in the last 4 -->
<div class="form-group col-lg-6">
    <input type="text" id="location"  name="accident_details[location]" class="form-control" placeholder="Where did the accident occur *" value="" />
</div>
<div class="form-group col-lg-6 ">
    <div class="input-group date" id="id_0">
        <input type="text" id="accident_detailsdate" name="accident_details[date]" placeholder="Date of Accident" title="" class="form-control"  />
        <div class="input-group-addon input-group-append">
            <div class="input-group-text">
                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
            </div>
        </div>
    </div>
</div>
<!-- <div class="form-group col-lg-6">
    <input type="text" id=""  name="accident_details[cause]" class="form-control" placeholder="Cause of Accident *" value="" />
</div> -->
<div class="form-group col-lg-6">
    <input type="text" id=""  name="accident_details[speed]" class="form-control" placeholder="Speed of vehicle *" value="" />
</div>
<div class="form-group col-lg-6">
    <input type="text" id=""  name="accident_details[no_of_persons]" class="form-control" placeholder="How many persons were in your vehicle at the time of the accident? *" value="" />
</div>

<div class="form-group col-md-12">
    <textarea textarea name="accident_details[accident_description]" title="What happened?" class="form-control" placeholder="Give full description as to how the accident happened? *" style="width: 100%; height: 150px;"></textarea>
</div>

<div class="form-group col-lg-6">
    <input type="text" id=""  name="accident_details[who_caused_it]" class="form-control" placeholder="In your opinion, who caused the accident*" value="" />
</div>

<div class="form-group col-md-12">
    <textarea textarea name="accident_details[damage]" title="Damage to vehicle?" class="form-control" placeholder="State the damage to the vehicle *" style="width: 100%; height: 150px;"></textarea>
</div>

<div class="form-group col-lg-6">
    <input type="text" id="location_of_vehicle"  name="accident_details[location_of_vehicle]" class="form-control" placeholder="Where can the vehicle be seen *" value="" />
</div>

<div class="form-group col-lg-6">
    <input type="text" id="name_of_repairer"  name="accident_details[name_of_repairer]" class="form-control" placeholder="Name of nearest repairer  *" value="" />
</div>

<div class="form-group col-lg-6">
    <input type="text" id="address_of_repairer"  name="accident_details[address_of_repairer]" class="form-control" placeholder="Address of nearest repairer *" value="" />
</div>