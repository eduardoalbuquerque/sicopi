<?php


namespace Controllers;


use Core\Controller;
use Models\databaseUpdate;

class controllerUpdate extends Controller
{
    public function createTableClients()
    {
        $exeute = new databaseUpdate();
        $exeute->execSql('
    CREATE TABLE IF NOT EXISTS clients (
    id SERIAL PRIMARY KEY,
    symbol CHARACTER VARYING(10) NOT NULL UNIQUE,
    company CHARACTER VARYING(255) NOT NULL UNIQUE
)');
    }

}