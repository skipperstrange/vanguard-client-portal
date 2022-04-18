<div class="col-lg-10 offset-lg-1 form-card card shadow">
    <form action="" id="motor-claim-form">
        <div id="motor-claims-wizard">
            <!-- SECTION 1 -->
            <h4></h4>
            <section class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                    <?php
                        echo form_options_generator($claim_type_options['motor_claim'], 'claim_by', "Search By",  ["class"=>"form-control" , "id"=>"search_by", 'required']);
                    ?>
                </div>
                </div>
            <div class="col-md-6 col-sm-12 form-group ">
                <div class="form-group">
                    <input type="text" id="policy_id"  name="policy_id" class="form-control" value="" placeholder="Vehicle Registration/Motor Policy ID * (P-001-1001-2020-000001)" value="" />
                </div>
            </div>
            </section>
            <!-- SECTION 2 -->
            <h4></h4>
            <section class="row">
                <div class="col-md-12 col-sm-12">
                    <div id="confirm-details">
                    </div>
                </div>
                
                <?php 
                    include SHARED.'_extra_vehicle_owner_claim_details.php';
                ?>

                <?php
                    include SHARED.'_claim_police_details.php';
                ?>
                
                <br>
            </section>
            <h4></h4>
            <section class="row">
                <?php include SHARED.'motor_claim_driver_details.php'; ?>
            </section>

            <!-- SECTION 3 -->
            <h4></h4>
            <section class="row" id="accident_details">
                <?php include SHARED . 'accident_details.php'; ?>
                <?php include SHARED.'_requirements_upload.php'; ?>
            </section>

            <!-- SECTION 4 -->
            <h4></h4>
            <section>
                <div id="casualty_damage" class="col-sm-12 clear-fix clearfix"></div>
                <br>
                <div class="col-sm-8 offset-sm-4 clear-fix clearfix">
                    <div id="casualty_damage-control" class="float-right">
                        <button type="button" class="btn btn-primary btn-sm action-call" onclick="addItem('casualty_damage')"><i class="fa fa-plus-circle"></i> Add casualty</button>
                    </div>
                </div>
            </section>

            <!-- SECTION 5 -->
            <h4></h4>
            <section>
                <div id="witness" class="col-sm-12 clear-fix clearfix"></div>
                <br>
                <div class="col-sm-8 offset-sm-4 clear-fix clearfix">
                    <div id="witness-control" class="float-right">
                        <button type="button" class="btn btn-primary btn-sm action-call" onclick="addItem('witness')"><i class="fa fa-plus-circle"></i> Add witness</button>
                    </div>
                </div>
            </section>


            <!-- SECTION 6 -->
            <h4></h4>
            <section>
                <div  id="summary" class="col-sm-12 clear-fix clearfix">
                    
                </div>
                <div id="summary-declaration">
                    
                </div>
                <div id="signature-container">
                            
                </div>
                <div id="print">
                    
                </div>
            </section>
        </div>
    </form>
</div>
<?php include SHARED.'_form_wizard_scripts.php'; ?>
<script src="<?= JS_PATH ?>motor-claims-wizard.js"></script>
