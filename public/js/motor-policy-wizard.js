$(function() {
    var motorForm = $("#motor-policy-form")
    var motorWizard = $("#motor-policy-wizard")
    try {
        motorForm.validate({
            errorPlacement: function errorPlacement(error, element) { element.after(error); },

        });


        motorWizard.steps({
            headerTag: "h4",
            bodyTag: "section",
            transitionEffect: "fade",
            enableAllSteps: true,
            transitionEffectSpeed: 500,

            onStepChanging: function(event, currentIndex, newIndex) {
                motorForm.validate().settings.ignore = ":disabled,:hidden";
                console.log(currentIndex, newIndex);

                if (newIndex === 1) {
                    if (motorForm.valid()) {
                        $('.steps ul').addClass('motor-policy-step-1');

                    } else {
                        $('.steps ul').removeClass('motor-policy-step-1');
                        return false
                    }
                }

                if (newIndex === 2) {
                    if (motorForm.valid()) {
                        $('.steps ul').addClass('motor-policy-step-2');
                    } else {
                        return false
                    }
                } else {
                    $('.steps ul').removeClass('motor-policy-step-2');
                }

                if (newIndex === 3) {
                    if (motorForm.valid()) {
                        $('.steps ul').addClass('motor-policy-step-3');
                        //  $('.actions ul').addClass('motor-policy-step-last');
                    } else {
                        return false
                    }
                } else {
                    $('.steps ul').removeClass('motor-policy-step-3');
                    //  $('.actions ul').removeClass('motor-step-last');
                }

                if (newIndex === 4) {
                    if (motorForm.valid()) {
                        $('.steps ul').addClass('motor-policy-step-4');
                        // $('.actions ul').addClass('motor-step-last');
                    } else {
                        return false
                    }
                } else {
                    $('.steps ul').removeClass('motor-policy-step-4');
                    // $('.actions ul').removeClass('motor-step-last');
                }

                if (newIndex === 5) {
                    if (motorForm.valid()) {
                        $('.steps ul').addClass('motor-policy-step-5');
                        try {
                            $.post(apiUrls.motorProposalSummaryUrl, motorForm.serialize()).then(resp => {
                                $('#summary').html('')
                                $('#summary').append(resp)
                            })
                           
                        } catch (err) {
                            console.log(err)
                        }

                        // $('.actions ul').addClass('motor-step-last');
                    } else {
                        return false
                    }
                } else {
                    $('.steps ul').removeClass('motor-policy-step-5');
                    // $('.actions ul').removeClass('motor-step-last');
                }
                return true;
            },
            onFinishing: function(event, currentIndex, newIndex){
                console.log(event, currentIndex, newIndex)
                
                axios.post(apiUrls.applicationServerUrl+'portal/add-motorpolicy',  motorForm.serialize())
                .then(data=>{
                    console.log(data)
                })
                .catch(e=>{
                    console.log(e)
                })
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
    $('#motor-policy-wizard > .steps li a').click(function() {
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