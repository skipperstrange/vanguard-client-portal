<?php

if (!defined('DS')) {
    define('DS', '/');
  }
include_once "vendor/autoload.php";

if(MODE == 'development'){
    ini_set('display_errors',1);
}else{
    ini_set('display_errors',0);
}

$controller = @$_GET['controller'] ? @$_GET['controller']: 'index' ;
if(MVC_MODE == 'strict'){
    $view = @$_GET['view'] ? @$_GET['view']: $controller ;
}else{
    $view = $_GET['view'] ? @$_GET['view']: 'index' ;
}

$pageTitle = '';
if(file_exists(CONTROLLERS.$controller.'.php')){
    include_once CONTROLLERS.$controller.'.php';
}else{
//    die("$controller.php not found. Please make sure controller exists.");
}

include_once VIEWS.'layouts'.DS.'layout.php';
