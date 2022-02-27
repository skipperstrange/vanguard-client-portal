        <div class="row not-this">
           <div class="col-lg-6 col-md-6 col-sm-6 offset-sm-6  offset-md-6  offset-lg-6"> 
            <span class="float-right mute">
            <a href="#" onclick="print('<?= $printDivId ?>', '<?= $printTitle ?>')" class="p-3 m-0">Save to device <span class="icon-print"></span></a>
            <!--a href="#" onclick="download('<?= $printDivId ?>')" class="p-3 m-0"><span class="icon-download"></span></a-->
            </span>
         </div>
        </div>

        <script src="<?= JS_PATH ?>jQuery.print.min.js"></script>
        <script>
          function print(divId){
            div = '#'+divId
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
                        prepend : "<p><?= SUPPORT_CONTACT_1?> | <?= SUPPORT_EMAIL ?></p>",
                        //Add this on bottom
                        //append : "<span></span>",
                        //Log to console when printing is done via a deffered callback
                        deferred: $.Deferred().done(function() { console.log('Printing done', arguments); })
                    });
          }
        </script>