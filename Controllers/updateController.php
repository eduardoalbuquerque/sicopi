<?php


namespace Controllers;


use Core\Controller;
use Models\databaseUpdate;

class updateController extends Controller
{
    public function index()
    {
        //CONERSÕES PARA BOLLEAN 0 - INATIVO | 1 - ATIVO
        $execute = new databaseUpdate();
        if($execute->execSql('
    CREATE TABLE IF NOT EXISTS master.company (
    id serial PRIMARY KEY,
    bussineName VARCHAR (60) NOT NULL UNIQUE,
    trademark VARCHAR (60) NULL,
    database VARCHAR (20) NOT NULL UNIQUE,
    status BOOLEAN NOT NULL DEFAULT true, 
    created_at TIMESTAMP WITH TIME ZONE DEFAULT  CURRENT_TIMESTAMP,
    update_at TIMESTAMP 
    
)')){
            echo "<br>master company criada com sucesso";
        }else{
            echo "<br>erro ao tentar criar tabela";
        };
        if($execute->execSql('CREATE TABLE IF NOT EXISTS 
master.user(
    cpf int PRIMARY KEY,
    name VARCHAR(60) NOT NULL,
    userName varchar(15) NOT NULL,
    status BOOLEAN NOT NULL DEFAULT true,
    created_at TIMESTAMP WITH TIME ZONE DEFAULT CURRENT_TIMESTAMP,
    update_at TIMESTAMP
)')){
            echo '<br>master.user criada com sucesso';
        }else{
            echo '<br>erro ao tentar criar master.user';
        };
        if($execute->execSql('
        CREATE TABLE IF NOT EXISTS master.access(
        id INTEGER NOT NULL,
        cpf INT,
        idcompany INT,
        pdw varchar(32) NOT NULL,
        created_at TIMESTAMP WITH TIME ZONE DEFAULT CURRENT_TIMESTAMP,
        update_at TIMESTAMP,
        PRIMARY KEY (id),
        FOREIGN KEY(cpf) REFERENCES master.user(cpf),
        FOREIGN KEY(idcompany) REFERENCES master.company(id)
        )
        ')){
            echo '<br>master access criada com sucesso';
        }else{
            echo '<br>erro ao tentar criar master.access';
        };
    }

}