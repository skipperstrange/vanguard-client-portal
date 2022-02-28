//Variables used throughout app

casualtyCount = 0;
casualtyMotorClaimCount = 0;
witnessCount = 0;
assetsCount = 0;
vehicleCount = 0;
witnessMotorClaimCount = 0;
policeDetailsCount = 0;

vehicleUsage = $(".usage")
vehicleRegistrationYear = $("#reg-input")
bodyColor = $('.body_color')

legalAge = 18  
var year  = new Date().getFullYear();
var month = new Date().getMonth();
var day   = new Date().getDate();

var currentDate = new Date(year, month, day);
var defaultDoB  = new Date(year - 18, month, day);
console.log(day, month,)

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
    dp = $('.date')
    yp = $('.date-year')
    manufactureDate = $('#manufacture')
    reg = $('#registration')
    
    dp.datetimepicker({
        "allowInputToggle": true,
        "showClose": true,
        "showClear": true,
        "showTodayButton": true,
        "format": "DD-MM-YYYY",
        "maxDate": defaultDoB,
        "date": null

    });

    manufactureDate.datetimepicker({
        "allowInputToggle": true,
        "showClose": true,
        "showClear": true,
        "showTodayButton": true,
        "format": "YYYY",
        "viewMode": 'years',
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
        console.log('date is: '+d)
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
}


//General app functions

function showOverlay(){
    $('body').LoadingOverlay('show', {background: "rgba(0 , 0, 0, 0.7)", zIndex: 2, imageColor: "#ccc"})
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

function initColorPicker() {
    $('.body_color').colorpicker();
}


//item type can be one of these
function addItem(itemType) {
    let count
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

    let url = 'add-item&itemType=' + itemType + '&count=' + count;
    $.get(url).then(resp => {
        let resetId = itemType + '-reset'
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
        case 'casualtyMotorClaim':
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
    let $reset = $('#' + classCheck + '-reset')
    $('#' + itemId).remove()
    if ($('.' + classCheck).length > 0) {

    } else {
        $reset.remove()
    }
    console.log($('#' + classCheck).length)
}



// I'm experimenting on this
function appearJs(inputId, formval, itemType, count=null) {
    console.log(inputId, formval, itemType);
           
    $id = $("#" + inputId)
    
    if ($id.val() == formval) {
        
        url = 'add-item&itemType='+itemType+'&count='+count
        content = $.post(url, function(data){
            $('#' + itemType+'_'+count).append(data)
        })
        
    }else{
        $('#' + itemType+'_'+count).html('')
    }
}

function toggleDataTable(tableId){
    console.log($('#'+tableId))
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