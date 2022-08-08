                <div class="col-lg-12 not-scanned-form">
                    <label for="vehicle_agreement">Is the vehicle the subject of a hire purchase or loan agreement?</label>
                </div>
                <div class="form-group col-lg-6 col-md-6 not-scanned-form">
                    <input type="radio" name="loan_or_hire[option]" id="loan_or_hireyes" class="purpose-radio-input" 
                    onchange="ToggleRadioButtonViewControl('loan_or_hireyes', 'yes', 'loan_or_hire_')" 
                    value="yes">
                    <label for="loan_or_hireyes" class="purpose-radio-label">
                        <span class="label-text">Yes</span>
                    </label>
                    &nbsp;
                    &nbsp;
                    <input type="radio" name="loan_or_hire[option]" id="loan_or_hireno" class="purpose-radio-input"
                    onchange="ToggleRadioButtonViewControl('loan_or_hireno', 'yes', 'loan_or_hire_')"
                    value="no" checked >
                    <label for="loan_or_hireno" class="purpose-radio-label">
                        <span class="label-text">No</span>
                    </label>
                </div>
                <span class="container  not-scanned-form">
                    <div class="row">
                    <div class="form-group col-lg-12 "  id="loan_or_hire_">
                        <input type="text" required name="loan_or_hire[name_of_company]" class="form-control" placeholder="If so state the name of finance company or lending organisation?" value="" />
                    </div>
                    </div>
                </span>
                