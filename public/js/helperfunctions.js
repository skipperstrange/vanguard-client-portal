//Variables used throughout app
var count;
var casualtyCount = 0;
var casualtyMotorClaimCount = 0;
var witnessCount = 0;
var assetsCount = 0;
var vehicleCount = 0;
var witnessMotorClaimCount = 0;
var policeDetailsCount = 0;

vehicleUsage = $(".usage")
vehicleRegistrationYear = $("#reg-input")
bodyColor = $('.body_color')

legalAge = 18  
var year  = new Date().getFullYear();
var month = new Date().getMonth();
var day   = new Date().getDate();

var currentDate = new Date(year, month, day);
var defaultDoB  = new Date(year - 18, month, day);

//Geneic functions
function defaultErrorModal(e){
    hideOverlay()
    bootbox.alert({
    title: '<i class="fa fa-close" style="#f35b35"></i> Something went wrong !!',
    message: " <p> Please try again later </p>.",
        })
   }


//specific functions for manipulating particular date fieldset
function initDateInputs() {
    dob = $('#dob')
    dobClass = $('.dob')
    yp = $('.date-year')
    date = $('.date')
    manufactureDate = $('#manufacture')
    reg = $('#registration')
    
    dob.datetimepicker({
        "allowInputToggle": true,
        "showClose": true,
        "showClear": true,
        "showTodayButton": true,
        "format": "MM-DD-YYYY",
        "maxDate": defaultDoB,
        "date": null

    });

    date.datetimepicker({
        "allowInputToggle": true,
        "showClose": true,
        "showClear": true,
        "showTodayButton": true,
        "format": "MM-DD-YYYY",
        "maxDate": currentDate,
        "date": null
    });

    dobClass.datetimepicker({
        "allowInputToggle": true,
        "showClose": true,
        "showClear": true,
        "showTodayButton": true,
        "format": "MM-DD-YYYY",
        "maxDate": defaultDoB,
        "date": null

    });

    manufactureDate.datetimepicker({
        "allowInputToggle": true,
        "showClose": true,
        "showClear": true,
        "showTodayButton": true,
        "viewMode": 'years',
        "format": "YYYY",
        "maxDate":currentDate,
        "date": null
    });

    reg.datetimepicker({
        "allowInputToggle": true,
        "showClose": true,
        "showClear": true,
        "showTodayButton": true,
        "format": "YYYY",
        "viewMode": 'years',
    })

    manufactureDate.on('dp.change', function(e){
        d = manufactureDate.val()
        if(d === null || d == ''){
            minDate = currentDate
            reg.prop('disabled', true)
            reg.data("DateTimePicker")
            .date(null)
        }else{
            minDate = d
            reg.prop('disabled', false)
            reg.data("DateTimePicker")
            .date(d)
            .minDate(minDate)
            .maxDate(currentDate)
        }
      });

      policyStart = $('.date-duration-start')
        policyStart.datetimepicker({
            "allowInputToggle": true,
            "showClose": true,
            "showClear": true,
            "showTodayButton": true,
            //"format": "DD MMMM YYYY",
            "format": "DD-MM-YYYY",
            //"defaultDate": new Date(),
            useCurrent: true,
            minDate: new Date(),
            icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-arrow-up",
                    down: "fa fa-arrow-down"
                }
        });
}


//General app functions

function showOverlay(){
    $('body').LoadingOverlay('show', {background: "rgba(0 , 0, 0, 0.7)", zIndex: 2, imageColor: "#bbb"})
}

function hideOverlay(){
    $('body').LoadingOverlay('hide')
}

function toggleAgree(checkbox_id, button){
    checkbox = $("#"+checkbox_id)
    checkboxState = checkbox.prop('checked')
    continueButton = $(button)
    continueState = !checkboxState
    continueButton.prop('disabled', continueState)
}


function setProposerFields(proposerType){
    showOverlay()
    template = ''
    if(proposerType == 'agent' || proposerType == 'broker'){
        template = ' <h4 class="ab-info">'+proposerType+' details</h4>'
        template +=  '<div class="form-group col-lg-6 col-md-6">'
        template +=  '<input type="text" id="fullname"  name="proposer[proposer_type_name]"  required class="form-control" placeholder="Full name of '+proposerType+' applying on client behalf *" value="" />'
        template +=  '</div>'
        template +=  '<div class="form-group col-lg-6 col-md-6">'
        template +=  '<input type="text" id="fullname"  name="proposer[proposer_type_email]" required class="form-control" placeholder="Email of '+proposerType+'." value="" />'
        template +=  '</div>'
    }
    if(proposerType == 'corporate'){

    }
    $('#agent-broker').html('')
    $('#agent-broker').append(template)
    hideOverlay()
}

