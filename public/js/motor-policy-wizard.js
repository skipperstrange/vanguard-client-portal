
$(function() {
    var motorForm = $("#motor-policy-form")
    var motorWizard = $("#motor-policy-wizard")
    var finishButton = motorWizard.find('a[href="#finish"]');
    $summaryDeclaration = $("#summary-declaration")                     
    var restartUrl = window.location.origin+window.location.pathname


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
                showOverlay();
                motorForm.validate().settings.ignore = ":disabled,:hidden";
                if (currentIndex > newIndex) {
                    return true;
                }
                
                if (newIndex === 0) {
                    hideOverlay()
                }

                if (newIndex === 1) {
                    hideOverlay()
                    if (motorForm.valid()) {
                        $('.steps ul').addClass('motor-policy-step-1');
                    } else {
                        $('.steps ul').removeClass('motor-policy-step-1');
                        return false
                    }
                }

                if (newIndex === 2) {
                    hideOverlay()
                    if (motorForm.valid()) {
                        $('.steps ul').addClass('motor-policy-step-2');
                    } else {
                        return false
                    }
                } else {
                    $('.steps ul').removeClass('motor-policy-step-2');
                }

                if (newIndex === 3) {
                    hideOverlay()
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
                    hideOverlay()
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
                    $('#finished').click((e)=>{
                        showOverlay()
                        e.preventDefault();
                        setTimeout((e)=>{
                            hideOverlay()
                            window.location.replace($(location).attr('href'))
                        }, 1500)
                    })
                    
                    hideOverlay()
                    $('#agreeDeclare').prop('checked', false)
                    if (motorForm.valid()) {
                        $('.steps ul').addClass('motor-policy-step-5');
                        try {
                            showOverlay()
                            $.post(apiUrls.motorProposalSummaryUrl, motorForm.serialize(), resp => {
                                changeContent('summary', resp)
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
                    hideOverlay()
                    
                    if (motorForm.valid()) {
                        $('.steps ul').addClass('motor-policy-step-6');
                        // $('.actions ul').addClass('motor-step-last');
                    } else {
                      //  return false
                    }
                } else {
                    $('.steps ul').removeClass('motor-policy-step-6');
                    // $('.actions ul').removeClass('motor-step-last');
                }
                return true;
            },
            
            onFinishing: function(event, currentIndex, newIndex){
                showOverlay()
                $.get('?controller=_declaration', {declaration: "motor-policy"}, data=>{
                    bootbox.confirm({
                        size: "large",
                        className: '',
                        title: "Declaration <i class='fa fa-spin fa-spinner'></i> ",
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
                                $ack = $('#dec').html()
                                setTimeout(()=>{
                                        try{
                                        showOverlay()
                                        $.post(apiUrls.motorProposalProcessUrl, motorForm.serialize()+'&agreeDeclare=agree',data=>{

                                        axios.post(apiUrls.applicationServerUrl+'portal/add-motor-policy/',  data.message)
                                            .then(data=>{
                                               
                                                changeContent('summary-declaration', '<strong style="text-transform: uppercase;">Declaration</strong><br />'+$ack)
                                               
                                                $print = createPrintButton('section.current','Motor Policy Summary', 'Save to device')
                                                $("#print").append($print) 
                                                
                                                hideOverlay()
                                                    bootbox.dialog({
                                                        title: '<i class="fa fa-check" style="#f35b35"></i> Submitted',
                                                        message: " <p> Thank you for submitting. Our agents will call you shortly to proceed with the process.</p>.",
                                                        buttons: {
                                                            cancel: {
                                                                label: "Return to summary",
                                                                className: 'btn-info',
                                                                callback: function(){
                                                                    $(document).find("div.actions ul").children().last().css('float', 'right');
                                                                    $(document).find("div.actions ul").children().last().remove();
                                                                    var saveA = $("<a>").attr("href","#").attr("id","finished").attr("onclick","redirectTo(window.location.origin+window.location.pathname)").addClass("saveBtn").text("Finish");
                                                                    var saveBtn = $("<li>").attr("aria-disabled",false).append(saveA);

                                                                    $(document).find("div.actions ul").append(saveBtn)
                                                                }
                                                            },
                                                            
                                                            ok: {
                                                                label: "Finish",
                                                                className: 'btn-success',
                                                                callback: function(){
                                                                    showOverlay()
                                                                    setTimeout(()=>{
                                                                        redirectTo(window.location.replace($(location).attr('href')))
                                                                    }, 1000)
                                                                }
                                                            }
                                                        }
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
            onStepChanged: function(event, currentIndex, newIndex) {
                hideOverlay()
            },
            onFinished: function(e, currentIndex) {
               
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

    $('.motor_cover_type').on('change', function(){
        if($(this).val() == 'TP'){
            $('#vehicle_value')
            $('#vehicle_value').prop('disabled', true)
        }else{
            $('#vehicle_value').prop('disabled', false)
        }
    })
})

