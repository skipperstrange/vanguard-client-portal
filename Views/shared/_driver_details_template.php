<?php 
//set driver_container variable in parent to make fields unique
if(!$driver_container){
    $driver_container = 'driver';
}

?>
<div class="form-group col-lg-6  col-md-6">
    <input type="text" id="fullname" name="<?=$driver_container;?>[fullname]" required class="form-control" placeholder="Name of driver *" value="" />
</div>

<div class="form-group col-lg-6  col-md-6" >
    <input type="text" id="postalAddress" name="<?=$driver_container;?>[postal_address]" class="form-control" placeholder="Postal/Residential Address" value="" />
</div>

<div class="form-group col-lg-6 col-md-6">
        <input type="text" id="" name="<?=$driver_container;?>[dob]" required placeholder="Date of Birth" title="" class="form-control input-group dob" />
</div>

<div class="form-group col-lg-6 col-md-6">
    <input type="text" id="occupation" name="<?=$driver_container;?>[driver_occupation]" class="form-control" placeholder="Driver Occupation " value="" />
</div>

<div class="form-group col-lg-6 col-md-6">
    <input type="tel" id="contact" name="<?=$driver_container;?>[contact]" required class="form-control" placeholder="Contact *" value="" />
</div>

<div class="form-group col-lg-6 col-md-6">
    <input type="text" id="license_no" name="<?=$driver_container;?>[driver_license_no]" class="form-control" placeholder="Driving license No *" value="" />
</div>

<div class="form-group col-lg-6 col-md-6">
        <input type="text" name="<?=$driver_container;?>[date_of_license_issue]" required placeholder="Date of Issue" title="" class="form-control input-group date" />
</div>

<div class="form-group col-lg-6 col-md-6">
<?php
if($show_license_group == true){
    echo form_options_generator($licence_groups, $driver_container.'[licence_group]', "Licence Group",  ["class"=>"form-control ", "required", "title"=>"Licence group of the other driver." , "id"=>"licence_group"]);
}
?>
</div>
