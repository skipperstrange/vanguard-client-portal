
    <script src="<?= JS_PATH ?>wizard.js"></script>
    <script src="<?= JS_PATH ?>main.js"></script>
     <script>
         function initDateInputs(){
            $('.date').datetimepicker({
            "allowInputToggle": true,
            "showClose": true,
            "showClear": true,
            "showTodayButton": true,
            "format": "MM/DD/YYYY",
            });
         }

        casualtyCount = 0;
        witnessCount = 0;
        assetsCount = 0;


//item type can be one of three. assets, casualty or witness
function addItem(itemType) {
    let count
    let initDate = false
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
        case 'witness':
            witnessCount++
            count = witnessCount
            break;
    }

    let url ='<?= _link('add-item&itemType=','')?>'+itemType+'&count='+count;
    $.get(url).then(resp => {
        let resetId = itemType+'-reset'
            $('#'+itemType).append(resp)

            if(initDate === true){
                initDateInputs();
            }
            if($('#'+resetId).length){

            }else{
            $('#'+itemType+'-control').append('<button type="button" id="'+resetId+'" class="btn btn-sm action-call  btn-warning" onclick="resetItems(\''+itemType+'\')"><i class="fa fa-trash"></i> Reset</button>')
            }
        })
}

function resetItems(itemType) {
    let resetId = $('#'+itemType+'-reset')
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
    }
    
    $('#'+itemType).html('')
    resetId.remove()
}

function removeItem(itemId, classCheck){
    let $reset= $('#'+classCheck+'-reset')
    $('#'+itemId).remove()
    if($('.'+classCheck).length > 0){

    }else{
        $reset.remove()
    }
    console.log($('#'+classCheck).length)
}

$(function(){
    initDateInputs();
});        
            
    </script>
</body>
</html>