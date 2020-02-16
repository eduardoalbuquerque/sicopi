<?php


namespace Controllers;

use Core\Controller;


class homeController extends Controller
{
    public function index()
    {
        $data = [
            'title'=> 'Página Home',
            'nome'=>'eduardo',
            'base_url'=>'http://localhost/sicopi'
        ];
        $this->loadTemplate('homeController',$data);
    }
}