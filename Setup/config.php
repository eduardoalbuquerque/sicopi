<?php

require 'environment.php';

const VERSION = '1.0';
const NAME = 'Sycopi - Sistema de Contabilidade Pública Integrada';
const COMPANY = 'WebDevBrasil';
const SUPORTE = 'suporte@webdevbrasil.com.br';
const SITE = 'https://www.webdevbrasil.com.br';


//definições para acesso a banco
// access database configuration

if (ENVIRONMENT ==='development'){
    if(DRIVERDB === 'mysql'){
        define('DBNAME','sicopi');
        define('DBHOST','localhost');
        define('DBUSER','root');
        define('DBPASS','');
    }elseif (DRIVERDB ==='pgsql'){
        define('DBNAME','sicopi');
        define('DBHOST','sicopi.postgresql.dbaas.com.br');
        define('DBUSER','sicopi');
        define('DBPASS','KbH123#@');
    }

}elseif (ENVIRONMENT==='production'){
    //Configurar com os dados do servidor - set datas server configuration
    define('DBNAME','sicopi');
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASS','');
}

//definições do caminho base do sistema
// path of system

define("BASE_URL","http://localhost/sicopi/");

//extensao dos arquivos da views

define('EXT','.php');

