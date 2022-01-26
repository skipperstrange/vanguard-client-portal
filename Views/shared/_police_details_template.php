<div class="row police_details" id="police_details_<?= $count?>">
    <div class="form-group col-lg-6 col-md-6">
        <div class="input-group date" id="id_<?=$count?>">
            <input type="text" name="witness_motor_claim[<?=$count?>][police_details][date]" placeholder="Date accident was reported" title="" class="form-control" required />
            <div class="input-group-addon input-group-append">
                <div class="input-group-text">
                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group col-lg-6">
        <input type="text" id="police_station" required name="witness_motor_claim[<?=$count?>][police_details][location]" class="form-control" placeholder="Which police station was the accident reported to? *" value="" />
    </div>
    <div class="form-group col-lg-6">
        <input type="text" id="police_constable" required name="witness_motor_claim[<?=$count?>][police_details][constable]" class="form-control" placeholder="Name of the constable who took particulars? *" value="" />
    </div>
</div>