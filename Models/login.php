<?php


namespace Models;


use Core\Model;

class login extends Model
{
    private string $cpf;
    private string $pwd;

    public function verifyData(string $cpf, string $pwd)
    {
        $this->cpf = filter_var($cpf, FILTER_SANITIZE_NUMBER_INT);
        $this->pwd = filter_var($pwd, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    private function accessDatabase(string $cpf, string $pdw)
    {
//        $strSql = "SELECT name, client"
//        $this->Connexao->prepare()
    }
}