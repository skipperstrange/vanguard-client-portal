<?php 
    include_once STATIC_DATA.'cover_types.php';
    include_once STATIC_DATA.'proposer_types.php';
    include_once STATIC_DATA.'id_types.php';
?>            
            <div class="form-group col-lg-6 col-md-6">
                <span class="has-float-label">
                            <input required type="text" id="fullname"  name="proposer[fullname]" class="form-control" title="Full Name Of Proposer" placeholder="Full Name Of Proposer *" value="" />
                </span>
            </div>
            
            <div class="form-group col-lg-6 col-md-6">
            <?php 
                echo form_options_generator($proposer_types, 'policy[proposer_type]', 'Select Proposer Type', ["class"=>"form-control", "data-style"=>"btn-info", "required", "onchange"=>"setProposerFields(this.value)"]); 
                ?>
            </div>
            <div class="form-group col-lg-8 col-md-6">
                            <input type="text" id="postalAddress" required name="proposer[postal_address]" class="form-control" title="Postal Address" placeholder="Postal Address" value="" />
            </div>
            <div class="form-group col-lg-4 col-md-6">
                            <input type="text" id="digitalAddress"  name="proposer[digital_address]" class="form-control" title="Digital Address" placeholder="Digital Address" value="" />
            </div>
            <div class="form-group col-lg-5 col-md-6">
                    <input required type="text" id="dob"  name="proposer[dob]" value=""  title="Date of Birth" placeholder="Date of Birth/Incorporation (MM-DD-YYYY)" title="MM-DD-YYYY" class="form-control input-group date dob" />
            </div>
            <div class="form-group col-lg-7 col-md-6">
                            <input type="text" id="occupation"  name="proposer[occupation]" class="form-control" title="Occupation"  placeholder="Occupation *" value="" />
            </div>
            <div class="form-group col-lg-6 col-md-6">
                <?php 
                echo form_options_generator($id_types, 'proposer[id_type]', 'Select ID type', ["class"=>"form-control", "data-style"=>"btn-info", "required"]); 
                ?>
            </div>
            <div class="form-group col-lg-6 col-md-6">
                            <input type="text" id="id_number" required name="proposer[id_number]" class="form-control" placeholder="Please provide ID number" placeholder="ID Number *" value="" />
            </div>
            <div  class="form-group col-lg-6 col-md-6">
                            <input type="tel" id="contact" required name="proposer[contact]" class="form-control"  placeholder="Contact" placeholder="Contact *" value="" />
            </div>
            <div class="form-group col-lg-6 col-md-6">
                            <input type="email" id="email" required name="proposer[email]" class="form-control" title="Email of owner" placeholder="Email" value="" />
            </div>
           