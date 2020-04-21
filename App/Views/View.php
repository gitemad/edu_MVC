<?php
namespace app\views;

class View {

    public static function render($viewPath, $data) {
        $viewPath = VIEW . DS . strtolower($viewPath);
        include "$viewPath" . ".php";
    }
}