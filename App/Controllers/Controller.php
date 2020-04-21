<?php
namespace app\controllers;
use app\views\View;

    abstract class Controller {
        
        public function __construct() {
            
        }
        
        public function render($viewPath, $data=[]) {
            View::render($viewPath, $data);
        }
    }
?>