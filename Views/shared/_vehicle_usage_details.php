
                <div class="col-lg-12">
                    <label for="purpose">Purpose Of Vehicle </label>
                </div>
                
                <div class="form-group col-lg-2 col-md-3">
                    <input type="radio" name="vehicle[purpose]" id="" class="purpose-radio-input usage" data-target="usage_box" value="private" checked>
                    <label for="private" class="purpose-radio-label">
                        <span class="label-text">Private</span>
                        </label>
                </div>
                
                <div class="col-lg-3 col-md-3">
                    <input type="radio" name="vehicle[purpose]" id="" class="purpose-radio-input usage" data-target="usage_box" value="commercial" >
                    <label for="commercial" class="purpose-radio-label">
                        <span class="label-text">Commercial</span>
                    </label>
                </div>
            
                <div class="form-group col-lg-7 col-md-6" id="usage_box">
                            <select class="selectpicker form-control usage" data-style="btn-info" name="vehicle[usage_type_id]">
                                 <optgroup label="Usage Type">
                                  <option value="1">X1(Private Vehicle(Individual))</option>
                                  <option value="2">X1(Private Vehicle(Company))</option>
                                  <option value="3">Taxi</option>
                                  <option value="4">Hiring Cars</option>
                                  <option value="5">Mini Bus(Up to 22 Seats)</option>
                                  <option value="6">Maxi Bus(Greater Than 22 Seats)</option>
                                  <option value="7">Motor Cycle</option>
                                  <option value="8">Ambulance/Hearse</option>
                                  <option value="9">Own Goods(3000 CC or Below)</option>
                                  <option value="10">Own Goods(Above 3000 CC)</option>
                                  <option value="11">Articulators/Tankers</option>
                                  <option value="12">General Cartage(3000 CC or Below)</option>
                                  <option value="13">General Cartage(Above 3000 CC)</option>
                                  <option value="14">Special Type(On Site)</option>
                                  <option value="15">Special Type(On Road)</option>
                                  <option value="16">Trade Plate(Fitters)</option>
                                  <option value="17">Trade Plate(Garages)</option>
                                  <option value="18">Trade Plate(Clearers)</option>
                              </select>
              </div>

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12"><label for="altered">Has the vehicle been altered to carry heavier loads other than specified by manufacturer? </label></div>
                </div>
            </div>

            <div class="form-group col-lg-2 col-md-2">
                    <input type="radio" name="vehicle[altered]" id="" class="purpose-radio-input altered" value="yes" checked>
                    <label for="alteredyes" class="purpose-radio-label">
                        <span class="label-text">Yes</span>
                        </label>
                </div>
                
                <div class="col-lg-2 col-md-2">
                    <input type="radio" name="vehicle[altered]" id="" class="purpose-radio-input altered" value="no" >
                    <label for="alteredno" class="purpose-radio-label">
                        <span class="label-text">No</span>
                    </label>
                </div>

                <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12"><label for="others-usage">Have you or any other person who to your knowledge who would operate this vehicle: </label></div>
                </div>
                <!-- deffect query -->
                <div class="col-lg-12">
                        <label for="driverdefect">Have any physical defect or infirmity </label>
                    </div>
                    <div class="form-group col-lg-6 col-md-6">
                        <input type="radio" name="motor_policy[driver_defect]" id="" class="purpose-radio-input driverdeffected" value="yes">
                        <label for="driverdeffectedyes" class="purpose-radio-label">
                            <span class="label-text">Yes</span>
                        </label>
                        &nbsp;
                        &nbsp;
                        <input type="radio" name="motor_policy[driver_defect]" id="" class="purpose-radio-input driverdeffected" value="no" checked>
                        <label for="driverdeffectedno" class="purpose-radio-label">
                            <span class="label-text">No</span>
                        </label>
                    </div>
                    <!-- prosectution query -->
                    <div class="col-lg-12">
                        <label for="prosecution">Been prosecuted in court </label>
                    </div>
                    <div class="form-group col-lg-6 col-md-6">
                        <input type="radio" name="motor_policy[prosecution]" id="" class="purpose-radio-input prosecution" value="yes">
                        <label for="prosecutionyes" class="purpose-radio-label">
                            <span class="label-text">Yes</span>
                        </label>
                        &nbsp;
                        &nbsp;
                        <input type="radio" name="motor_policy[prosecution]" id="" class="purpose-radio-input prosecution" value="no" checked>
                        <label for="prosecutionno" class="purpose-radio-label">
                            <span class="label-text">No</span>
                        </label>
                    </div>
                    <!-- motor offence query -->
                    <div class="col-lg-12">
                        <label for="motor_offence">Been convicted for a motor offence </label>
                    </div>
                    <div class="form-group col-lg-6 col-md-6">
                        <input type="radio" name="motor_policy[motor_offence]" id="" class="purpose-radio-input motor-offence" value="yes">
                        <label for="motoroffenceyes" class="purpose-radio-label">
                            <span class="label-text">Yes</span>
                        </label>
                        &nbsp;
                        &nbsp;
                        <input type="radio" name="motor_policy[motor_offence]" id="" class="purpose-radio-input motor-offence" value="no" checked>
                        <label for="motoroffenceno" class="purpose-radio-label">
                            <span class="label-text">No</span>
                        </label>
                    </div>
                    <br>
                </div>
<script>
    $('#usage_box').hide();
</script>