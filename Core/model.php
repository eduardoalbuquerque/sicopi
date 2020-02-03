<?php


namespace Core;

use PDO;


class Model
{
    protected $Connexao;

    public function __construct()
    {
        $this->Connexao = dbConn::conectDb();
    }

}