                <div class="col-lg-12">
                    <label for="owner_driving">Were you the one driving at the time of the incident?</label>
                </div>
                <div class="form-group col-lg-6 col-md-6">
                    <input type="radio" name="owner_driving[option]" id="ownerdrivingyes" 
                            class="purpose-radio-input owner-driving" value="yes"
                            checked
                            onchange="ToggleRadioButtonViewControl('ownerdrivingyes', 'no', 'consent-choices')"
                            >
                    <label for="ownerdrivingyes" class="purpose-radio-label">
                        <span class="label-text">Yes</span>
                    </label>
                    &nbsp;
                    &nbsp;
                    <input type="radio" name="owner_driving[option]" 
                        id="ownerdrivingno" class="purpose-radio-input owner-driving" value="no" 
                        onchange="ToggleRadioButtonViewControl('ownerdrivingno', 'no', 'consent-choices')"
                    >
                    <label for="ownerdrivingno" class="purpose-radio-label">
                        <span class="label-text">No</span>
                    </label>
                </div>

                <span id="consent-choices" class="container">
                    <div class="row">
                    <?php
                        $driver_container = 'owner_driving[driver]';
                        include SHARED.'_driver_details_template.php';
                    ?>

                    <div class="form-group col-lg-12 col-md-12">
                        <input type="text" id="driver-owner-relationship"  name="owner_driving[driver][driver_owner_relationship]" class="form-control" placeholder="Driver Owner Relationship e.g. Employee, Relative etc." value="" />
                    </div>

                    <div class="form-group col-lg-12 col-md-12 consent-choices">
                    <div>
                        <label for="vehicle_consent">Was the vehicle used with your consent?</label>
                    </div>
                        <input type="radio" name="owner_driving[driver][vehicle_consent][option]" id="vehicleconsentyes" class="purpose-radio-input vehicle-consent" value="yes">
                        <label for="vehicleconsentyes" class="purpose-radio-label">
                            <span class="label-text">Yes</span>
                        </label>
                        &nbsp;
                        &nbsp;
                        <input type="radio" name="owner_driving[driver][vehicle_consent][option]" id="vehicleconsentno" class="purpose-radio-input vehicle-consent" value="no" checked>
                        <label for="vehicleconsentno" class="purpose-radio-label">
                            <span class="label-text">No</span>
                        </label>
                    </div>
                    </div>
                </span>
                <div class="form-group col-md-12">
                    <textarea textarea name="owner_driving[purpose_of_vehicle]" required title="purpose of vehicle?" class="form-control" placeholder="State fully the purpose of which the vehicle is being used." style="width: 100%; height: 100px;"></textarea>
                </div>
