    <link rel="stylesheet" href="<?= CSS_PATH.'bootstrap-colorpicker.css' ?>">
    <script src="<?= JS_PATH ?>jquery.validate.js"></script>
    <script src="<?= JS_PATH ?>jquery.steps.js"></script>
    <script src="<?= JS_PATH ?>moment.min.js" ></script>
    <script src="<?= JS_PATH ?>bootstrap-datetimepicker.min.js"></script>
    <script src="<?= JS_PATH ?>jQuery.print.min.js"></script>
    <script src="<?= JS_PATH ?>bootstrap-colorpicker.js"></script>

    <script>
    $(function() {
        vehicleUsage.change(()=> {
            var option = $(this).val();
            var target = $(this).attr('data-target');
            if (option == 'commercial') {
                $('#' + target).show('slow');
            }

            if (option == 'private') {
                $('#' + target).hide('slow');
            }
        })
    });
    </script>