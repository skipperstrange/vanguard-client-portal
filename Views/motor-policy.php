<?php include_once SHARED.'_upload_scripts.php'; ?>

<div class="col-lg-10 col-md-12 offset-lg-1 form-card card shadow-sm">
    <form action="" id="motor-policy-form">
        <div id="motor-policy-wizard">
        <!-- SECTION 1 -->
            <h4></h4>
            <section class="row" id="yep">
                <?php include SHARED.'_proposer_details.php'; ?>
                <?php include SHARED.'motor_insurance_picks.php'; ?>
            </section>
            <!-- SECTION 2 -->
            <h4></h4>
            <section class="row">
            <div id="vehicle" class="col-sm-12 clear-fix clearfix"></div>
                <?php include SHARED.'_vehicle_details.php'; ?>
                
                <!-- div class="col-sm-8 offset-sm-4 clear-fix clearfix">
                <div id="vehicle-control" class="float-right">
                    <button type="button" class="btn btn-primary btn-sm action-call" onclick="addItem('vehicle')"><i class="fa fa-plus-circle"></i> Add vehicle</button>
                </div>
            </ -->  
            </section>
            <!-- SECTION 3 -->
            <h4></h4>
            <section class="row">
            <?php include SHARED.'_vehicle_usage_details.php'; ?>
           </section>
            <!-- SECTION 4 -->
            <h4></h4>
            <section>
            <?php include SHARED.'_insurance_history.php'; ?>
            </section>

            <!-- SECTION 5 -->
            <h4></h4>
            <section class="row">
                <?php include SHARED.'motor_policy_options.php'; ?>
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
<?php include SHARED.'_form_scripts.php'; ?>  
<script src="<?= JS_PATH ?>motor-policy-wizard.js"></script>
<script>
    $(function(){
        $('.steps ul').addClass('motor-policy-step-0');
    })
    
</script>

