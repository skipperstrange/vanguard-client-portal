<div class="col-lg-6">
    <div class="row">
        <div class="form-group col-lg-12 ">
            <input type="text" id="vehicle_reg" name="vehicle[vehicle_reg]" class="form-control" placeholder="Vehicle Reg *" value="" />
        </div>
    </div>
</div>

<div class="form-group col-lg-6">
    <input type="text" id="vehicle_make" name="vehicle[vehicle_make]" class="form-control" placeholder="Vehicle Make *" value="" />
</div>

<div class="form-group col-lg-6">
    <input type="text" id="vehicle_model" name="vehicle[vehicle_model]" class="form-control" placeholder="Model *" value="" />
</div>




<div class="form-group col-lg-6">
    <div class="input-group date-year" id="manufacture">
        <input type="text" name="vehicle[year_of_manufacture]" placeholder="Year Of Manufacture" title="" class="form-control" />
        <div class="input-group-addon input-group-append">
            <div class="input-group-text">
                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
            </div>
        </div>
    </div>
</div>

<div class="form-group col-lg-6 ">
    <div class="input-group date-year" id="registration">
        <input type="text" name="vehicle[year_of_reg]" placeholder="Year Of Registration" title="" class="form-control" />
        <div class="input-group-addon input-group-append">
            <div class="input-group-text">
                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
            </div>
        </div>
    </div>
</div>


<div class="form-group col-lg-6 ">
    <input type="text" id="chassis_no" name="vehicle[chassis_no]" class="form-control" placeholder="Chassis Number *" value="" />
</div>

<script>
     dp.on("dp.change", function (e) {
        //$('.date-duration-expire').data("DateTimePicker").minDate(e.date);
        $(".date-duration-expire").datetimepicker({minDate: e.date, maxDate: new Date()});
    });
</script>


