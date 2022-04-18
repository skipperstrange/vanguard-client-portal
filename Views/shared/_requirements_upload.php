<link rel="stylesheet" href="<?= CSS_PATH ?>filepond.min.css" />
<link rel="stylesheet" href="<?= CSS_PATH ?>filepond-plugin-image-preview.css" />
<script src="<?=JS_PATH?>filepond.min.js"></script>
<script src="<?=JS_PATH?>filepond-plugin-image-preview.min.js"></script>
<script src="<?=JS_PATH?>filepond-plugin-file-validate-size.js"></script>
<script src="<?=JS_PATH?>filepond-plugin-file-validate-type.js"></script>
<script src="<?=JS_PATH?>filepond-plugin-image-exif-orientation.js"></script>
<script src="<?=JS_PATH?>filepond.jquery.js"></script>
<?php 
include STATIC_DATA."upload_requirements.php";
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
</script>
<script>
// First register any plugins
$.fn.filepond.registerPlugin(
    FilePondPluginImagePreview,
    FilePondPluginFileValidateSize,
    FilePondPluginFileValidateType
    );

$('.file-upload').filepond({
    labelIdle: `Drag & Drop your picture or <span class="filepond--label-action">Browse</span>`,
    minFileSize:"120KB",
    maxFileSize:"16MB",
    styleLoadIndicatorPosition: 'center bottom',
    styleProgressIndicatorPosition: 'right bottom',
    styleButtonRemoveItemPosition: 'left bottom',
    styleButtonProcessItemPosition: 'right bottom',
  })
</script>

<div class="col-lg-12">
    <h4 class="title">Uploads</h4>
</div>
<div class="col-lg-12">
<input class="file-upload" type="file" 
    class="filepond"
    name="filepond"
    accept="image/png, image/jpeg, image/gif" />

</div>

