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
            
            <div class="col-md-6 col-sm-12">
                <span class="scanned-form">
                    Please provide vehicle registration number with uploaded form in the above field
                </span>
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
                        labelIdle: `<div style="font-size:90%;" title="Please select claim form to be uploaded">Drop claim form here<br/><div class="filepond--label-action">Browse</div></div>`,
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
            <div class="col-lg-12">
                    <h5>Document Uploads</h5>
            </div>
            <?php
            $upload_type = 'claims';
            $upload_sub_type = 'motor-claim';
              
            include STATIC_DATA."upload_requirements.php";
           // include SHARED.'_requirements_upload.php'; 
            ?>
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
<script src="<?= JS_PATH ?>motor-claims-wizard-alt.js"></script>