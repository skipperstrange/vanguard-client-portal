<div class="col-lg-8 offset-lg-2 form-card card shadow">
    <form action="" id="motor-claim-form">
        <div id="motor-claims-wizard">
            <!-- SECTION 1 -->
            <h4></h4>
            <section>
                <div class="form-group">
                    <input type="text" id="policy_id" required name="policy_id" class="form-control" placeholder="Motor Policy ID * (P-001-1001-2020-000001)" value="" />
                </div>


            </section>
            <!-- SECTION 2 -->
            <h4></h4>
            <section class="row">
                <?php include SHARED . '_vehicle_information.php'; ?>
                <div class="col-lg-12">
                    <label for="vehicle_agreement">Is the vehicle the subject of a hire purchase or loan agreement?</label>
                </div>
                <div class="form-group col-lg-6 col-md-6">
                    <input type="radio" name="vehicle_motor_claim[<?= $count ?>][vehicle_agreement]" id="vehicleagreementyes_<?= $count ?>" class="purpose-radio-input vehicle-consent" onchange="appear('vehicleagreementyes_<?= $count ?>','yes', 'agreement', '<?= $count ?>')" value="yes">
                    <label for="vehicleconsentyes" class="purpose-radio-label">
                        <span class="label-text">Yes</span>
                    </label>
                    &nbsp;
                    &nbsp;
                    <input type="radio" name="vehicle_motor_claim[<?= $count ?>][vehicle_agreement]" id="vehicleagreementno" class="purpose-radio-input vehicle-consent" onchange="appear('vehicleagreementno','yes', 'agreement', '<?= $count ?>')" value="no" checked>
                    <label for="vehicleconsentno" class="purpose-radio-label">
                        <span class="label-text">No</span>
                    </label>
                </div>

                <div class="col-lg-12" id="agreement_<?= $count ?>">

                </div>


                <div class="form-group col-md-12">
                    <textarea textarea name="vehicle_motor_claim[purpose_of_vehicle]" title="purpose of vehicle?" class="form-control" placeholder="State fully the purpose of which the vehicle is being used." style="width: 100%; height: 100px;"></textarea>
                </div>

                <div class="col-lg-12">
                    <label for="vehicle_consent">Was the vehicle used with your consent?</label>
                </div>
                <div class="form-group col-lg-6 col-md-6">
                    <input type="radio" name="vehicle_motor_claim[vehicle_consent]" id="" class="purpose-radio-input vehicle-consent" value="yes">
                    <label for="vehicleconsentyes" class="purpose-radio-label">
                        <span class="label-text">Yes</span>
                    </label>
                    &nbsp;
                    &nbsp;
                    <input type="radio" name="vehicle_motor_claim[vehicle_consent]" id="" class="purpose-radio-input vehicle-consent" value="no" checked>
                    <label for="vehicleconsentno" class="purpose-radio-label">
                        <span class="label-text">No</span>
                    </label>
                </div>

            </section>

            <!-- SECTION 3 -->
            <h4></h4>
            <section class="row">

                <?php include SHARED . '_accident_details.php'; ?>



            </section>

            <!-- SECTION 4 -->
            <h4></h4>
            <section>
                <div id="casualty_motor_claim" class="col-sm-12 clear-fix clearfix"></div>
                <br>
                <div class="col-sm-8 offset-sm-4 clear-fix clearfix">
                    <div id="casualty_motor_claim-control" class="float-right">
                        <button type="button" class="btn btn-primary btn-sm action-call" onclick="addItem('casualty_motor_claim')"><i class="fa fa-plus-circle"></i> Add casualty</button>
                    </div>
                </div>
            </section>


            <!-- SECTION 5 -->
            <h4></h4>
            <section>
                <div id="witness_motor_claim" class="col-sm-12 clear-fix clearfix"></div>
                <br>
                <div class="col-sm-8 offset-sm-4 clear-fix clearfix">
                    <div id="witness_motor_claim-control" class="float-right">
                        <button type="button" class="btn btn-primary btn-sm action-call" onclick="addItem('witness_motor_claim')"><i class="fa fa-plus-circle"></i> Add witness</button>
                    </div>
                </div>
            </section>


            <!-- SECTION 6 -->
            <h4></h4>
            <section>
                <div id="summary" class="col-sm-12 clear-fix clearfix">

                </div>
            </section>
        </div>
    </form>
</div>

<script src="<?= JS_PATH ?>motor-claims-wizard.js"></script>
<script>
    $(function() {
        $('.steps ul').addClass('step-1');
    })
</script>