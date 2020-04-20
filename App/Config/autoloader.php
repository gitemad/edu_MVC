<?php
// define('DS', DIRECTORY_SEPARATOR);
// define('ROOT', $_SERVER['DOCUMENT_ROOT']);

    function autoload($className) {
        $className = str_replace('\\', DS, $className);
        $path = ROOT . DS . $className . '.php';
        include_once $path;
    }

    spl_autoload_register('autoload');
?>