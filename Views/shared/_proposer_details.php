            <div class="form-group col-lg-6 col-md-6">
                            <input type="text" id="fullname"  name="motor_policy[fullname]" class="form-control" placeholder="Full Name Of Proposer *" value="" />
            </div>
            <div class="form-group col-lg-6 col-md-6">
                            <select class="form-control"  name="motor_policy[proposer_type]">
                                <option value="">Select Propser Type</option>
                                <option value="personal">personal</option>
                                <option value="broker">broker</option>
                                <option value="agent">agent</option>
                            </select>
            </div>
            <div class="form-group col-lg-8 col-md-6">
                            <input type="text" id="postalAddress"  name="motor_policy[postal_address]" class="form-control" placeholder="Postal Address" value="" />
            </div>
            <div class="form-group col-lg-4 col-md-6">
                            <input type="text" id="digitalAddress"  name="motor_policy[digital_address]" class="form-control" placeholder="Digital Address" value="" />
            </div>
            <div class="form-group col-lg-5 col-md-6">
            <div class="input-group date" id="id_0">
                    <input type="text" id="dob"  name="motor_policy[dob]" placeholder="Date of Birth/Incorporation" title="" class="form-control" />
                    <div class="input-group-addon input-group-append">
                        <div class="input-group-text">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group col-lg-7 col-md-6">
                            <input type="text" id="occupation"  name="motor_policy[occupation]" class="form-control" placeholder="Occupation *" value="" />
            </div>
            <div class="form-group col-lg-6 col-md-6">
                            <select class="form-control" data-style="btn-info" name="motor_policy[id_type]">
                                <option value="">ID type</option>
                                <option value="drivers_license">Drivers License</option>
                                <option value="voters_id">Voters ID</option>
                                <option value="ghana_card">Ghana Card</option>
                            </select>
            </div>
            <div class="form-group col-lg-6 col-md-6">
                            <input type="text" id="id_number"  name="motor_policy[id_number]" class="form-control" placeholder="ID Number *" value="" />
            </div>
            <div class="form-group col-lg-6 col-md-6">
                            <input type="tel" id="contact"  name="motor_policy[contact]" class="form-control" placeholder="Contact *" value="" />
            </div>
            <div class="form-group col-lg-6 col-md-6">
                            <input type="email" id="email"  name="motor_policy[email]" class="form-control" placeholder="Email" value="" />
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12"><label for="cover_type">Type of cover required </label></div>
                </div>
                <div class="row form-group">
                <div class="col-lg-4 col-md-4">
                    <input type="radio" name="motor_policy[cover_type]" id="comprehensive" class="purpose-radio-input" value="Comprehensive">
                    <label for="comprehensive" class="purpose-radio-label">
                        <span class="label-text">Comprehensive</span>
                        </label>
                </div>
                <div class="col-lg-5 col-md-4">
                    <input type="radio" name="motor_policy[cover_type]" id="thirdPartyFireAndTheft" class="purpose-radio-input" value="Third Party Fire & Theft" checked >
                    <label for="thirdPartyFireAndTheft" class="purpose-radio-label">
                        <span class="label-text">Third Party Fire & Theft</span>
                    </label>
                </div>
                <div class="col-lg-3 col-md-4">
                    <input type="radio" name="motor_policy[cover_type]" id="thirdFarty" class="purpose-radio-input excess motor" value="Third Party" checked >
                    <label for="thirdParty" class="purpose-radio-label">
                        <span class="label-text">Third Party</span>
                    </label>
                </div>
                </div>
            </div>