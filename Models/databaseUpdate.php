<?php


namespace Models;


use Core\Model;

class databaseUpdate extends Model
{

    public function execSql( string $stringSql): bool
    {
//        $this->Connexao->beginTransaction();
            $exec = $this->Connexao->query($stringSql);
            $exec->execute();
//        $this->Connexao->commit();
        return true;
    }
}