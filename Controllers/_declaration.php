<?php
include STATIC_DATA."declarations.php";


if(key_exists('declaration',$_GET))
{
$declaration =   $declarations[$_GET['declaration']]; 
}
else{
    $declaration = '';
}

if(check_post_get('p', 'ack', 'true')){
    $ack = true;
    echo $declaration;
}else{
include SHARED.'_declaration_template.php';
}
