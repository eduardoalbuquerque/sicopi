<?php
/*
 * just call login view
 * */
namespace Controllers;


use Core\Controller;

class loginController extends Controller
{
    public function index()
    {
        $data = [
            'title'=> 'Sicopi - Login',
            'empresa'=>'WebDevBrasil',
            'sistema'=> 'Sicopi',
            'logado'=>false,
            'client'=>'xxx',
            'user'=>'xxx',
            'base_url'=>'http://localhost/sicopi'
        ];
        $this->loadTemplate('login',$data);
    }
}