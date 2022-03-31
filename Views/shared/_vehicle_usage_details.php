                <div class="col-lg-12">
                    <label for="purpose">Purpose Of Vehicle </label>
                </div>
                
                <div class="form-group col-lg-2 col-md-3">
                    <input type="radio" name="vehicle_usage[purpose]" id="private" class="purpose-radio-input usage" 
                    data-target="usage_box" 
                   value="private" checked>
                    <label for="private" class="purpose-radio-label">
                        <span class="label-text">Private</span>
                        </label>
                </div>
                
                <div class="col-lg-3 col-md-3">
                    <input type="radio" name="vehicle_usage[purpose]" id="commercial" class="purpose-radio-input usage" 
                   
                    data-target="usage_box" value="commercial" >
                    <label for="commercial" class="purpose-radio-label">
                        <span class="label-text">Commercial</span>
                    </label>
                </div>
            
                <div class="form-group col-lg-7 col-md-6" id="usage_box ">
                            <select required class="selectpicker form-control" id="vuseage" data-style="btn-info" name="vehicle_usage[useage_type_id]">
                                  
                            </select>
              </div>

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12"><label for="altered">Has the vehicle been altered to carry heavier loads other than specified by manufacturer? </label></div>
                </div>
            </div>

            <div class="form-group col-lg-2 col-md-2">
                    <input type="radio" name="vehicle_usage[altered]" id="" class="purpose-radio-input altered" value="yes" checked>
                    <label for="alteredyes" class="purpose-radio-label">
                        <span class="label-text">Yes</span>
                        </label>
                </div>
                
                <div class="col-lg-2 col-md-2">
                    <input type="radio" name="vehicle_usage[altered]" id="" class="purpose-radio-input altered" value="no" >
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
                        <input type="radio" name="vehicle_usage[driver_defect]" id="" class="purpose-radio-input driverdeffected" value="yes">
                        <label for="driverdeffectedyes" class="purpose-radio-label">
                            <span class="label-text">Yes</span>
                        </label>
                        &nbsp;
                        &nbsp;
                        <input type="radio" name="vehicle_usage[driver_defect]" id="" class="purpose-radio-input driverdeffected" value="no" checked>
                        <label for="driverdeffectedno" class="purpose-radio-label">
                            <span class="label-text">No</span>
                        </label>
                    </div>
                    <!-- prosectution query -->
                    <div class="col-lg-12">
                        <label for="prosecution">Been prosecuted in court </label>
                    </div>
                    <div class="form-group col-lg-6 col-md-6">
                        <input type="radio" name="vehicle_usage[prosecution]" id="" class="purpose-radio-input prosecution" value="yes">
                        <label for="prosecutionyes" class="purpose-radio-label">
                            <span class="label-text">Yes</span>
                        </label>
                        &nbsp;
                        &nbsp;
                        <input type="radio" name="vehicle_usage[prosecution]" id="" class="purpose-radio-input prosecution" value="no" checked>
                        <label for="prosecutionno" class="purpose-radio-label">
                            <span class="label-text">No</span>
                        </label>
                    </div>
                    <!-- motor offence query -->
                    <div class="col-lg-12">
                        <label for="motor_offence">Been convicted for a motor offence </label>
                    </div>
                    <div class="form-group col-lg-6 col-md-6">
                        <input type="radio" name="vehicle_usage[motor_offence]" id="" class="purpose-radio-input motor-offence" value="yes">
                        <label for="motoroffenceyes" class="purpose-radio-label">
                            <span class="label-text">Yes</span>
                        </label>
                        &nbsp;
                        &nbsp;
                        <input type="radio" name="vehicle_usage[motor_offence]" id="" class="purpose-radio-input motor-offence" value="no" checked>
                        <label for="motoroffenceno" class="purpose-radio-label">
                            <span class="label-text">No</span>
                        </label>
                    </div>
                    <br>
                </div>

                <script>
                    $(function(){
                        itemType = 'vehicle_usage_type'
                        cat = 'private';
                        toggleVusage(itemType, cat)

                       $('.usage').on('change', (e)=>{
                           cat = e.target.id
                           toggleVusage(itemType, cat)
                           
                       })
                    });
                    
                    function toggleVusage(itemType, cat){
                            showOverlay()
                            content = $.post('<?= _link('add-item&itemType=')?>'+itemType+"&cat="+cat, function(data){
                                $('select#vuseage').html('')
                                $('select#vuseage').append(data)
                                hideOverlay()
                            })
                    }
                </script>

