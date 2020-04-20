<?php
namespace app\controllers;

    class Controller {
        
        public function __construct() {
            $this->welcome();
        }
        
        public function welcome() {
            if (true) {
                echo "Welcome to controller";
            }
        }
    }
?>