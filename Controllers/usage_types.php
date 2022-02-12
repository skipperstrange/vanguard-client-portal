<?php

include STATIC_DATA.'vehicle_usage.php';

if(isset($_POST['vehicle_usage_type']) && trim($_POST['vehicle_usage_type']) != ''){
    $vehicle_usage_type = $_POST['vehicle_usage_type'];

    $template = "<option value=\"\">Choose a usage type</option>
    ";

    foreach($vehicle_usage[$vehicle_usage_type] as $id => $usage){
        $template .= "<option value=\"$id\">$usage</option>
        ";
    }

    
}else{
    return;
}



