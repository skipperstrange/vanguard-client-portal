<h4 class="ab-info">
    Please confirm details before you proceed.
</h4>
<?php
$summary_columns["policy details"] = $info['policy_details'];
include SHARED.'_summary_columns.php';

$summary_columns = null;
$summary_columns['owner_details'] = $info['owner_details'];
$summary_columns['vehicle_details'] = $info['motor_details'];
include SHARED.'_summary_columns.php';

?>
            <div class="col-lg-12">
                    <label for="vehicle_agreement">Is the vehicle the subject of a hire purchase or loan agreement?</label>
                </div>
                <div class="form-group col-lg-6 col-md-6">
                    <input type="radio" name="loan_or_hire" id="loan_or_hireyes" class="purpose-radio-input" 
                    onchange="ToggleRadioButtonViewControl('loan_or_hireyes', 'yes', 'loan_or_hire_')" 
                    value="yes">
                    <label for="loan_or_hireyes" class="purpose-radio-label">
                        <span class="label-text">Yes</span>
                    </label>
                    &nbsp;
                    &nbsp;
                    <input type="radio" name="loan_or_hire" id="loan_or_hireno" class="purpose-radio-input"
                    onchange="ToggleRadioButtonViewControl('loan_or_hireno', 'yes', 'loan_or_hire_')"
                    value="no" checked >
                    <label for="loan_or_hireno" class="purpose-radio-label">
                        <span class="label-text">No</span>
                    </label>
                </div>

                <div class="col-lg-12" id="loan_or_hire_">
                    <div class="form-group col-lg-12 ">
                        <input type="text" name="loan_or_hire[name_of_company]" class="form-control" placeholder="If so state the name of finance company or lending organisation?" value="" />
                    </div>
                </div>

                <?php
                    include SHARED.'_claim_police_details.php';
                ?>
                <script>
                    $("#loan_or_hire_").hide(0)
                </script>
