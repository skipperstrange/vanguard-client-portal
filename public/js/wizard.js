$(function() {
    try {
        var $validator = $("#fire-wizard").validate({
            rules: {
                policy_id: {
                    required: true
                },
                messages: {
                    policy_id: {
                        required: "Please enter a policy id to continue"
                    },
                }
            }
        });


        $("#fire-wizard").steps({
            headerTag: "h4",
            bodyTag: "section",
            transitionEffect: "fade",
            enableAllSteps: true,
            transitionEffectSpeed: 500,
            onNext: function(tab, navigation, index) {
                var $valid = $("#fire-wizard").valid();
                if (!$valid) {
                    $validator.focusInvalid();
                    return false;
                }
            },
            'onTabClick': function(tab, navigation, index) {
                var $valid = $("#fire-wizard").valid();
                if (!$valid) {
                    $validator.focusInvalid();
                    return false;
                }
            },
            onStepChanging: function(event, currentIndex, newIndex) {

                if (newIndex === 1) {
                    $('.steps ul').addClass('step-2');
                } else {
                    $('.steps ul').removeClass('step-2');
                }
                if (newIndex === 2) {
                    $('.steps ul').addClass('step-3');
                } else {
                    $('.steps ul').removeClass('step-3');
                }

                if (newIndex === 3) {
                    $('.steps ul').addClass('step-4');
                    //  $('.actions ul').addClass('step-last');
                } else {
                    $('.steps ul').removeClass('step-4');
                    //  $('.actions ul').removeClass('step-last');
                }

                if (newIndex === 4) {
                    $('.steps ul').addClass('step-5');
                    // $('.actions ul').addClass('step-last');
                } else {
                    $('.steps ul').removeClass('step-5');
                    // $('.actions ul').removeClass('step-last');
                }
                if (newIndex === 5) {
                    $('.steps ul').addClass('step-6');
                    // $('.actions ul').addClass('step-last');
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
        $("#fire-wizard").steps('next');
    })
    $('.backward').click(function() {
            $("#fire-wizard").steps('previous');
        })
        // Checkbox
    $('.checkbox-circle label').click(function() {
        $('.checkbox-circle label').removeClass('active');
        $(this).addClass('active');
    })
})