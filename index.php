<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'configs' . DIRECTORY_SEPARATOR . 'config.php';
require_once ROOT . DS . 'app' . DS . 'configs' . DS . 'Router.php';
require_once ROOT . DS . 'vendor' . DS . 'autoload.php';

use app\Configs\Router;

    $url = '';
    if ($_GET['url']) {
        $url = $_GET['url'];
    }
    
    Router::route($url);

?>