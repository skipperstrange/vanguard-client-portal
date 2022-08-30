    <footer class="section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 brand">
                    <!--h4 class="my-0 site-logo"><a href="<?= WEB_URL ?>"><img src="<?=IMAGES_URL ?>cropped-Vanguard-logo-02-300x81.png" alt="" /></a></h4-->
                    <span class="slogan" style="font-style: italic;"> <?= SLOGAN ?></span>
                </div>
                <div class="col-md-5 brand">
                    <!-div class="social-media-links">
                        <a href="<?= TWITTER ?>" target="_blank" class="p-3 m-0"><span class="icon-twitter"></span></a>
                        <a href="<?= FACEBOOK ?>" target="_blank" class="p-3 m-0"><span class="icon-facebook"></span></a>
                        <a href="<?= LINKEDIN ?>" target="_blank" class="p-3 m-0"><span class="icon-linkedin"></span></a>
                        <a href="<?= INSTAGRAM ?>" target="_blank" class="p-3 m-0"><span class="icon-instagram"></span></a>
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
    <?php require_once SHARED.'_modal.php'; ?>

<script src="<?= JS_PATH ?>main.js"></script>

<script src="<?= JS_PATH ?>helperfunctions.js"></script>

<script>
    //item type can be one of these
    function addItem(itemType) {
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

            case 'casualty_damage':
                casualtyMotorClaimCount++
                count = casualtyMotorClaimCount
                break;
            case 'witness':
                witnessCount++
                count = witnessCount
                break;

            case 'witness_motor_claim':
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
               bodyColor.colorpicker();
            }
            if ($('#' + resetId).length) {

            } else {
                $('#' + itemType + '-control').append('<button type="button" id="' + resetId + '" class="btn btn-sm action-call  btn-warning" onclick="resetItems(\'' + itemType + '\')"><i class="fa fa-trash"></i> Reset</button>')
            }
        })
    }

    function print(divId){
        div = divId
        $(div).print({
            //Use Global styles
            globalStyles : false,
            //Add link with attrbute media=print
            mediaPrint : true,
            //Custom stylesheet
            //stylesheet : "http://fonts.googleapis.com/css?family=Inconsolata",
            stylesheet: ["<?= CSS_PATH?>style.css","<?= CSS_PATH ?>bootstrap.min.css"],
            //Print in a hidden iframe
            iframe : false,
            //Don't print this
            noPrintSelector : ".not-this",
            //title
            title:"<?= CLIENT_NAME?>",
            //Add this at top
            append : "<p><?= SUPPORT_CONTACT_1?> | <?= SUPPORT_EMAIL ?></p>",
            //Add this on bottom
            //prepend : "<span></span>",
            //Log to console when printing is done via a deffered callback
            deferred: $.Deferred().done(function() { console.log('Printing done', arguments); })
        });
    }

    $(()=>{
        initDateInputs();
        initColorPicker();
;    })
</script>

</body>

</html>