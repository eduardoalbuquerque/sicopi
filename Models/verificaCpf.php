<?php


namespace Models;


use Core\Model;

class verificaCpf extends Model
{
    private string $cpf;
    public function verifyCPFAccess(string $cpf):int
    {
        $this->cpf = filter_var($cpf,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $stringSql = "SELECT * FROM access WHERE CPF = :cpf";
        $stm = $this->Connexao->prepare($stringSql);
        $stm->bindValue(':cpf',$cpf);
        $stm->execute();
        return $stm->rowCount();

    }
}