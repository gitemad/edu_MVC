<?php
namespace app\views;

class View {

    public static function render($viewName, $data) {
        $viewName = strtolower($viewName) . ".twig";
        $loader = new \Twig\Loader\FilesystemLoader(VIEW);
        $twig = new \Twig\Environment($loader /* , [
            'cache' => '/path/to/compilation_cache',
            ] */);
            
        echo $twig->render($viewName, $data);
    }
}