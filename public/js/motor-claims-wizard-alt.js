$(function() {
    var motorForm = $("#motor-claim-form")
    var motorWizard = $("#motor-claims-wizard-alt")
    var policy_owner = null
    var is_async_step;

    var formUploadedValid = false


    try {
        motorForm.validate({
            errorPlacement: function errorPlacement(error, element) { element.after(error); },
            rules: {
                policy_id: "required"
            },
            messages: {
                policy_id: "Please provide a policy id or vehicle registration to proceed"
            }
        });

        errorMsg = "Check the highlighted fields and try again"
        errorTitle = "Please check errors"

        motorWizard.steps({
            headerTag: "h4",
            bodyTag: "section",
            saveState: true,
            transitionEffect: "fade",
            enableAllSteps: true,
            transitionEffectSpeed: 500,
            onStepChanging: function(event, currentIndex, newIndex) {
              //  showOverlay()
                motorForm.validate().settings.ignore = ":disabled,:hidden";
                //console.log(motorForm.validate());
                if (currentIndex > newIndex) {
                    return true;
                }
                
               
                console.log( currentIndex, newIndex)
                console.log()
                if (currentIndex === 0) {
                    policy_owner = null
                    search_by = $("#search_by").val()
                    query = $("#policy_id").val()
                    is_async_step = false
                   if (motorForm.valid()) {
                    axios.post(apiUrls.applicationServerUrl+'vanguard/searchpolicy',  {search_by: search_by, query: query})
                        .then(response=>{
                            policy_owner = response.data
                            is_async_step = true
                            changeContent('confirm-details', '')
                                $('.steps ul').addClass('motor-claim-alt-step-2');
                                $.post('?controller=motor-claim-owner-details',  policy_owner, response=>{
                                   
                                    changeContent('confirm-details', '<h4>Please confirm details before you proceed.</h4>'+response )
                                    hideOverlay()
                                })  
                            
                        })
                        .catch(e=>{
                            changeContent('confirm-details', '<h4>You may not be able to continue.</h4>' )
                            $('.steps ul').removeClass('motor-claim-alt-step-2');
                                bootbox.alert({
                                title: '<i class="fa fa-close" style="#f35b35"></i> Record not found',
                                message: " <p>The policy you are looking for does not exist or your policy has expired. Please try again. <br />If problem persists, please contact customer care</p>",
                                })
                            hideOverlay()
                        })
                    }
                    else{
                        hideOverlay()
                        defaultErrorModal(errorTitle, errorMsg)
                        return false
                    }
                }
                if (newIndex === 1) {
                    $('.steps ul').addClass('motor-claim-alt-step-1');
                     if (motorForm.valid()) {
                        
                    } else {
                        hideOverlay()
                        defaultErrorModal(errorTitle, errorMsg)
                        return false
                    }
                }
                else {
                    $('.steps ul').removeClass('motor-claim-alt-step-1');
                    hideOverlay()
                }
/*
                if (newIndex === 2) {
                   if (motorForm.valid()) {
                    $('.steps ul').addClass('motor-claim-alt-step-3');
                    
                    } else {
                        hideOverlay()
                        defaultErrorModal(errorTitle, errorMsg)
                        return false
                    }
                } else {
                    $('.steps ul').removeClass('motor-claim-alt-step-3');
                }
*/
                if (newIndex === 2) {
                    if (motorForm.valid()) {
                        $('.steps ul').addClass('motor-claim-alt-step-2');
                        try {
                            claim = motorForm.serializeArray()
                            $.post(apiUrls.motorClaimSummaryUrl, {policy:policy_owner, mode: 'by_upload'}, resp => {
                                $('#summary').html('')
                                $('#summary').append(resp)
                                $.post(apiUrls.motorClaimSummaryUrl, motorForm.serialize(), resp => {
                                    $('#summary').append(resp)
                                })
                                .fail(e=>{
                                    
                                })
                            })
                        } catch (err) {
                            console.log(err)
                        }

                         $('.actions ul').addClass('motor-step-last');
                    } else {
                        hideOverlay()
                        defaultErrorModal(errorTitle, errorMsg)
                        return false
                    }
                } else {
                    $('.steps ul').removeClass('motor-claim-alt-step-2');
                    // $('.actions ul').removeClass('motor-step-last');
                }
                return true;
            },

            onFinishing: function(event, currentIndex, newIndex){
                showOverlay()
                $.get('?controller=_declaration', {declaration: "motor-claim"},data=>{
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
                                if(policy_owner === null){
                                   
                                   defaultErrorModal(title = " Something went wrong !!",msg = 'There is no Policy attached to clyour claim. Please try again.')

                                }
                                else{
                                    $ack = $('#dec').html()
                                    setTimeout(()=>{
                                            try{
                                               
                                            showOverlay()
                                            $.post('?controller=process-motor-claim', motorForm.serialize()+'&agreeDeclare=agree',data=>{
                                                axios.post(apiUrls.applicationServerUrl+'portal/add-motor-claim',  data.message)
                                                .then(data=>{
                                                    
                                                    changeContent('summary-declaration', '<strong style="text-transform: uppercase;">Declaration</strong><br />'+$ack)
                                                
                                                    $print = createPrintButton('section.current','Motor Claim Summary', 'Save')
                                                    $("#print").append($print) 
                                                    
                                                    hideOverlay()
                                                        bootbox.dialog({
                                                            title: '<i class="fa fa-check" style="#f35b35"></i> Submitted',
                                                            message: " <p> Thank you for submitting. Our agents will contact you shortly.</p>.",
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
                                                                          hideOverlay()
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
                            }

                            if(result == false){
                                
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

    $('.steps ul').addClass('step-1');
    $('#consent-choices').hide(0)
    $('#tpdriver').hide(0)
    $("#loan_or_hire_").hide(0)
    //disableRequiredFields()

})
