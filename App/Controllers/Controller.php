<?php
namespace app\controllers;
use app\views\View;

    abstract class Controller {
        
        public function __construct() {
            
        }
        
        public function render($viewName, $data=[]) {
            View::render($viewName, $data);
        }
    }
?>