<link rel="stylesheet" href="<?= CSS_PATH ?>filepond.min.css" />
<link rel="stylesheet" href="<?= CSS_PATH ?>filepond-plugin-image-preview.css" />
<script src="<?=JS_PATH?>filepond.min.js"></script>
<script src="<?=JS_PATH?>filepond-plugin-image-preview.min.js"></script>
<script src="<?=JS_PATH?>filepond-plugin-file-validate-size.js"></script>
<script src="<?=JS_PATH?>filepond-plugin-file-validate-type.js"></script>
<script src="<?=JS_PATH?>filepond-plugin-image-exif-orientation.js"></script>
<script src="<?=JS_PATH?>filepond.jquery.js"></script>
<?php 

$files_upload = $upload_requirements[$upload_type][$upload_sub_type];
?>

<script>
// prettier-ignore
[
{supported: 'Symbol' in window, fill: 'https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.6.15/browser-polyfill.min.js'},
{supported: 'Promise' in window, fill: 'https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.min.js'},
{supported: 'fetch' in window, fill: 'https://cdn.jsdelivr.net/npm/fetch-polyfill@0.8.2/fetch.min.js'},
{supported: 'CustomEvent' in window && 'log10' in Math && 'sign' in Math &&  'assign' in Object &&  'from' in Array &&
            ['find', 'findIndex', 'some', 'includes'].reduce(function(previous, prop) { return (prop in Array.prototype) ? previous : false; }, true), fill: 'https://unpkg.com/filepond-polyfill/dist/filepond-polyfill.js'}
].forEach(function(p) {
if (p.supported) return;
document.write('<script src="' + p.fill + '"><\/script>');
});

// First register any plugins for filepond
$.fn.filepond.registerPlugin(
    FilePondPluginImagePreview,
    FilePondPluginFileValidateSize,
    FilePondPluginFileValidateType
    );
</script>


<?php
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
    labelIdle: `<div style="font-size:90%;" title="<?= format_string($requirement['desc'], 1) ?>"><?= format_string($file_upload, 2) ?> <br/><div class="filepond--label-action">Browse</div></div>`,
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
<input class="file-upload" id="<?=$file_upload?>" <?= $multiple ?> <?= $required ?> type="file" 
    class="filepond files"
    name="upload[<?= $file_upload ?>]<?php if($allowMultiple == true): echo "[]"; endif ?>"
    accept="image/png, image/jpeg, image/gif, application/pdf" />
</div>
<?php
}
?>

