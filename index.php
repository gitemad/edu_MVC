<?php
    $url = isset($_GET['url']) && $_GET != '' ? $_GET['url'] : '';

    $url = explode('/', $url);

    require_once "../controllers/$url[0].php";
    
    $ctrlr = new Controller;

    if (count($url) >= 2) {
        $class_name = $url[0];
        $func_name = $url[1];
        call_user_func_array(array($class_name, $func_name), []);
    }

?>