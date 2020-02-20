<?php


namespace Controllers;

//verify if origin login
if(!$_SESSION['login']){
    header("location:login");
    exit();
}

use Core\Controller;


class homeController extends Controller
{
    public function index()
    {
        $data = [
            'title'=> 'Sicopi - HOME',
            'empresa'=>'WebDevBrasil',
            'sistema'=> 'Sicopi',
            'logado'=>true,
            'base_url'=>'http://localhost/sicopi'
        ];
        $this->loadTemplateSystem('home',$data);
    }
}