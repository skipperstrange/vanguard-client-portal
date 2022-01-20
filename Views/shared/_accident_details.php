<div class="form-group col-lg-6">
    <input type="text" id="fullname" name="motor_policy[fullname]" class="form-control" placeholder="Name of driver *" value="" />
</div>

<div class="form-group col-lg-6">
    <input type="text" id="postalAddress" name="motor_policy[postal_address]" class="form-control" placeholder="Postal Address" value="" />
</div>

<div class="form-group col-lg-6">
    <div class="input-group date" id="id_0">
        <input type="text" id="dob" name="motor_policy[dob]" placeholder="Date of Birth" title="" class="form-control" />
        <div class="input-group-addon input-group-append">
            <div class="input-group-text">
                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
            </div>
        </div>
    </div>
</div>

<div class="form-group col-lg-6">
    <input type="text" id="occupation" name="motor_policy[occupation]" class="form-control" placeholder="Occupation *" value="" />
</div>

<div class="form-group col-lg-6">
    <input type="tel" id="contact" name="motor_policy[contact]" class="form-control" placeholder="Contact *" value="" />
</div>

<!-- motor offence query -->
<div class="col-lg-12">
    <label for="accident_details">Has the driver been convicted for a motor offence? </label>
</div>

<div class="form-group col-lg-12">
    <input type="radio" name="accident_details[motor_offence]" id="" class="purpose-radio-input motor-offence" value="yes">
    <label for="motoroffenceyes" class="purpose-radio-label">
        <span class="label-text">Yes</span>
    </label>
    &nbsp;
    &nbsp;
    <input type="radio" name="accident_details[motor_offence]" id="" class="purpose-radio-input motor-offence" value="no" checked>
    <label for="motoroffenceno" class="purpose-radio-label">
        <span class="label-text">No</span>
    </label>

</div>




<div class="form-group col-lg-6">
    <input type="text" id="location" required name="accident_details[location]" class="form-control" placeholder="Where did the accident occur *" value="" />
</div>
<div class="form-group col-lg-6 ">
    <div class="input-group date" id="id_0">
        <input type="text" id="accident_detailsdate" name="accident_details[date]" placeholder="Date of Accident" title="" class="form-control" required />
        <div class="input-group-addon input-group-append">
            <div class="input-group-text">
                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
            </div>
        </div>
    </div>
</div>
<div class="form-group col-lg-6">
    <input type="text" id="" required name="accident_details[cause]" class="form-control" placeholder="Cause of Accident *" value="" />
</div>
<div class="form-group col-lg-6">
    <input type="text" id="" required name="accident_details[speed]" class="form-control" placeholder="Speed of vehicle *" value="" />
</div>

<div class="form-group col-md-12">
    <textarea textarea name="accident_details[accident_description]" title="What happened?" class="form-control" placeholder="Give full description as to how the accident happened? *" style="width: 100%; height: 150px;"></textarea>
</div>