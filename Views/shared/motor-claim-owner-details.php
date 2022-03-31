<?php
$summary_columns["policy details"] = $info['policy_details'];
include SHARED.'_summary_columns.php';

$summary_columns = null;
$summary_columns['owner_details'] = $info['owner_details'];
$summary_columns['vehicle_details'] = $info['motor_details'];
include SHARED.'_summary_columns.php';

?>
            
