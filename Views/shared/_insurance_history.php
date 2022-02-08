            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12"><label for="previous_accidents">Please provide details on any accidents or loss during the past three years:</label></div>
                </div>
            </div>
            <div class="form-group col-lg-12">
              <input type="text" id="accident_history"  name="insurance_history[accident_history]" class="form-control" placeholder="" value="" />
            </div>
            <br>
            <div class="col-lg-12">
                <label for="altered">Are you entitled to a "No Claim Discount?" from previous insurance? Evidence will be required. </label>
            </div>
            <div class="col-lg-12">
                <div class="row">
                <div class="form-group col-lg-2 col-md-2">
                    <input type="radio" name="insurance_history[no_claim_discount]" id="" class="purpose-radio-input noclaim" value="yes" checked>
                    <label for="noclaimyes" class="purpose-radio-label">
                        <span class="label-text">Yes</span>
                        </label>
                </div>
                
                <div class="col-lg-2 col-md-2">
                    <input type="radio" name="insurance_history[no_claim_discount]" id="" class="purpose-radio-input noclaim" value="no" >
                    <label for="noclaimno" class="purpose-radio-label">
                        <span class="label-text">No</span>
                    </label>
                </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12"><label for="others-usage">Has any previous request for insurance by you been: </label></div>
                </div>
                <!-- deffect query -->
                <div class="col-lg-12">
                        <label for="past_declined">Declined </label>
                    </div>
                    <div class="form-group col-lg-6 col-md-6">
                        <input type="radio" name="insurance_history[past_requests_declined]" id="" class="purpose-radio-input past-declined" value="yes">
                        <label for="pastdeclinedyes" class="purpose-radio-label">
                            <span class="label-text">Yes</span>
                        </label>
                        &nbsp;
                        &nbsp;
                        <input type="radio" name="insurance_history[past_requests_declined]" id="" class="purpose-radio-input past-declined" value="no" checked>
                        <label for="pastdeclinedno" class="purpose-radio-label">
                            <span class="label-text">No</span>
                        </label>
                    </div>
                    <!-- prosectution query -->
                    <div class="col-lg-12">
                        <label for="past_canceled">Canceled </label>
                    </div>
                    <div class="form-group col-lg-6 col-md-6">
                        <input type="radio" name="insurance_history[past_request_canceled]" id="" class="purpose-radio-input past-canceled" value="yes">
                        <label for="pastcanceledyes" class="purpose-radio-label">
                            <span class="label-text">Yes</span>
                        </label>
                        &nbsp;
                        &nbsp;
                        <input type="radio" name="insurance_history[past_request_canceled]" id="" class="purpose-radio-input past-canceled" value="no" checked>
                        <label for="pastcanceledno" class="purpose-radio-label">
                            <span class="label-text">No</span>
                        </label>
                    </div>
                    <!-- motor offence query -->
                    <div class="col-lg-12">
                        <label for="special_condition">Had special conditions imposed </label>
                    </div>
                    <div class="form-group col-lg-6 col-md-6">
                        <input type="radio" name="insurance_history[special_conditions_imposed]" id="" class="purpose-radio-input special-condition" value="yes">
                        <label for="specialconditionyes" class="purpose-radio-label">
                            <span class="label-text">Yes</span>
                        </label>
                        &nbsp;
                        &nbsp;
                        <input type="radio" name="insurance_history[special_conditions_imposed]" id="" class="purpose-radio-input special-condition" value="no" checked>
                        <label for="specialconditionno" class="purpose-radio-label">
                            <span class="label-text">No</span>
                        </label>
                    </div>
                    <br>
                </div>
            