        <div class=" col-lg-12">
            <label for="accident_reported">Has the accident been reported to the police? </label>
        </div>

        <div class="form-group col-lg-12">
            <input type="radio" name="reported" id="accidentreportedyes" class="purpose-radio-input accident_reported" 
            onchange="ToggleRadioButtonViewControl('accidentreportedyes', 'yes', 'police-details')"
            value="yes">
            <label for="accidentreportedyes" class="purpose-radio-label">
                <span class="label-text">Yes</span>
            </label>
            &nbsp;
            &nbsp;
            <input type="radio" name="reported" id="accidentreportedno" class="purpose-radio-input accident_reported" 
            onchange="ToggleRadioButtonViewControl('accidentreportedno', 'yes', 'police-details')" 
            value="no" checked>
            <label for="accidentreportedno" class="purpose-radio-label">
                <span class="label-text">No</span>
            </label>

        </div>

        <p id="police-details">
                <div class="form-group col-lg-6 col-md-6">
                    <input type="text" name="reported[officer_name]" class="form-control officer_name" placeholder="Name Of Officer*" value="" />
                </div>
                <div class="form-group col-lg-6 col-md-12">
                    <input type="text" name="reported[officer_station]" class="form-control officer_station" placeholder="Station Of Officer *" value="" />
                </div>
        </p>

        <script>
            $("#police-details").hide(0)
        </script>