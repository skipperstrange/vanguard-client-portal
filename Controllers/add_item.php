<?php

$itemTypeFile = SHARED.'_'.$_GET['itemType'].'_template.php';
$count = $_GET['count'];
if(file_exists($itemTypeFile)){
    include $itemTypeFile;
}else{
    echo json_response(null, 400);
}