<?php
namespace app\Config;

    class Router {
        
        public static function route($url) {
            $url = explode('/', $url);

            $ctrlrName = CTRLS . 'Controller';
            $ctrlr = new $ctrlrName;

            if (count($url) >= 2) {
                $class_name = $url[0];
                $func_name = $url[1];
                call_user_func_array(array($class_name, $func_name), []);
            }
        }
    }