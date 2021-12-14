<?php

include_once "vendor/autoload.php";

if(MODE == 'development'){
    ini_set('display_errors',1);
}

$controller = @$_GET['controller'] ? @$_GET['controller']: 'index' ;
$view = @$_GET['view'] ? @$_GET['view']: 'index' ;

if(file_exists(CONTROLLERS.$controller.'.php')){
    include_once CONTROLLERS.$controller.'.php';
}else{
//    die("$controller.php not found. Please make sure controller exists.");
}
include_once VIEWS.'layouts'.DS.'layout.php';