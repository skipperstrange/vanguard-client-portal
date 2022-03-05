<?php
$scripts['print_function'] = "
//Found in javascriptfunctions php file.               
function print(divId){
    div = '#'+divId
    $(div).print({
                //Use Global styles
                globalStyles : false,
                //Add link with attrbute media=print
                mediaPrint : true,
                //Custom stylesheet
                //stylesheet : 'http://fonts.googleapis.com/css?family=Inconsolata',
                stylesheet: ['". CSS_PATH."style.css','".CSS_PATH."bootstrap.min.css'],
                //Print in a hidden iframe
                iframe : false,
                //Don't print this
                noPrintSelector : '.not-this',
                //title
                title:'". CLIENT_NAME."',
                //Add this at top
                prepend : '<p>". SUPPORT_CONTACT_1 ." | ".SUPPORT_EMAIL ."</p>',
                //Add this on bottom
                //append : '<span></span>',
                //Log to console when printing is done via a deffered callback
                deferred: $.Deferred().done(function() { console.log('Printing done', arguments); })
            });
  }

  ";
