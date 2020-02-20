<?php


namespace Models;


use Core\Model;

class verificaCpf extends Model
{
    private string $cpf;
    public function verifyCPFAccess(string $cpf):int
    {
        $this->cpf = filter_var($cpf,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $strSql = "SELECT master.user.name, master.company.database FROM master.access LEFT JOIN master.user 
ON master.access.cpf=master.user.cpf LEFT JOIN master.company ON master.access.idcompany=master.company.id
WHERE master.access.cpf = :cpf";
        $stm = $this->Connexao->prepare($strSql);
        $stm->bindValue(':cpf',$this->cpf,\PDO::ATTR_DEFAULT_STR_PARAM);
        $stm->execute();
        $records = $stm->fetchAll();
        echo json_encode($records);
    }
}