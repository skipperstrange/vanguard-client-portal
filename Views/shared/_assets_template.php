<div class="row" class="assets" id="assets_<?= $count?>">
        <div class="col-lg-12">
            <h5 class="title">Damaged Assets:
                <div class="float-right">
                    <i class="fa fa-times-circle item-remove" onclick="removeItem('assets_<?= $count?>', 'assets')" title="Remove from list"></i>
                </div>
            </h5>
        </div>
    <div class="form-group col-md-12">
        <input type="text" id="" required name="asset[<?= $count?>][description]" class="form-control" placeholder="Describe asset" value="" />
    </div>
    <div class="form-group col-lg-4 col-md-6">
        <div class="input-group date" id="id_1">
            <input type="text" name="asset[][date_of_purchase ]" placeholder="Date of purchase" title="" class="form-control" required/>
            <div class="input-group-addon input-group-append">
                <div class="input-group-text">
                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group col-lg-4 col-md-6">
        <input type="text" id="purchase_value" required name="asset[][purchase_value]" class="form-control" placeholder="Value" value="" />
    </div>
    <div class="form-group col-lg-4 col-md-6">
        <input type="text" id="purchase_place" required name="asset[][deprecation_value]" class="form-control" placeholder="Depreciation value" value="" />
    </div>
    <div class="form-group col-lg-6 col-md-6">
        <input type="text" id="before_value" required name="asset[][before_value]" class="form-control" placeholder="Value before accident" value="" />
    </div>
    <div class="form-group col-lg-6 col-md-6">
        <input type="text" id="after_value" required name="asset[][after_value]" class="form-control" placeholder="Value after accident" value="" />
    </div>
    <div class="form-group col-lg-6 col-md-6">
        <input type="text" id="before_value" required name="asset[][salvage_value]" class="form-control" placeholder="Salvaged Value" value="" />
    </div>
    <div class="form-group col-lg-6 col-md-6">
        <input type="text" id="after_value" required name="asset[][claim_value]" class="form-control" placeholder="Amount to claim" value="" />
    </div>
</div>