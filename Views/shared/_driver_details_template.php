<?php 
//set driver_container variable in parent to make fields unique
?>
<div class="form-group col-lg-6  col-md-6">
    <input type="text" id="fullname" name="<?=$driver_container;?>[fullname]" class="form-control" placeholder="Name of driver *" value="" />
</div>

<div class="form-group col-lg-6  col-md-6" >
    <input type="text" id="postalAddress" name="<?=$driver_container;?>[postal_address]" class="form-control" placeholder="Postal Address" value="" />
</div>

<div class="form-group col-lg-6 col-md-6">
        <input type="text" id="" name="<?=$driver_container;?>[dob]" placeholder="Date of Birth" title="" class="form-control input-group date" />
</div>

<div class="form-group col-lg-6 col-md-6">
    <input type="text" id="occupation" name="<?=$driver_container;?>[driver_occupation]" class="form-control" placeholder="Driver Occupation *" value="" />
</div>

<div class="form-group col-lg-6 col-md-6">
    <input type="tel" id="contact" name="<?=$driver_container;?>[contact]" class="form-control" placeholder="Contact *" value="" />
</div>

<div class="form-group col-lg-6 col-md-6">
    <input type="text" id="license_no" name="<?=$driver_container;?>[driver_license_no]" class="form-control" placeholder="Driving license No *" value="" />
</div>

<div class="form-group col-lg-6 col-md-6">
        <input type="text" id="manufacture" name="<?=$driver_container;?>[date_of_license_issue]" placeholder="Date of Issue" title="" class="form-control input-group date" />
</div>

<div class="form-group col-lg-6 col-md-6">
<?php
echo form_options_generator($licence_groups, $driver_container.'[licence_group]', "Licence Group",  ["class"=>"form-control ", "title"=>"Licence group of the other driver." , "id"=>"licence_group"]);
?>
</div>
