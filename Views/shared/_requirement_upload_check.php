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
    $label = '';
    $reqClass = '';
    if(($requirements['required'] == 1) || ($requirements['required'] == true)){
    $label = '<span style="color:red; font-size:65%;">(required)</span>';
    $reqClass = 'isRequired';
    }else{ 
        //$tags .= " checked disabled"; 
        $tags .= " checked"; 
    }
?>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <!--input type="checkbox" name="<?= $file_upload ?>_check"  id="<?= $file_upload ?>_check" class="purpose-radio-input <?= $reqClass ?>" <?= $tags ?> -->
        <label for="$file_upload" class="purpose-radio-label">
            <span class="label-text"><?= format_string($file_upload)?> &nbsp;</span> <?= $label ?>
        </label>
    </div>
<?php
}
?>
</div>
</div>
<script>
    $(function(){ 
        var totalRequired = $(".isRequired").length
        var proceed = $('#btn-proceed')
        
        var currentChecked = 0;
        
            $(".isRequired").each(function(i){
            console.log($(this))
            $(this).change(
                function(){
                    if ($(this).is(':checked')) {
                        currentChecked++;
                    }else{
                        currentChecked--;
                    }

                if(currentChecked === totalRequired){
                    console.log(proceed)
                    proceed.attr('disabled', false)
                }
                else{
                    proceed.attr('disabled', true)
                }
            })
        })  
      
    })
</script>

