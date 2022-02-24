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
                    $('#agreeDeclare').prop('checked', false)
                    if (motorForm.valid()) {
                        $('.steps ul').addClass('motor-policy-step-5');
                        try {
                            showOverlay()
                            $.post(apiUrls.motorProposalSummaryUrl, motorForm.serialize(), resp => {
                                $('#summary').html('')
                                $('#summary').append(resp)
                                hideOverlay()
                            })
                            hideOverlay()
                        } catch (err) {
                            console.log(err)
                            hideOverlay()
                        }

                        // $('.actions ul').addClass('motor-step-last');
                    } else {
                        return false
                    }
                } else {
                    $('.steps ul').removeClass('motor-policy-step-5');
                    // $('.actions ul').removeClass('motor-step-last');
                }

                if (newIndex === 6) {
                    $('span#signed').html('')
                    $('span#signed').append($('#fullname').val())
                    if (motorForm.valid()) {
                        $('.steps ul').addClass('motor-policy-step-6');
                        // $('.actions ul').addClass('motor-step-last');
                    } else {
                        return false
                    }
                } else {
                    $('.steps ul').removeClass('motor-policy-step-6');
                    // $('.actions ul').removeClass('motor-step-last');
                }
                return true;
            },
            onFinishing: function (event, currentIndex){
                console.log("finishing on frame+currentIndex");
            },
            onFinishing: function(event, currentIndex, newIndex){
                showOverlay()
                
                $.get('?controller=motor_policy_declaration', data=>{
                    
                    bootbox.confirm({
                        size: "large",
                        className: '',
                        title: "Declaration",
                        message: data,
                        buttons: {
                            cancel: {
                                label: '<i class="fa fa-times"></i> Cancel'
                            },
                            confirm: {
                                label: '<i class="fa fa-check"></i> Accept'
                            }
                        },
                        callback: function (result) {
                            if(result == true){
                                setTimeout(()=>{
                                    
                                        try{
                                    showOverlay()
                                        $.post('?controller=process-motor-policy', motorForm.serialize()+'&agreeDeclare=agree',data=>{
                                            //edited below line to produce error. edit: url
                                        axios.post(apiUrls.applicationServerUrl+'portal/add-motorpolicy/',  data.message)
                                            .then(data=>{
                                                hideOverlay()
                                                console.log(data)
                                                bootbox.alert({
                                                        title: '<i class="fa fa-check" style="#f35b35"></i> Submitted',
                                                        message: " <p> Thank You for submitting. Our agents will call you shortly to proceed with the process.</p>.",
                                                        })
                                                        
                                                        hideOverlay()
                                                    })
                                            .catch(e=>{
                                                defaultErrorModal()
                                                hideOverlay()
                                                })
                                        })
                                        .fail((e)=>{
                                            defaultErrorModal()
                                                hideOverlay()
                                        })
                                    }
                                    catch(e){
                                        defaultErrorModal()
                                        hideOverlay()
                                    }
                                    

                                }, 1000)
                            }

                            if(result == false){
                                console.log(result);
                                hideOverlay()
                            }
                            
                        }
                    });

                    $('.bootbox-accept').prop('disabled', true)
                });
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