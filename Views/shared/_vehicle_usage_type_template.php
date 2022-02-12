<?php
include STATIC_DATA.'vehicle_usage.php';
$cat = $_GET['cat'];

$template = "<option value=\"\">Choose a usage type</option>
";

foreach($vehicle_usage[$cat] as $id => $usage){
    $template .= "<option value=\"$id\">$usage</option>
    ";
}

echo $template;
