<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php';
require_once ROOT . DS . 'app' . DS . 'config' . DS . 'autoloader.php';

use app\Config\Router;



    $url = '';
    if ($_GET['url']) {
        $url = $_GET['url'];
    }

    Router::route($url);

?>