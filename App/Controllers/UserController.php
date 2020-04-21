<?php
namespace app\controllers;

class UserController extends Controller {


    public function render($viewPath, $data='Emad') {
        parent::render('User' . DS . $viewPath, $data);
    }
}