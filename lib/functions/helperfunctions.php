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

//checks if post or get value is not null
 /**
 * Check for get post in requests
 * @param string 'post' or 'get', 'p' or 'g'
 * @param string optional key  $key
 * @return bool true or false
 */
function check_post_get($post_or_get, $key = null, $value = null){
    if(trim($post_or_get) == 'get' || trim($post_or_get) == 'g'){
        if(isset($_GET[$key]) && trim($_GET[$key]) != ''){
            if(trim($value) != ''){
                if(trim($_GET[$key]) == "$value"){
                    return true;
                }
                return false;
            }
                return true;
            }
    }
    if(trim($post_or_get) == 'post' || trim($post_or_get) == 'p'){
        if(isset($_POST[$key]) && trim($_POST[$key]) != ''){
            if(trim($value) != ''){
                if(trim($_POST[$key]) == "$value"){
                    return true;
                }
                return false;
            }
                return true;
            }
    }
    return false;
}

function post_get($post_or_get, $key = null, $value = null){
    if(trim($post_or_get) == 'get' || trim($post_or_get) == 'g'){
        if(trim($post_or_get) == 'get' || trim($post_or_get) == 'g'){
            return $_GET[$key];
        }
    }
    if(check_post_get($post_or_get) == 'post' || trim($post_or_get) == 'p'){
        if(trim($post_or_get) == 'post' || trim($post_or_get) == 'p'){
            return $_POST[$key];
        }
    }
}

function remove_empty_order($arr)
{
	$arr = array_filter($arr);
	$newMy = array();
	foreach($arr as $key => $value) {
		if(!is_null($value)) {
			$newMy[] = $value;
		}
	}
	return $newMy;
}

function generate_html_attributes($attributes){
    $attr = "";
    foreach($attributes as $attribute => $properties){
        if(is_array($properties) || !is_int($attribute)){
            if(is_array($properties)){
               $props = implode(' ',$properties);
            }else{
                $props = $attributes[$attribute];
            }
            $attr .= " $attribute=\"".$props."\"";
        }
        else{
            $attr .= " $properties";
        }
    }

    return $attr;
}


function form_options_generator($options = [
    // key => [label=>''], ...
], 
$name="", 
$placeholder="",
$select_attributes = [
    // "class"=>"strings", id=>"strings"...
],
$options_attributes = [
    // "class"=>"strings", id=>"strings"...
]){
    $selectTag = "";
    $select_attr = "";
    $options_attr = "";
    
    $select_attr = generate_html_attributes($select_attributes);
    $options_attr = generate_html_attributes($options_attributes);
    
    $selectTag .= "<select name=\"$name\" $select_attr>
    <option value=\"\">$placeholder</option>
    ";
    foreach($options as $option => $label){
        if(is_array($options[$option]) || empty($options[$option])){
            if(trim($label['label']) == ''){
                $value = $option;
            }else{
                $value = $options[$option]['label'];
            }
            $selectTag .= "<option $options_attr value=\"$option\">".ucwords(strtolower(str_replace('_',' ',$value)))."</option>
        ";
        }else{
            $selectTag .= "<option $options_attr value=\"$options[$option]\">".ucwords(strtolower(str_replace('_',' ',$options[$option]))) ."</option>
        ";
        }
    }
    $selectTag .= "</select>";
    return $selectTag;
}



//Array Functions
//takes an array and removes all empty value keys
/**
 *@abstract function that removes all empty keys in an array
 *@author skipper
 *@param array
 */
function ArrayRemoveEmpty($arr)
{
    $arr = array_filter($arr);
    return $arr;
}


//takes an array and removes all empty value keys
/**
 *@abstract function that removes all empty keys in an array and returns them in order
 * keys will be replaced by indexed keys
 *@author skipper
 *@param array
 */
function ArrayRemoveEmptyOrder($arr)
{

    $arr = array_filter($arr);

    $newMy = array();
    $i = 0;

    foreach ($arr as $key => $value) {
        if (!is_null($value)) {
            $newMy[$i] = $value;
            $i++;
        }
    }
    return $newMy;
}

function time_elapsed_string($datetime, $full = false) {
		$today = time();    
                 $createdday= strtotime($datetime); 
                 $datediff = abs($today - $createdday);  
                 $difftext="";  
                 $years = floor($datediff / (365*60*60*24));  
                 $months = floor(($datediff - $years * 365*60*60*24) / (30*60*60*24));  
                 $days = floor(($datediff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));  
                 $hours= floor($datediff/3600);  
                 $minutes= floor($datediff/60);  
                 $seconds= floor($datediff);  
                 //year checker  
                 if($difftext=="")  
                 {  
                   if($years>1)  
                    $difftext=$years." years ago";  
                   elseif($years==1)  
                    $difftext=$years." year ago";  
                 }  
                 //month checker  
                 if($difftext=="")  
                 {  
                    if($months>1)  
                    $difftext=$months." months ago";  
                    elseif($months==1)  
                    $difftext=$months." month ago";  
                 }  
                 //month checker  
                 if($difftext=="")  
                 {  
                    if($days>1)  
                    $difftext=$days." days ago";  
                    elseif($days==1)  
                    $difftext=$days." day ago";  
                 }  
                 //hour checker  
                 if($difftext=="")  
                 {  
                    if($hours>1)  
                    $difftext=$hours." hours ago";  
                    elseif($hours==1)  
                    $difftext=$hours." hour ago";  
                 }  
                 //minutes checker  
                 if($difftext=="")  
                 {  
                    if($minutes>1)  
                    $difftext=$minutes." minutes ago";  
                    elseif($minutes==1)  
                    $difftext=$minutes." minute ago";  
                 }  
                 //seconds checker  
                 if($difftext=="")  
                 {  
                    if($seconds>1)  
                    $difftext=$seconds." seconds ago";  
                    elseif($seconds==1)  
                    $difftext=$seconds." second ago";  
                 }  
                 return $difftext;  
	}
    
    
    
/*******************************************************************************************88
*Function that comverts strings t to acsii.
* http://cubiq.org/the-perfect-php-clean-url-generator
* @author
* @param string $str - string to be worked on
* @param array $replace - array of characters to be stripped out
* @param delimiter - what the characters should be replaced with
********************************************************************************************99*/

//Original
function toAscii($str, $replace = array(), $delimiter = null)
{
    if (!empty($replace)) {
        $str = str_replace((array )$replace, ' ', $str);
    }

    $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
    $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
    $clean = trim($clean, '-');
    $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);

    return $clean;
}

//lesser options
//toAsciiMed("i'll be back") or toAsciiMed("i'll be-- --back") to "i-ll-be-back"
function toAsciiMed($str, $delimiter = null)
{
    $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
    $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", $delimiter, $clean);
    $clean = strtolower(trim($clean, '-'));
    $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);

    return $clean;
}


function toAsciiMin($str)
{
    $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
    $clean = preg_replace("/[^a-zA-Z0-9\/_| -]/", '', $clean);
    $clean = strtolower(trim($clean, '-'));
    $clean = preg_replace("/[\/_| -]+/", '-', $clean);

    return $clean;
}

/********************************************************************************
********************************************************************************/


function format_string($str, $mode = 1){
    $str = toAscii($str, ['_'], ' ');
    $str = ucfirst(strtolower($str));

    if($mode == 2){
        $str = ucwords(strtolower($str));
    }

    return $str;
}




