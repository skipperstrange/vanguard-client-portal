        <?php

            $summary_columns["proposer_details"] = $proposer_details_left;
            $summary_columns[""] = $proposer_details_right;
            include SHARED.'_summary_columns.php';

            $summary_columns=null;
            $summary_columns["Insurer_details"] = $insurer_details;
            
            $summary_columns[''] = $proposer_contacts;
            include SHARED.'_summary_columns.php';
            echo "<p> </p>";
            
            $summary_columns = null;
            $summary_columns['policy_options'] = $proposer_policy_options_left;
            $summary_columns[''] = $proposer_policy_options_right;
            include SHARED.'_summary_columns.php';

        ?>
        <?php 
           $data[] = $insurance_history;
           $data_title = "Insurance History";
           $controlId = 'insurance_history';
           include SHARED.'_summary_rows.php'
        ?>
        <?php
        $data = null;
           $data[] = $vehicle_details;
           $controlId = 'assets';
           $data_title = "Vehicle Details";
           include SHARED.'_summary_rows.php'
        ?>
        <?php
        $data = null;
        
           $data []= $vusage;
           $data_title = "Vehicle Usage";
           $controlId = 'vehicle_usage';
           include SHARED.'_summary_rows.php'
           ?>
        
