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
$branches = [
    ['BRANCH_DESC'=>'HEAD OFFICE', 'BRANCH_CODE'=>1001],
    ['BRANCH_DESC' =>MAKOLA, 'BRANCH_CODE'=>1011],
    ['BRANCH_DESC' => DANSOMAN, 'BRANCH_CODE' =>1012],
    [ 'BRANCH_DESC' =>ACHIMOTA, 'BRANCH_CODE'=>1013],
    ['BRANCH_DESC'=>ADENTA, 'BRANCH_CODE'=>1014],
    ['BRANCH_DESC' => 'EAST LEGON', 'BRANCH_CODE' =>1015],
    ['BRANCH_DESC'=>TEMA, 'BRANCH_CODE' => 1021],
    ['BRANCH_DESC' =>'TEMA HABOUR', 'BRANCH_CODE' =>1022],
    ['BRANCH_DESC' =>SPINTEX, 'BRANCH_CODE' =>1023],
    ['BRANCH_DESC'=>'WEST HILLS',  'BRANCH_CODE'=>1031],
    ['BRANCH_DESC' =>KUMASI, 'BRANCH_CODE'=>1101],
    ['BRANCH_DESC'=>OBUASI, 'BRANCH_CODE'=>1102],
    ['BRANCH_DESC'=>'CAPE COAST', 'BRANCH_CODE'=>1201],
    ['BRANCH_DESC'=>SWEDRU, 'BRANCH_CODE'=>1202],
    ['BRANCH_DESC'=>TAKORADI, 'BRANCH_CODE'=>1301],
    ['BRANCH_DESC'=>TARKWA, 'BRANCH_CODE'=>1302],
    ['BRANCH_DESC'=>'SEFWI WIAWSO', 'BRANCH_CODE'=>1311],
    ['BRANCH_DESC'=>SUNYANI, 'BRANCH_CODE'=>1401],
    ['BRANCH_DESC'=>TECHIMAN, 'BRANCH_CODE'=>1411],
    ['BRANCH_DESC'=>GOASO, 'BRANCH_CODE'=>1421],
    ['BRANCH_DESC'=>KOFORIDUA, 'BRANCH_CODE'=>1501],
    ['BRANCH_DESC'=>HO, 'BRANCH_CODE'=>1601],
    ['BRANCH_DESC'=>AFLAO, 'BRANCH_CODE'=>1602],
    ['BRANCH_DESC'=>DAMBAI, 'BRANCH_CODE'=>1611],
    ['BRANCH_DESC'=>TAMALE, 'BRANCH_CODE'=>1701],
    ['BRANCH_DESC'=>NALERUGU, 'BRANCH_CODE'=>1711],
    ['BRANCH_DESC'=>DAMONGO, 'BRANCH_CODE'=>1721],
    ['BRANCH_DESC'=>BOLGATANGA, 'BRANCH_CODE'=>1801],
    ['BRANCH_DESC'=>WA, 'BRANCH_CODE'=>1901],
    ['BRANCH_DESC'=>'ACCRA MAIN', 'BRANCH_CODE'=>1002]
];
?>
            <div class="form-group col-lg-6 col-md-6">
                <select class="form-control"  name="motor_policy[branch]">
                    <option value="">Select Preferred Branch</option>
                   <?php
                    foreach($branches as $branch){
                        ?>
                        <option value="<?=$branch['BRANCH_CODE']?>"><?= ucwords(strtolower($branch['BRANCH_DESC']))?></option>
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
