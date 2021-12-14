<?php

include_once VIEWS.'layouts'.DS.'_header.php';

if(file_exists(VIEWS.$view.'.php')){
    include_once VIEWS.$view.'.php';
}else{
    include_once VIEWS.'layouts'.DS.'_404.php';
}

include_once VIEWS.'layouts'.DS.'_footer.php';