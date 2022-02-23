<?php

/**
 * This file contains system functions 
 */
include_once 'constants.php';

//get a cofiguration value
function get_config(string $key){
    global $config;
    return $config[$key];
}

//set a cofiguration value
function set_config(string $key, $value){
    global $config;
    return $config[$key] = $value;
}