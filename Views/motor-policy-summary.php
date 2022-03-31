<?php

            include SHARED.'_print_buttons.php';
            
            include SHARED.'_letter_header_template.php';

            if($policy['proposer_type'] !== 'personal'){
            $summary_columns["proposer_details"] = $proposer_details_left;
            $summary_columns[""] = $proposer_details_right;
            include SHARED.'_summary_columns.php';
            }

            $summary_columns=null;
            $summary_columns["insurer_details"] = $insurer_details;
            
            $summary_columns['Contacts'] = $proposer_contacts;
            include SHARED.'_summary_columns.php';
            
            $summary_columns = null;
            $summary_columns['policy_options'] = $proposer_policy_options_left;
            $summary_columns[''] = $proposer_policy_options_right;
            include SHARED.'_summary_columns.php';

            $summary_columns = null;
            $summary_columns['insurance_history'] = $insurance_history;
            include SHARED.'_summary_columns.php';

           
   

         $summary_columns = null;
         $summary_columns['vehicle_details'] = $vehicle_details;
         
         $summary_columns['vehicle_usage'] = $vusage;
         include SHARED.'_summary_columns.php';


/*
         $data[] = $insurance_history;
           $data_title = "Insurance History";
           $controlId = 'insurance_history';
           include SHARED.'_summary_rows.php'

        $data = null;
           $data[] = $vehicle_details;
           $controlId = 'assets';
           $data_title = "Vehicle Details";
           include SHARED.'_summary_rows.php';

         $data = null;
           $data []= $vusage;
           $data_title = "Vehicle Usage";
           $controlId = 'vehicle_usage';
           include SHARED.'_summary_rows.php'
           */
          ?>
<div id="declaration-confirm">
   
</div>