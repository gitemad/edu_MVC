<?php
namespace app\controllers;

class UserController extends Controller {


    public function render($viewName, $data=['User' => "Emad"]) {
        parent::render('User' . DS . $viewName, $data);
    }
}