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
    define('DBNAME','sicopy');
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASS','');
    define('DRIVER','mysql');
}elseif (ENVIRONMENT==='production'){
    //Configurar com os dados do servidor - set datas server configuration
    define('DBNAME','sicopy');
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASS','');
    define('DRIVER','mysql');
}

//definições do caminho base do sistema
// path of system

define('PATH','localhost/');

