<?php


namespace Controllers;

use Core\Model;


class home extends Model
{
    public function index()
    {
        require "Public/Views/home.php";
    }
}