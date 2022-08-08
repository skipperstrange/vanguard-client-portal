<?php 

$files_upload = $upload_requirements[$upload_type][$upload_sub_type];

foreach($files_upload as $file_upload => $requirement){
    $required = "";
    $maxSize = "16MB";
    $minSize = "16kb";
    $allowMultiple = false;
    if($requirement['required'] && $requirement['required'] == true){
        $required = "required";
    }

    if($requirement['allowMultiple'] && $requirement['allowMultiple'] == true){
        $multiple = "multiple";
        $allowMultiple = true;
    }else{
        $multiple = "";
    }

    if($requirement['minSize'] ){
        $minSize = $requirement['minSize'];
    }

    if($requirement['maxSize'] ){
        $maxSize = $requirement['maxSize'];
    }
?>
<script>
$('#<?=$file_upload?>').filepond({
    labelIdle: `<div style="font-size:80%;" title="<?= format_string($requirement['title'], 1) ?>"><?= format_string($file_upload, 2) ?> (<?= $required ?>) <br/><div class="filepond--label-action">Browse</div></div>`,
    minFileSize:"<?= $minSize ?>",
    maxFileSize:"<?= $maxSize ?>",
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


<div class="col-lg-4 col-md-6 col-sm-12">
<input class="file-upload" id="<?=$file_upload?>" title="<?= $title ?>" <?= $multiple ?> <?= $required ?> type="file" 
    class="filepond files"
    name="upload[<?= $file_upload ?>]<?php if($allowMultiple == true): echo "[]"; endif ?>"
    accept="image/png, image/jpeg, image/gif, application/pdf" />
</div>
<?php
}
?>

