<?php
define('CTRLS', "app\\controllers\\");
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', $_SERVER['DOCUMENT_ROOT']);

use app\Config\Router;

require_once ROOT . DS . 'app' . DS . 'config' . DS . 'autoloader.php';


    $url = '';
    if ($_GET['url']) {
        $url = $_GET['url'];
    }

    Router::route($url);

?>