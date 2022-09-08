<?php include_once SHARED.'_upload_scripts.php'; ?>
    <div class="col-lg-10 offset-lg-1 form-card card shadow-sm">
    <form action="" id="travel-policy-form" enctype="multipart/form-data">
        <div id="travel-policy-wizard">
            <!-- SECTION 1 -->
            <h4></h4>
            <section class="row">
                <?php include SHARED.'_proposer_details.php'; ?>
            <div class="col-md-12 col-sm-12">
                <h6 class="title">Destination</h6>
            </div>
            <div class="form-group col-md-4 col-sm-12">
                <input type="text" required name="trip[destination]" class="form-control" placeholder="Destination" value="" />
            </div>
            <div class="form-group col-md-8 col-sm-12">
                <input type="text" required name="trip[address]" class="form-control" placeholder="Address/Contact" value="" />
            </div>
            </section>

            <!-- SECTION 2 -->
            <h4></h4>
            <section>
            <div class="col-md-12 col-sm-12">
                <div class="alert alert-info">
                    Persons to be coverd by policy can be added here. <a href="#" onclick="loadUploadInstructions('This is area is where you can add persons to be covered by policy')"><i class="fa fa-info-circle"></i> </a>     
                </div>
            </div>
                <div id="insured_persons" class="col-sm-12 clear-fix clearfix"></div>
                <br>
                <div class="col-sm-8 offset-sm-4 clear-fix clearfix">
                    <div id="insured_persons-control" class="float-right">
                        <button type="button" class="btn btn-primary btn-sm action-call" onclick="addItem('insured_persons')"><i class="fa fa-plus-circle"></i> Add insured person</button>
                    </div>
                </div>
            </section>

            <h4></h4>
            <section>
            <div class="col-md-12 col-sm-12">
                <div class="alert alert-info">
                    Beneficiaries of the policy can be added here. <a href="#" onclick="loadUploadInstructions('This where you can add any persons to benefit from the policy.')"><i class="fa fa-info-circle"></i> </a>     
                </div>
            </div>
                <div id="beneficiaries" class="col-sm-12 clear-fix clearfix"></div>
                <br>
                <div class="col-sm-8 offset-sm-4 clear-fix clearfix">
                    <div id="beneficiaries-control" class="float-right">
                        <button type="button" class="btn btn-primary btn-sm action-call" onclick="addItem('beneficiaries')"><i class="fa fa-plus-circle"></i> Add beneficiary</button>
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
    <?php include SHARED.'_form_scripts.php'; ?>  

    <script src="<?= JS_PATH ?>travel-policy-wizard.js"></script>
<script>
    $(function(){
       $('.steps ul').addClass('travel-policy-step-1');
    })
</script>
<style>
    .steps ul {
   /* justify-content: center;*/
    }
    .steps ul li {
    width: 25%;
    }
</style>

    