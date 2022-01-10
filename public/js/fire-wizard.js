$(function() {

    var summaryUrl = "?controller=fire-summary"
    var serverUrl = ""
    var fireForm = $("#fire-form")
    var fireWizard = $("#fire-wizard")
    try {
        fireForm.validate({
            errorPlacement: function errorPlacement(error, element) { element.after(error); },
            rules: {
                policy_id: "required"
            },
            messages: {
                policy_id: "Please provide a policy id to proceed"
            }
        });


        fireWizard.steps({
            headerTag: "h4",
            bodyTag: "section",
            transitionEffect: "fade",
            enableAllSteps: true,
            transitionEffectSpeed: 500,

            onStepChanging: function(event, currentIndex, newIndex) {
                fireForm.validate().settings.ignore = ":disabled,:hidden";
                //console.log(fireForm.validate());


                if (newIndex === 1) {
                    if (fireForm.valid()) {
                        if ($('#policy_id').val() == 'P-1001-201-2020-0005099') {
                            $('.steps ul').addClass('step-2');
                        } else {
                            alert('Policy does ot exist')
                            return false
                        }
                    } else {
                        $('.steps ul').removeClass('step-2');
                        return false
                    }
                } else {
                    $('.steps ul').removeClass('step-2');
                }
                if (newIndex === 2) {
                    if (fireForm.valid()) {
                        $('.steps ul').addClass('step-3');
                    } else {
                        return false
                    }
                } else {
                    $('.steps ul').removeClass('step-3');
                }

                if (newIndex === 3) {
                    if (fireForm.valid()) {
                        $('.steps ul').addClass('step-4');
                        //  $('.actions ul').addClass('step-last');
                    } else {
                        return false
                    }
                } else {
                    $('.steps ul').removeClass('step-4');
                    //  $('.actions ul').removeClass('step-last');
                }

                if (newIndex === 4) {
                    if (fireForm.valid()) {
                        $('.steps ul').addClass('step-5');
                        // $('.actions ul').addClass('step-last');
                    } else {
                        return false
                    }
                } else {
                    $('.steps ul').removeClass('step-5');
                    // $('.actions ul').removeClass('step-last');
                }

                if (newIndex === 5) {
                    if (fireForm.valid()) {
                        $('.steps ul').addClass('step-6');
                        try {
                            $.post(summaryUrl, fireForm.serialize()).then(resp => {
                                $('#summary').html('')
                                $('#summary').append(resp)
                            })
                            console.log(fireForm.serialize())
                        } catch (err) {
                            console.log(err)
                        }

                        // $('.actions ul').addClass('step-last');
                    } else {
                        return false
                    }
                } else {
                    $('.steps ul').removeClass('step-6');
                    // $('.actions ul').removeClass('step-last');
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
    $('#fire-wizard > .steps li a').click(function() {
        $(this).parent().addClass('checked');
        $(this).parent().prevAll().addClass('checked');
        $(this).parent().nextAll().removeClass('checked');
    });
    // Custom Button Jquery Steps
    $('.forward').click(function() {
        if (fireForm.valid()) {
            fireForm.steps('next');
        }
    })
    $('.backward').click(function() {
            fireForm.steps('previous');
        })
        // Checkbox
    $('.checkbox-circle label').click(function() {
        $('.checkbox-circle label').removeClass('active');
        $(this).addClass('active');
    })
})