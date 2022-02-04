<? include('motor-claim-summary.php') ?>;
<div class="row">



    <div class="col-sm-12"><strong>Date of Accident:</strong> <?= $accident_details['date'] ?></div>
    <div class="col-sm-12 text-sm-end"> <strong>Policy No:</strong> <?=$policy_id ?></div>
	  
  </div>
  <hr>
  <div class="row">
  <div class="col-sm-6 text-sm-end order-sm-1"> <strong>Claim Details:</strong>
      <address>
      
      Cause: <?= $claim['location']?> <br />
      </address>
    </div>
    <div class="col-sm-6 text-sm-end order-sm-1"> 
      <address>
       <?= $claim['incident_description']?> <br />
      </address>
    </div>
  </div>

  <div class="col-sm-6 text-sm-end order-sm-1"> <strong>Accident Details:</strong>
      <address>
      


      </address>
    </div>
    
  </div>
  
        <?php 
           $data = $vehicle_information;
           $data_title = "Vehicle Information";
           $controlId = 'vehicle_information';
           include SHARED.'_summary_rows.php'
        ?>
        
        <?php 
           $data = $motorclaim;
           
           $data_title = "Accident Details";
           $controlId = 'accident_details';
           include SHARED.'_summary_rows.php'
        ?>
        
        <?php 
           $data = $casualties;
           $data_title = "Affected Persons";
           $controlId = 'affected_persons';
           include SHARED.'_summary_rows.php'
        ?>
        <?php
           $data = $casualty_motor_claim;
           $data_title = "Casualties";
           $controlId = 'casualty_motor_claim';
           include SHARED.'_summary_rows.php'
           ?>
        <?php
           $data = $witness_motor_claim;
           $controlId = 'witness_motor_claim';
           $data_title = "witnesses";
           include SHARED.'_summary_rows.php'
        ?>
