<?php
$driver_container = 'accident_details[third_party]';

include SHARED.'_driver_details_template.php';
?>

<!-- motor offence query -->
<div class="col-lg-12">
    <label for="accident_details">Has the driver been convicted for a motor offence? </label>
</div>

<div class="form-group col-lg-12 col-md-6">
    <input type="radio" name="accident_details[third_party][motor_offence][option]" id="motoroffenceyes_<?= $count ?>" class="purpose-radio-input motor-offence" onchange="appear('motoroffenceyes_<?= $count ?>','yes', 'motor_offence', '<?= $count ?>')"  value="yes">
    <label for="motoroffenceyes" class="purpose-radio-label">
        <span class="label-text">Yes</span>
    </label>
    &nbsp;
    &nbsp;
    <input type="radio" name="accident_details[third_party][motor_offence][option]" id="motoroffenceno" class="purpose-radio-input motor-offence" onchange="appear('motoroffenceno','yes', 'motor_offence', '<?= $count ?>')" value="no" checked>
    <label for="motoroffenceno" class="purpose-radio-label">
        <span class="label-text">No</span>
    </label>

</div>

<div class="col-lg-12" id="motor_offence_<?= $count ?>">

</div>

<!-- remember to put back required in the last 4 -->
<div class="form-group col-lg-6 col-md-6">
    <input type="text" id="location"  name="accident_details[location]" class="form-control" placeholder="Where did the accident occur *" value="" />
</div>
<div class="form-group col-lg-6 col-md-6">
        <input type="text" id="accident_detailsdate" name="accident_details[date]" placeholder="Date of Accident" title="" class="date form-control"  />
</div>

<!-- <div class="form-group col-lg-6">
    <input type="text" id=""  name="accident_details[cause]" class="form-control" placeholder="Cause of Accident *" value="" />
</div> -->
<!--div class="form-group col-lg-6">
    <input type="text" id=""  name="accident_details[speed]" class="form-control" placeholder="Speed of vehicle *" value="" />
</div>
<div class="form-group col-lg-6">
    <input type="text" id=""  name="accident_details[no_of_persons]" class="form-control" placeholder="How many persons were in your vehicle at the time of the accident? *" value="" />
</div-->

<div class="form-group col-md-12">
    <textarea textarea name="accident_details[accident_description]" title="What happened?" class="form-control" placeholder="Give full description of the accident, number of persons involved, speed etc *" style="width: 100%; height: 150px;"></textarea>
</div>

<div class="form-group col-lg-6">
    <input type="text" id=""  name="accident_details[who_caused_it]" class="form-control" placeholder="In your opinion, who caused the accident*" value="" />
</div>

<div class="form-group col-md-12">
    <textarea textarea name="accident_details[damage]" title="Damage to vehicle?" class="form-control" placeholder="State the damage to the vehicle *" style="width: 100%; height: 150px;"></textarea>
</div>

<div class="form-group col-lg-6">
    <input type="text" id="current_location_of_vehicle"  name="accident_details[current_location_of_vehicle]" class="form-control" placeholder="Where can the vehicle be seen * (Location/ Address)" value="" />
</div>

<!--div class="form-group col-lg-6">
    <input type="text" id="name_of_repairer"  name="accident_details[name_of_repairer]" class="form-control" placeholder="Name of nearest repairer  *" value="" />
</div>

<div class="form-group col-lg-6">
    <input type="text" id="address_of_repairer"  name="accident_details[address_of_repairer]" class="form-control" placeholder="Address of nearest repairer *" value="" />
</div-->