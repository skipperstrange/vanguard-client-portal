    <footer class="section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 brand">
                    <h4 class="my-0 site-logo"><a href="index.html"><img src="<?=IMAGES_URL ?>cropped-Vanguard-logo-02-300x81.png" alt="" /></a></h4>
                    <span class="slogan"> <?= SLOGAN ?></span>
                </div>
                <div class="col-md-5 brand">
                    <!-div class="social-media-links">
                        <a href="<?= TWITTER ?>" class="p-3 m-0"><span class="icon-twitter"></span></a>
                        <a href="<?= FACEBOOK ?>" class="p-3 m-0"><span class="icon-facebook"></span></a>
                        <a href="<?= LINKEDIN ?>" class="p-3 m-0"><span class="icon-linkedin"></span></a>
                        <a href="<?= INSTAGRAM ?>" class="p-3 m-0"><span class="icon-instagram"></span></a>
                    </!-div>
                </div>

                <div class="col-md-4">
                    <div class="copy">
                        © 2020 All Rights Reserved Terms of Use and Privacy Policy
                    </div>
                </div>
            </div>
        </div>
    </footer>

<script src="<?= JS_PATH ?>main.js"></script>

<script src="<?= JS_PATH ?>helperfunctions.js"></script>

<script>
    function initDateInputs() {
        dp = $('.date')
        yp = $('.date-year')
        dp.datetimepicker({
            "allowInputToggle": true,
            "showClose": true,
            "showClear": true,
            "showTodayButton": true,
            "format": "DD-MM-YYYY",
            //"viewMode": 'years',
            "maxDate": '01-01-2004',

        });

        yp.datetimepicker({
            "allowInputToggle": true,
            "showClose": true,
            "showClear": true,
            "showTodayButton": true,
            "format": "YYYY",
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


    //item type can be one of these
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

            case 'policeDetails':
                policeDetailsCount = 0
                break;
        }
        $('#' + itemType).html('')
        resetId.remove()
    }

    function removeItem(itemId, classCheck) {
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

          yp.on("dp.change", function (e) {
        //$('.date-duration-expire').data("DateTimePicker").minDate(e.date);
        $("#reg-input").removeAttr("disabled");
        $("#registration").datetimepicker({minDate: e.date, format: "YYYY", setValue: e.date});
    });
    });

    function toggleDataTable(tableId){
        console.log($('#'+tableId))
        tableData = $('#'+tableId);
        dataControl = $('#'+tableId+'_data_control')
        tableData.toggle(300, ()=>{
            if ( tableData.is(":visible") ) {
                dataControl.removeClass('icon-chevron-circle-down')
                dataControl.addClass('icon-chevron-circle-up')
            } else if ( tableData.is(":hidden") ) {
                dataControl.removeClass('icon-chevron-circle-up')
                dataControl.addClass('icon-chevron-circle-down')
            }
        })
   }

   //Similar to addItem function only it also checks for a value in input befor running. It renders only once
    function appear(inputId, formval, itemType, count=null) {
        $id = $("#" + inputId)
        if ($id.val() == formval) {
            url = '<?= _link('add-item&itemType=')?>'+itemType+'&count='+count
            content = $.post(url, function(data){
                $('#' + itemType+'_'+count).append(data)
            })
        }else{
            $('#' + itemType+'_'+count).html('')
        }
    }
</script>

</body>

</html>