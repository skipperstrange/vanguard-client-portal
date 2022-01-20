<div class="row">
    <div class="col-sm-12"><strong>Date:</strong> <?= $accident_details['date'] ?></div>
    <div class="col-sm-12 text-sm-end"> <strong>Policy No:</strong> <?=$policy_id ?></div>
	  
  </div>
  <hr>
  <div class="row">
  <div class="col-sm-6 text-sm-end order-sm-1"> <strong>Claim Details:</strong>
      <address>
      Location: <?= $claim['location']?> <br />
      Cause: <?= $claim['location']?> <br />
      </address>
    </div>
    <div class="col-sm-6 text-sm-end order-sm-1"> 
      <address>
       <?= $claim['incident_description']?> <br />
      </address>
    </div>
  </div>
  
        <?php 
           $data = $casualties;
           $data_title = "Affected Persons";
           $controlId = 'affected_persons';
           include SHARED.'_summary_rows.php'
        ?>
        <?php
           $data = $witnesses;
           $data_title = "Witnesses";
           $controlId = 'witnesses';
           include SHARED.'_summary_rows.php'
           ?>
        <?php
           $data = $assets;
           $controlId = 'assets';
           $data_title = "Damaged Items/Properties";
           include SHARED.'_summary_rows.php'
        ?>

<script>
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
</script>