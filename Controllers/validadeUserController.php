<?php

namespace Controllers;

use Core\Controller;
use Models\login;

class ValidadeUserController extends Controller
{
    private string $cpf;
    private string $pwd;
    private object $validade;
    private string $company;

    public function getData(string $cpf, string $pwd, string $company)
    {
        $this->cpf=$cpf;
        $this->pwd=$pwd;
        $this->company = $company;
//
        $this->validade = new login();

        if($this->validade->verifyData($this->cpf,$this->pwd)){
            $_SESSION['company_name'] = $this->company;
            $_SESSION['login'] = true;
            echo json_encode(["acesso"=>true]);
        }else{
            $_SESSION['company_name'] = '';
            $_SESSION['login'] = false;
            echo json_encode(["acesso"=>false]);
        }
    }

}

