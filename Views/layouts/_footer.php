<script src="<?= JS_PATH ?>main.js"></script>
<script>
    function initDateInputs() {
        $('.date').datetimepicker({
            "allowInputToggle": true,
            "showClose": true,
            "showClear": true,
            "showTodayButton": true,
            "format": "MM/DD/YYYY",
            "viewMode": 'years',
        });
    }

    function initColorPicker() {
        $('.body_color').colorpicker();
    }



    casualtyCount = 0;
    casualtyMotorClaimCount = 0;
    witnessCount = 0;
    assetsCount = 0;
    vehicleCount = 0;
    witnessMotorClaimCount = 0;
    policeDetailsCount = 0;


    //item type can be one of three. assets, casualty or witness
    function addItem(itemType) {
        let count
        let initDate = false
        let initColorPicker = false
        switch (itemType) {
            case 'casualty':
                casualtyCount++
                count = casualtyCount;
                break;
            case 'assets':
                assetsCount++
                count = assetsCount
                initDate = true
                break;

            case 'casualtyMotorClaim':
                casualtyMotorClaimCount++
                count = casualtyMotorClaimCount
                break;
            case 'witness':
                witnessCount++
                count = witnessCount
                break;
            case 'witnessMotorClaim':
                witnessMotorClaimCount++
                count = witnessMotorClaimCount
                break;
            case 'vehicle':

                vehicleCount++
                count = vehicleCount
                initDate = true
                initColorPicker = true
                break;

            case 'policeDetails':
                policeDetailsCount++
                count = policeDetailsCount
                appear()

                break;
        }

        let url = '<?= _link('add-item&itemType=', '') ?>' + itemType + '&count=' + count;
        $.get(url).then(resp => {
            let resetId = itemType + '-reset'
            $('#' + itemType).append(resp)

            if (initDate === true) {
                initDateInputs();
            }
            if (initColorPicker === true) {
                $('.body_color').colorpicker();
            }
            if ($('#' + resetId).length) {

            } else {
                $('#' + itemType + '-control').append('<button type="button" id="' + resetId + '" class="btn btn-sm action-call  btn-warning" onclick="resetItems(\'' + itemType + '\')"><i class="fa fa-trash"></i> Reset</button>')
            }
        })
    }


    function resetItems(itemType) {
        let resetId = $('#' + itemType + '-reset')
        switch (itemType) {
            case 'casualty':
                casualtyCount = 0
                break;
            case 'assets':
                assetsCount = 0
                break;

            case 'witness':
                witnessCount = 0
                break;
            case 'casualtyMotorClaim':
                casualtyMotorClaimCount = 0
                break;
            case 'witnessMotorClaim':
                witnessMotorClaimCount = 0
                break;
            case 'vehicle':
                witnessCount = 0
                break;
        }

        $('#' + itemType).html('')
        resetId.remove()
    }

    function removeItem(itemId, classCheck) {
        console.log(itemId, classCheck)
        let $reset = $('#' + classCheck + '-reset')
        $('#' + itemId).remove()
        if ($('.' + classCheck).length > 0) {

        } else {
            $reset.remove()
        }
        console.log($('#' + classCheck).length)
    }

    $(function() {
        initDateInputs();
        initColorPicker();

        $(".usage").change(function() {
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



    // I'm experimenting on this



    function appear(input, formval, itemType, count) {
        $id = $("#" + input)
        
        count = 1
        
        
        
        if ($id.val() == formval) {
            addItem(itemType);
            
            

        } else {
            $('#' + id).val('')
        }

    }
</script>
</body>

</html>