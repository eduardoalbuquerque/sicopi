<?php


namespace Models;


use Core\Model;

class login extends Model
{
    private string $cpf;
    private string $pwd;

    public function verifyData(string $cpf, string $pwd):bool
    {
        $this->cpf = filter_var($cpf, FILTER_SANITIZE_NUMBER_INT);
        $this->pwd = filter_var($pwd, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        if($this->accessDatabase($this->cpf,$this->pwd)){
            return true;
        }else{
            return false;
        }
    }

    private function accessDatabase(string $cpf, string $pdw)
    {
        $strSql = "SELECT master.user.name, master.company.database FROM master.access LEFT JOIN master.user 
ON master.access.cpf=master.user.cpf LEFT JOIN master.company ON master.access.idcompany=master.company.id
WHERE master.access.cpf = :cpf AND master.access.pdw = :pwd";
        $stm = $this->Connexao->prepare($strSql);
        $stm->bindValue(':cpf',$this->cpf,\PDO::ATTR_DEFAULT_STR_PARAM);
        $stm->bindValue(':pwd',md5($this->pwd),\PDO::ATTR_DEFAULT_STR_PARAM);
        $stm->execute();
        $records = $stm->fetch();
        if($records>0){
            $_SESSION['login'] = true;
            $_SESSION['user_name'] = $records['name'];
            $_SESSION['company_name'] = $records['database'];
            return true;
        }else{
            $_SESSION['login'] = false;
            $_SESSION['user_name'] = '';
            $_SESSION['company_name'] = '';
            return false;
        }
    }
}