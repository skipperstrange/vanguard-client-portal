$(function() {
    var summaryUrl = "?controller=motor-claim-summary"
    var motorForm = $("#motor-claim-form")
    var motorWizard = $("#motor-claims-wizard")
    var policy_owner = {}
    try {
        motorForm.validate({
            errorPlacement: function errorPlacement(error, element) { element.after(error); },
            rules: {
                policy_id: "required"
            },
            messages: {
                policy_id: "Please provide a policy id to proceed"
            }
        });

        motorWizard.steps({
            headerTag: "h4",
            bodyTag: "section",
            transitionEffect: "fade",
            enableAllSteps: true,
            transitionEffectSpeed: 500,

            onStepChanging: function(event, currentIndex, newIndex) {
                showOverlay()
              //  motorForm.validate().settings.ignore = ":disabled,:hidden";
                //console.log(motorForm.validate());
                console.log( currentIndex, newIndex)
                if (currentIndex === 0) {
                    search_by = $("#search_by").val()
                    query = $("#policy_id").val()
                   //if (motorForm.valid()) {
                        axios.post(apiUrls.applicationServerUrl+'vanguard/searchpolicy/',  {search_by: search_by, query: query})
                        .then(response=>{
                            policy_owner = response.data
                            $.post('?controller=motor-claim-owner-details',  policy_owner, response=>{
                                changeContent('confirm-details', response )
                            })                        
                        })
                        .catch(e=>{
                                bootbox.alert({
                                title: '<i class="fa fa-close" style="#f35b35"></i> Record not found',
                                message: " <p> The policy you are looking for does not exist. Please try again. </p>.",
                                    })
                                    changeContent('confirm-details', '' )
                                    hideOverlay()
                                return false
                        })
                        
                            
                 /*   }
                    else{
                        hideOverlay()
                        return false
                    } */
                }
                if (newIndex === 1) {
                     if (motorForm.valid()) {
                        $('.steps ul').addClass('motor-claim-step-2');
                    } else {
                        return false
                    }
                }
                else {
                    $('.steps ul').removeClass('motor-claim-step-2');
                }

                if (newIndex === 2) {
                   if (motorForm.valid()) {
                    $('.steps ul').addClass('motor-claim-step-3');
                    } else {
                        return false
                    }
                } else {
                    $('.steps ul').removeClass('motor-claim-step-3');
                }

                if (newIndex === 3) {
                   // if (motorForm.valid()) {
                        $('.steps ul').addClass('motor-claim-step-4');
                    //} else {
                      //  return false
                    //}
                } else {
                    $('.steps ul').removeClass('motor-claim-step-4');
                }

                if (newIndex === 4) {
                  //  if (motorForm.valid()) {
                        $('.steps ul').addClass('motor-claim-step-5');
                        //  $('.actions ul').addClass('motor-step-last');
                  //  } else {
                      //  return false
                //    }
                } else {
                    $('.steps ul').removeClass('motor-claim-step-5');
                    //  $('.actions ul').removeClass('motor-step-last');
                }

                if (newIndex === 5) {
                   // if (motorForm.valid()) {
                        $('.steps ul').addClass('motor-claim-step-6');
                        
                        // $('.actions ul').addClass('motor-step-last');
                   // } else {
                     //   return false
                   // }
                } else {
                    $('.steps ul').removeClass('motor-claim-step-6');
                    // $('.actions ul').removeClass('motor-step-last');

                    
                } 

                if (newIndex === 6) {
                   // if (motorForm.valid()) {
                        $('.steps ul').addClass('motor-claim-step-7');
                        try {
                            claim = {};
                            $.each(motorForm.serializeArray(), function(i, field) {
                            claim[field.name] = field.value;
                            });
                            console.log(claim, policy_owner)
                            $.post(summaryUrl, {claim:claim, policy: policy_owner}).then(resp => {
                                $('#summary').html('')
                                $('#summary').append(resp)
                            })
                        } catch (err) {
                            console.log(err)
                        }

                         $('.actions ul').addClass('motor-step-last');
                   // } else {
                     //   return false
                    //}
                } else {
                    $('.steps ul').removeClass('motor-claim-step-7');
                    // $('.actions ul').removeClass('motor-step-last');
                }
                return true;
            },
            onStepChanged: function(event, currentIndex, newIndex) {
                hideOverlay()
            },
            labels: {
                finish: "Submit",
                next: "Next",
                previous: "Back",
            }
        });
    } catch (e) {
        console.log(e)
    }


    // Custom Steps Jquery Steps
    $('#motor-claims-wizard > .steps li a').click(function() {
        $(this).parent().addClass('checked');
        $(this).parent().prevAll().addClass('checked');
        $(this).parent().nextAll().removeClass('checked');
    });
    // Custom Button Jquery Steps
    $('.forward').click(function() {
        if (motorForm.valid()) {
            motorForm.steps('next');
        }
    })
    $('.backward').click(function() {
            motorForm.steps('previous');
        })
        // Checkbox
    $('.checkbox-circle label').click(function() {
        $('.checkbox-circle label').removeClass('active');
        $(this).addClass('active');
    })
})