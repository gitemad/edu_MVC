<?php
namespace app\controllers;

class UserController extends Controller {

    //override: just action_name default
    public function __construct($action_name="show", $params=[]) {
        if ($params) {
            $params = array('user' => $params[0]);
        } else {
            $action_name = "../404";
        }
        parent::__construct($action_name, $params);
    }

    public function render($viewName, $data=[]) {
        parent::render('User' . DS . $viewName, $data);
    }

    public function show($data) {
        return $data;
    }
}