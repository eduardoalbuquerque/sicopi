<?php


namespace Controllers;


use Core\controller;

class Login extends controller
{
    public function index()
    {
        $this->loadView('login');
    }
}