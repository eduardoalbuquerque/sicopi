<?php


namespace Controllers;

use Core\Controller;


class home extends Controller
{
    public function index()
    {
        $data = [
            'title'=> 'Página Home',
            'nome'=>'eduardo',
            'base_url'=>'http://localhost/sicopi'
        ];
        $this->loadTemplate('home',$data);
    }
}