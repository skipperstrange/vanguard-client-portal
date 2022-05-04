<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <p>
                Please make sure you have the following documents ready for upload. Documents accepted are: jpg, png, pdf
            </p>
        </div>
    </div>
<div class="form-group row">
 <?php 
foreach($files_upload as $file_upload => $requirements){
    $tags = '';
    if(($requirements['required'] == 1) || ($requirements['required'] == true)){}else{ $tags .= " checked disabled";}
?>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <input type="checkbox" name="<?= $file_upload ?>_check"  id="<?= $file_upload ?>_check" class="purpose-radio-input" <?= $tags ?>>
        <label for="agreeDeclare" class="purpose-radio-label">
            <span class="label-text"><?= format_string($file_upload)?></span>
        </label>
    </div>
<?php
}
?>
</div>
</div>
