<?php 
    include_once STATIC_DATA.'cover_types.php';
    include_once STATIC_DATA.'proposer_types.php';
    include_once STATIC_DATA.'id_types.php';
?>            
            <div class="form-group col-lg-6 col-md-6">
                <span class="has-float-label">
                            <input type="text" id="fullname"  name="proposer[fullname]" class="form-control" placeholder="Full Name Of Proposer *" value="" />
                </span>
            </div>
            <div class="form-group col-lg-6 col-md-6">
                    <select class="form-control"  name="policy[proposer_type]" onchange="setProposerFields(this.value)" id="propserTYpe">
                        <option title="Proposer Type" value="">Select Proposer Type</option>
                        <?php 
                            foreach($proposer_types as $type){
                        ?>
                            <option value="<?= $type ?>"><?= ucfirst(strtolower($type))?></option>
                        <?php
                        }
                        ?>
                    </select>
            </div>
            <div class="form-group col-lg-8 col-md-6">
                            <input type="text" id="postalAddress"  name="proposer[postal_address]" class="form-control" placeholder="Postal Address" value="" />
            </div>
            <div class="form-group col-lg-4 col-md-6">
                            <input type="text" id="digitalAddress"  name="proposer[digital_address]" class="form-control" placeholder="Digital Address" value="" />
            </div>
            <div class="form-group col-lg-5 col-md-6">
            <div class="input-group date" id="id_0">
                    <input type="text" id="dob"  name="proposer[dob]" value=""  placeholder="Date of Birth/Incorporation" title="" class="form-control" />
                    <div class="input-group-addon input-group-append">
                        <div class="input-group-text">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group col-lg-7 col-md-6">
                            <input type="text" id="occupation"  name="proposer[occupation]" class="form-control" placeholder="Occupation *" value="" />
            </div>
            <div class="form-group col-lg-6 col-md-6">
                <select class="form-control" data-style="btn-info" name="proposer[id_type]">
                    <option value="">Select ID type</option>
                    <?php 
                        foreach($id_types as $type){
                    ?>
                        <option value="<?= $type ?>"><?= ucfirst(strtolower(str_replace('_',' ',$type)))?></option>
                    <?php
                    }
                    ?>
                    </optgroup>
                </select>
            </div>
            <div class="form-group col-lg-6 col-md-6">
                            <input type="text" id="id_number"  name="proposer[id_number]" class="form-control" placeholder="ID Number *" value="" />
            </div>
            <div class="form-group col-lg-6 col-md-6">
                            <input type="tel" id="contact"  name="proposer[contact]" class="form-control" placeholder="Contact *" value="" />
            </div>
            <div class="form-group col-lg-6 col-md-6">
                            <input type="email" id="email"  name="proposer[email]" class="form-control" placeholder="Email" value="" />
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12"><label for="cover_type">Type of cover required </label></div>
                </div>
                <div class="row form-group">
                <div class="col-lg-4 col-md-4">
                    <input type="radio" name="policy[cover_type]" id="comprehensive" class="purpose-radio-input" value="COMP" >
                    <label for="comprehensive" class="purpose-radio-label">
                        <span class="label-text">Comprehensive</span>
                        </label>
                </div>
                <div class="col-lg-5 col-md-4">
                    <input type="radio" name="policy[cover_type]" id="thirdPartyFireAndTheft" class="purpose-radio-input" value="TPFT"  >
                    <label for="thirdPartyFireAndTheft" class="purpose-radio-label">
                        <span class="label-text">Third Party Fire & Theft</span>
                    </label>
                </div>
                <div class="col-lg-3 col-md-4">
                    <input type="radio" name="policy[cover_type]" id="thirdParty" class="purpose-radio-input excess motor" value="TP"  checked>
                    <label for="thirdParty" class="purpose-radio-label">
                        <span class="label-text">Third Party</span>
                    </label>
                </div>
                </div>
            </div>