<div class="col-lg-8 offset-lg-2 form-card card shadow">
    <form action="" id="motor-form">
        <div id="motor-wizard">
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

            </section>

            <!-- SECTION 3 -->
            <h4></h4>
            <section class="row">

                <?php include SHARED . '_accident_details.php'; ?>



            </section>

            <!-- SECTION 4 -->
            <h4></h4>
            <section>
                <div id="casualtyMotorClaim" class="col-sm-12 clear-fix clearfix"></div>
                <br>
                <div class="col-sm-8 offset-sm-4 clear-fix clearfix">
                    <div id="casualty-control" class="float-right">
                        <button type="button" class="btn btn-primary btn-sm action-call" onclick="addItem('casualtyMotorClaim')"><i class="fa fa-plus-circle"></i> Add casualty</button>
                    </div>
                </div>
            </section>


            <!-- SECTION 5 -->
            <h4></h4>
            <section>
                <div id="witnessMotorClaim" class="col-sm-12 clear-fix clearfix"></div>
                <br>
                <div class="col-sm-8 offset-sm-4 clear-fix clearfix">
                    <div id="witness-control" class="float-right">
                        <button type="button" class="btn btn-primary btn-sm action-call" onclick="addItem('witnessMotorClaim')"><i class="fa fa-plus-circle"></i> Add witness</button>
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
        $('.steps ul').addClass('motor-step-1');
    })

</script>