function setCoverTypeFeilds(proposerType){
   
}

function initColorPicker() {
    $('.body_color').colorpicker();
}

/*
//item type can be one of these
function addItem(itemType ='', url = '') {
    alert(count)
    let initDate = false
    let initColorPicker = false
    switch (itemType) {
        case 'casualty':
            casualtyCount++
            count = casualtyCount;
            break;
        case 'assets':
            assetsCount++
            count = assetsCount
            initDate = true
            break;

        case 'casualtyMotorClaim':
            casualtyMotorClaimCount++
            count = casualtyMotorClaimCount
            break;
        case 'witness':
            witnessCount++
            count = witnessCount
            break;
        case 'witnessMotorClaim':
            witnessMotorClaimCount++
            count = witnessMotorClaimCount
            break;
        case 'vehicle':

            vehicleCount++
            count = vehicleCount
            initDate = true
            initColorPicker = true
            break;
    }
    if(!url){
        let url = 'add-item&itemType=' + itemType + '&count=' + count;
    }
    $.get(url).then(resp => {
        let resetId = itemType + '-reset'
        alert(resp)
        console.log(jQuery(resp).find("#large"))
        $('#' + itemType).append(resp)

        if (initDate === true) {
            initDateInputs();
        }
        if (initColorPicker === true) {
            $('.body_color').colorpicker();
        }
        if ($('#' + resetId).length) {

        } else {
            $('#' + itemType + '-control').append('<button type="button" id="' + resetId + '" class="btn btn-sm action-call  btn-warning" onclick="resetItems(\'' + itemType + '\')"><i class="fa fa-trash"></i> Reset</button>')
        }
    })
}
*/

function resetItems(itemType) {
    let resetId = $('#' + itemType + '-reset')
    switch (itemType) {
        case 'casualty':
            casualtyCount = 0
            break;
        case 'assets':
            assetsCount = 0
            break;

        case 'witness':
            witnessCount = 0
            break;
        case 'casualty_motor_claim':
            casualtyMotorClaimCount = 0
            break;
        case 'witnessMotorClaim':
            witnessMotorClaimCount = 0
            break;
        
        case 'vehicle':
            witnessCount = 0
            break;

        case 'policeDetails':
            policeDetailsCount = 0
            break;
    }
    $('#' + itemType).html('')
    resetId.remove()
}

function removeItem(itemId, classCheck) {
    console.log(itemId, classCheck)
    let $reset = $('#' + classCheck + '-reset')
    $('#' + itemId).remove()
    if ($('.' + classCheck).length > 0) {

    } else {
        $reset.remove()
    }
    console.log($('#' + classCheck).length)
}

// I'm experimenting on this
function appear(inputId, formval, itemType, count=null, url = null) {
    $id = $("#" + inputId)
   
   if ($id.val() == formval) {
       if(!url){
       url = '?controller=add-item&itemType='+itemType+'&count='+count
       }
       content = $.post(url, function(data){
           changeContent((itemType+'_'+count), data)
       })
   }else{
       changeContent((itemType+'_'+count), '')
   }
}

// I'm experimenting on this
function ToggleRadioButtonViewControl(RadioInputId, radioVal, targetContent = string, type="id") {
    $id = $("#" + RadioInputId)
    $target = $("#" + targetContent)
    if(type == "class"){
        $target = $("." + targetContent)
    }
   
   if ($id.val() == radioVal) {
       $target.show('fast')
   }else{
    $target.hide('fast')
   }
}

function toggleDataTable(tableId){
    tableData = $('#'+tableId);
    dataControl = $('#'+tableId+'_data_control')
    tableData.toggle(300, ()=>{
        if ( tableData.is(":visible") ) {
            dataControl.removeClass('icon-chevron-circle-down')
            dataControl.addClass('icon-chevron-circle-up')
        } else if ( tableData.is(":hidden") ) {
            dataControl.removeClass('icon-chevron-circle-up')
            dataControl.addClass('icon-chevron-circle-down')
        }
    })
}


function redirectTo(url,time = 1000){
    setTimeout((e)=>{
        window.location.replace(url)
    }, time)
}

function changeContent(div = String , content = '', type = "id"){
    $section = $("."+div)
    if(type === 'id'){
        $section = $("#"+div)
    }
    $section.html(content)
}