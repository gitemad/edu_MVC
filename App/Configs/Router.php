<?php
namespace app\Configs;

    class Router {
        
        public static function route($url) {
            $url = strtolower($url);
            $url = explode('/', $url);
            
            $ctrlrName = CTRLS . ucfirst(array_shift($url)) . 'Controller';

            if (count($url) >= 1) {
                $class_name = $ctrlrName;
                $func_name = array_shift($url);
                $params = $url;
                call_user_func_array(array($class_name, $func_name), $params);
            }
        }
    }