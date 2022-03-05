<?php

if(check_post_get('p', 'ack', 'true')){
    $ack = true;
    include SHARED.'_motor_declaration_template.php';
}else{
include VIEWS.'motor_policy_declaration.php';
}
