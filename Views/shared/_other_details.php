<?php
$branches= [
'Spintex',
'West Hills',
'Tema',
'East Legon',
'Dansoman',
'Achimota',
'Adenta',
'Koforidua',
'Cape Coast',
'Tarkwa',
'Takoradi',
'Kumasi',
'Tamale',
'Aflao',
'Sunyani'
];
asort($branches);

?>
            <div class="form-group col-lg-6 col-md-6">
                <select class="form-control"  name="motor_policy[branch]">
                    <option value="">Select Preferred Branch</option>
                   <?php
                    foreach($branches as $id => $brancheName){
                        ?>
                        <option value="<?=$id?>"><?= ucwords(strtolower($brancheName))?></option>
                        <?php
                    }
                   ?>
                </select>
            </div>

            <div class="form-group col-lg-6 col-md-6">
                <select class="form-control"  name="motor_policy[policy_duration]">
                        <option value="">Policy Duration</option>
                        <option value="1">1 Month</option>
                        <option value="2">3 Months</option>
                        <option value="3">6 Months</option> 
                        <option value="4">12 Months</option> 
                </select>
            </div>

            <!-- Start date -->
            <div class="form-group col-lg-6 col-md-6">
                <div class="input-group date-duration-start" >
                    <input type="text" name="" placeholder="Date of commence" title="Start date" data-target="date-duration-start" class="form-control date-duration-start"/>
                    <div class="input-group-addon input-group-append">
                        <div class="input-group-text">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        </div>
                    </div>
                </div>
            </div> 
            
            <!-- End date -->
            <div class="form-group col-lg-6 col-md-6">
                <div class="input-group date" >
                    <input type="text" disabled readonly name="" placeholder="Expiry" title="" data-taget="date-duration-expire" class="form-control date-duration-expire"/>
                    <div class="input-group-addon input-group-append">
                        <div class="input-group-text">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('.date-duration-start').datetimepicker({
                    "allowInputToggle": true,
                    "showClose": true,
                    "showClear": true,
                    "showTodayButton": true,
                    "format": "MM/DD/YYYY",
                    "defaultDate": "11/1/2013",
                    icons: {
                            time: "fa fa-clock-o",
                            date: "fa fa-calendar",
                            up: "fa fa-arrow-up",
                            down: "fa fa-arrow-down"
                        }
                });

                $(".date-duration-start").on("dp.change", function (e) {
                    //$('.date-duration-expire').data("DateTimePicker").minDate(e.date);
                    $('.date-duration-expire').defaultDate = "11/1/2013"
                });
                
                $(".date-duration-expire").on("dp.change", function (e) {
                    $('.date-duration-start').data("DateTimePicker").maxDate(e.date);
                });
            </script>
