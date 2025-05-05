<?php
namespace app\controllers;

use app\controllers\Controller;

class HomeController
{
    public function index($params = null)
    {
        var_dump($params);
        return Controller::view("home");
    }
}