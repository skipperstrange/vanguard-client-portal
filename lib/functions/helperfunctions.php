<?php
function _title(String $title = ''){
    if(trim($title) == ''){
        return APP_NAME;
    }else{
    return APP_NAME.' - '.$title;
    }
}

function _link(String $controller = '', String $view = ''){
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

//Function that generates navigation layout
function generateNavigation($navArray){
    $navLinks = '';
   
    foreach($navArray as $label => $link){
        if(is_array($navArray[$label]['href'])){
            $navLinks.= '<li class="has-children">';
            $navLinks.= '<a href="#" class="nav-link">
            '.ucwords($label).'</a>';
            $navLinks.= '
            <ul class="dropdown arrow-top">
            ';
            foreach($navArray[$label]['href'] as $label => $link){
                $navLinks .= ' <li>
                <a href="'.$link['href'].'" class="nav-link">'.ucwords($label).'</a>
                </li>
                ';
            }
             $navLinks.=  '
             </ul>';
                '
            </li>';
        }else{
            $navLinks.=  "
            <li class=''>
                <a href='".$link['href']."' class='nav-link'>".ucwords($label)."</a>
            </li>
            ";
        }
    }
    return $navLinks;
}

function json_response($message = null, $code = 200, $headers = [''])
{
    // clear the old headers
    header_remove();
    // set the actual code
    http_response_code($code);

    // set the header to make sure cache is forced
    header("Cache-Control: no-transform,public,max-age=300,s-maxage=900");
    // treat this as json
    header('Content-Type: application/json');
    if(count($headers) > 0):
        foreach($headers as $header => $value){
            header("$header: $value");
        }
    endif;
    $status = array(
        200 => '200 OK',
        201 => '201 Created',
        204 => '204 No Content',
        205 => 'Reset Content',
        304 => 'Not Modified',
        400 => '400 Bad Request',
        401 => '401 Unauthorized',
        402 => '402 Payment Required',
        403 => '403 Forbidden',
        404 => '404 Not Found',
        405 => '405 Method Not Allowed',
        408 => '408 Request Timeout',
        422 => '422 Unprocessable Entity',
        500 => '500 Internal Server Error'
        );
    // ok, validation error, or failure
    header('Status: '.$status[$code]);
    // return the encoded json
    return json_encode(array(
        'status' => $code , // success or not?
        'message' => $message
        ));
}
