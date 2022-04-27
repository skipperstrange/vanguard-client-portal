            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12"><label for="cover_type">Type of cover required </label></div>
                </div>
                <div class="row form-group">
                <div class="col-lg-4 col-md-4">
                    <input type="radio" name="policy[cover_type]" id="comprehensive"
                    onchange="ToggleRadioButtonViewControl('comprehensive', 'COMP', 'vehicle_value')"
                    class="purpose-radio-input motor_cover_type" value="COMP" >
                    <label for="comprehensive" class="purpose-radio-label">
                        <span class="label-text">Comprehensive</span>
                        </label>
                </div>
                <div class="col-lg-5 col-md-4">
                    <input type="radio" name="policy[cover_type]" id="thirdPartyFireAndTheft" 
                    onchange="ToggleRadioButtonViewControl('thirdPartyFireAndTheft', 'TPFT', 'vehicle_value')"
                    class="purpose-radio-input motor_cover_type" value="TPFT"  >
                    <label for="thirdPartyFireAndTheft" class="purpose-radio-label">
                        <span class="label-text">Third Party Fire & Theft</span>
                    </label>
                </div>
                <div class="col-lg-3 col-md-4">
                    <input type="radio" name="policy[cover_type]" id="thirdParty" 
                    onchange="ToggleRadioButtonViewControl('thirdParty', 'TP', 'vehicle_value')"
                    class="purpose-radio-input excess motor motor_cover_type" value="TP"  checked>
                    <label for="thirdParty" class="purpose-radio-label ">
                        <span class="label-text">Third Party</span>
                    </label>
                </div>
                </div>
            </div>