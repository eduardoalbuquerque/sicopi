<?php


namespace Controllers;


use Core\controller;
use Models\teste;

class Login extends controller
{
    public function index()
    {
        $data = [
            'title'=> 'Login',
            'nome'=>'eduardo',
            'base_url'=>'http://localhost/sicopi'
        ];
        $this->loadTemplate('login',$data);
    }
}