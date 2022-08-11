<?php

include STATIC_DATA.'upload_requirements.php';

$type = $_GET['type'];
$subtype =  $_GET['subtype'];
if(key_exists($type, $upload_requirements)){
    if(key_exists($type, $upload_requirements)){
        $files_upload = $upload_requirements[$type][$subtype];
        include SHARED.'_requirement_upload_check.php';
    }
    else{
        echo json_response(['message'=> $_GET['subtype'] . " subtype does not exist"], 404);
    }
}else{
    echo json_response(['message'=> $_GET['type'] . " group does not exist"], 404);
}
