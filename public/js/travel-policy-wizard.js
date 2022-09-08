
$(function() {
    var travelForm = $("#travel-policy-form")
    var travelWizard = $("#travel-policy-wizard")
    var finishButton = travelWizard.find('a[href="#finish"]');
    $summaryDeclaration = $("#summary-declaration")                     
    var restartUrl = window.location.origin+window.location.pathname

    try {
        travelForm.validate({
            errorPlacement: function errorPlacement(error, element) { element.after(error); },

        });


        travelWizard.steps({
            headerTag: "h4",
            bodyTag: "section",
            transitionEffect: "fade",
            enableAllSteps: true,
            transitionEffectSpeed: 500,
            onStepChanging: function(event, currentIndex, newIndex) {
                console.log(currentIndex,newIndex)
                showOverlay();
                travelForm.validate().settings.ignore = ":disabled,:hidden";
               // if (currentIndex > newIndex) {
                    return true;
            //    }
                
                if (newIndex === 0) {
                    hideOverlay()
                }

                if (newIndex === 1) {
                    hideOverlay()
                    //if (travelForm.valid()) {
                        $('.steps ul').addClass('travel-policy-step-2');
                   // } else {
                   //     $('.steps ul').removeClass('travel-policy-step-2');
                    //    return false
                   // }
                }

                if (newIndex === 2) {
                    hideOverlay()
                    if (travelForm.valid()) {
                        $('.steps ul').addClass('travel-policy-step-3');
                    } else {
                        $('.steps ul').removeClass('travel-policy-step-3');
                        return false
                    }
                }

                if (newIndex === 3) {
                    hideOverlay()
                    if (travelForm.valid()) {
                        $('.steps ul').addClass('travel-policy-step-4');
                    } else {
                        $('.steps ul').removeClass('travel-policy-step-4');
                        return false
                    }
                }
            },
            onFinishing: function(event, currentIndex, newIndex){
               //alert(currentIndex)
            },
            onStepChanged: function(event, currentIndex, newIndex) {
                hideOverlay()
            },
            onFinished: function(e, currentIndex) {
               alert(currentIndex)
            },
            labels: {
                finish: "Submit",
                next: "Next",
                previous: "Back",
            }
        })
    }
    catch (e) {
        console.log(e)
    }
   disableRequiredFields()
})
