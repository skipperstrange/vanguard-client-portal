
    <div class="row casualty" id="casualty_<?= $count?>">
        <div class="col-lg-12">
            <h5 class="title">
                <span class="count"></span> Casualty Details:
            <div class="float-right"><i class="fa fa-times-circle item-remove" onclick="removeItem('casualty_<?= $count?>', 'casualty')" title="Remove from list"></i></div>
        </h5>
        </div>
        <div class="form-group col-lg-6 col-md-12">
            <input type="text" required name="<?= "casualty[$count][name]"?>" class="form-control casualty_name" placeholder="Name *" value="" />
        </div>
        <div class="form-group col-lg-6 col-md-12">
            <input type="text" required name="<?= "casualty[$count][location]"?>" class="form-control casualty_location" placeholder="Address / Location" value="" />
        </div>
        <div class="form-group col-lg-12 col-md-12">
            <textarea name="<?php "casualty[$count][description]"?>" required class="form-control casualty_description" placeholder="Description of casualty" style="width: 100%; height: 150px;"></textarea>
        </div>
        <div class="form-group col-lg-6 col-md-12" style="display:inline-block;">
            <strong>Has the incident been reported?</strong>
            <div class="put-inline" style="display: flex;">
                <div class="form-check"> 
                <input class="form-check-input" type="radio" name="<?= "casualty[$count][reported]"?>" id="yes" value="yes" >
                <label class="form-check-label" for="yes">
                    Yes
                </label>
                </div>
                &nbsp;
                &nbsp;
                <div class="form-check">
                <input class="form-check-input" type="radio" name="<?= "casualty[$count][reported]"?>" id="no " value="no" checked>
                <label class="form-check-label" for="no">
                    No
                </label>
                </div>
            </div>
        </div>
    </div>