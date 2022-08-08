<?php
include STATIC_DATA.'claim_type_options.php';
include STATIC_DATA.'licence_groups.php';
$pageTitle = "Motor Claim";

if($_POST){

    $view_ = SHARED.$_POST['claim_view'].'.php';
    
    include $view_;
}



