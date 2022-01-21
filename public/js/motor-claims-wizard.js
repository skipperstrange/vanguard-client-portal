$(function() {
    var summaryUrl = "?controller=motor-claim-summary"
    var serverUrl = ""
    var motorForm = $("#motor-claim-form")
    var motorWizard = $("#motor-claims-wizard")
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
              //  motorForm.validate().settings.ignore = ":disabled,:hidden";
                //console.log(motorForm.validate());

                if (newIndex === 1) {
                    // if (motorForm.valid()) {
                    //     if ($('#policy_id').val() == 'P-1001-201-2020-0005099') {
                    //         $('.steps ul').addClass('motor-claim-step-2');
                    //     } else {
                    //         alert('Policy does ot exist')
                    //         return false
                    //     }
                    // } else {
                    //     $('.steps ul').removeClass('motor-claim-step-2');
                    //     return false
                    // }
                } else {
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
                    if (motorForm.valid()) {
                        $('.steps ul').addClass('motor-claim-step-4');
                        //  $('.actions ul').addClass('motor-step-last');
                    } else {
                        return false
                    }
                } else {
                    $('.steps ul').removeClass('motor-claim-step-4');
                    //  $('.actions ul').removeClass('motor-step-last');
                }

                if (newIndex === 4) {
                    if (motorForm.valid()) {
                        $('.steps ul').addClass('motor-claim-step-5');
                        
                        // $('.actions ul').addClass('motor-step-last');
                    } else {
                        return false
                    }
                } else {
                    $('.steps ul').removeClass('motor-claim-step-5');
                    // $('.actions ul').removeClass('motor-step-last');

                    
                } 

                if (newIndex === 5) {
                    if (motorForm.valid()) {
                        $('.steps ul').addClass('motor-claim-step-6');
                        try {
                            $.post(summaryUrl, motorForm.serialize()).then(resp => {
                                $('#summary').html('')
                                $('#summary').append(resp)
                            })
                            console.log(motorForm.serialize())
                        } catch (err) {
                            console.log(err)
                        }

                        // $('.actions ul').addClass('motor-step-last');
                    } else {
                        return false
                    }
                } else {
                    $('.steps ul').removeClass('motor-claim-step-6');
                    // $('.actions ul').removeClass('motor-step-last');
                }
                return true;
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