    <?php include_once SHARED.'_upload_scripts.php'; ?>
    <div class="col-lg-10 offset-lg-1 form-card card shadow">
    <form action="" id="motor-claim-form" enctype="multipart/form-data">
        <div id="motor-claims-wizard-alt">
            <!-- SECTION 1 -->
            <h4></h4>
            <section class="row">
            <div class="col-md-6 col-sm-12">
                <div class="alert alert-info">
                    Please provide vehicle registration number with uploaded form, or 
                    <a href="<?= _link($controller, 'motor-claim') ?>">Click here to fill manually online.</a>
                </div>
                <div class="form-group">
                    <input type="hidden" id="search_by"  name="claim_by" class="form-control" value="by_upload" />
                </div>
            </div>
            <div class="col-md-6 col-sm-12 form-group ">
                <div class="form-group">
                    <input type="text" id="policy_id"  name="policy_id" class="form-control" placeholder="Vehicle Registration" value="" />
                </div>
            </div>
            
            <div class="col-md-6 col-sm-12">
                <div class="alert alert-warning">
                    Please provide the required documents for upload below before you proceed.
            </div>
                <br>
            </div>
            <div class="col-md-6 col-sm-12">
                <span class="scanned-form">
                    <input class="file-upload" id="claim_upload_form" required type="file" 
                    class="filepond files"
                    name="claim_form_upload"
                    accept="image/png, image/jpeg, image/gif, application/pdf" />
                </span>

                <script>
                    $('#claim_upload_form').filepond({
                        labelIdle: `<div style="font-size:90%;" title="Please select claim form to be uploaded">Drop claim form here * (required)<br/><div class="filepond--label-action">Browse</div></div>`,
                        minFileSize:"16KB",
                        maxFileSize:"166MB",
                        imagePreviewHeight: 130,
                        styleLoadIndicatorPosition: 'center bottom',
                        styleProgressIndicatorPosition: 'right bottom',
                        styleButtonRemoveItemPosition: 'left bottom',
                        styleButtonProcessItemPosition: 'right bottom',
                        server: {
                            url: apiUrls.applicationServerUrl+'portal/tmp-uploads'
                        }
                    })
                    </script>
            </div>
            <br>
            <div class="col-lg-12" style="margin-top: 3rem;">
                    <h5>Document Uploads</h5>
                </div>
                <br>
            <?php
                $upload_type = 'claims';
                $upload_sub_type = 'motor-claim';
                
                include STATIC_DATA."upload_requirements.php";
                include SHARED.'_requirements_upload.php'; 
                include SHARED.'_motor_requirements_upload.php'; 
            ?>

            <div class="col-lg-12">
                
                <span>
                    <a href="<?= _link($controller, 'motor-claim') ?>">Click here to fill manually online.</a>
                </span>
            </div>

            </section>
            <!-- SECTION 2 -->
            <h4></h4>
            <section class="row">
                <div class="col-md-12 col-sm-12">
                    <div id="confirm-details">
                    </div>
                </div>

                <div class="col-lg-6">
                 <div class="row">
                   <div class="form-group col-lg-12 ">
                    <input required type="text" id="vehicle_reg"  name="policy_info[owner][contact]"  class="form-control"  title="Vehicle owner contact" placeholder="Contact" />
                   </div>
                  </div>
                </div>
                <br>
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
<?php include SHARED.'_motor_claim_form_wizard_scripts.php'; ?>
<script src="<?= JS_PATH ?>motor-claims-wizard-alt.js"></script>
<style>
    .steps ul li {
    width: 40%;
}
</style>
