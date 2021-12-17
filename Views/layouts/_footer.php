
    <script src="<?= JS_PATH ?>wizard.js"></script>
    <script src="<?= JS_PATH ?>main.js"></script>
     <script>
        casualtyCount = 0;
        witnessCount = 0;
        assetsCount = 0;


//item type can be one of three. assets, casualty or witness
function addItem(itemType) {
    let count
    switch (itemType) {
        case 'casualty':
            casualtyCount++
            count = casualtyCount;
            break;
        case 'assets':
            assetsCount++
            count = assetsCount
            break;
        case 'witness':
            witnessCount++
            count = witnessCount
            break;
    }

    let url ='<?= _link('add_item&itemType=','')?>'+itemType+'&count='+count;
    $.get(url).then(resp => {
            $('#'+itemType).append(resp)
        })
}
         
          $(function(){
                $('.date').datetimepicker({
                        "allowInputToggle": true,
                        "showClose": true,
                        "showClear": true,
                        "showTodayButton": true,
                        "format": "MM/DD/YYYY",
                    });
            });
           
           
            
    </script>
</body>
</html>