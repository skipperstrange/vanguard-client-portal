<?php
    include_once STATIC_DATA.'branches.php';
?>
            <div class="form-group col-lg-6 col-md-6">
                <select class="form-control"  name="policy[branch_id]" id="branches">
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
              <input type="text" id="tppd"  name="policy[tppd]" class="form-control" placeholder="Extra TPPD" value="" />
            </div>

            <!-- Duration -->
            <div class="form-group col-lg-6 col-md-6">
                <select class="form-control"  name="policy[policy_duration]">
                        <option value="">Policy Duration</option>
                        <option value="1">1 Month</option>
                        <option value="3">3 Months</option>
                        <option value="6">6 Months</option> 
                        <option value="12">12 Months</option> 
                </select>
            </div>

            <!-- Start date -->
            <div class="form-group col-lg-6 col-md-6">
                <div class="date-duration-start" >
                    <input type="text" name="policy[start]" placeholder="Date of commence" data-date-end-date="0d" title="Start date" data-target="date-duration-start" class="form-control date-duration-start"/>
                </div>
            </div> 
            
            <script>
                policyStart = $('.date-duration-start')
                policyStart.datetimepicker({
                    "allowInputToggle": true,
                    "showClose": true,
                    "showClear": true,
                    "showTodayButton": true,
                    //"format": "DD MMMM YYYY",
                    "format": "DD-MM-YYYY",
                    //"defaultDate": new Date(),
                    useCurrent: true,
                    minDate: new Date(),
                    icons: {
                            time: "fa fa-clock-o",
                            date: "fa fa-calendar",
                            up: "fa fa-arrow-up",
                            down: "fa fa-arrow-down"
                        }
                        
                });
            </script>
