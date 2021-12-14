<?php
function _title(String $title = ''){
    if(trim($title) == ''){
        return APP_NAME;
    }

    return APP_NAME.' - '.$title;
}

function _link(String $action = '', String $view = ''){
    $url = '?';
    if (isset($controller) && trim($controller) != ''):
        $url .= 'controller=' . $controller;
    endif;
    if ((isset($view) && trim($view) != '') && (isset($controller) && trim($controller) !=
        '')) {
        $url .= '&';
    }
    if (isset($view) && trim($view) != ''):
        $url .= 'view=' . $view;
    endif;
    return $url;
}

function redirect_to($controller = null, $view = null)
{
    $url = _link($controller, $view);
    header('location:' .WEB_URL. $url);
    exit();
}

function generateRandom($name = null) {
	return sha1(md5($name.time()));
}

function mapObjectValues($object, $array) {
	foreach ($array as $key => $value) {
		$object->$key = $value;
	}
}

function encryptValue($input) {
	return sha1(md5($input));
}
