<?php

require 'environment.php';
//definições para acesso a banco
// access database configuration

if (ENVIRONMENT ==='development'){
    define('BDNAME','sicopy');
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASS','');
    define('DRIVER','mysql');
}elseif (ENVIRONMENT==='production'){
    //Configurar com os dados do servidor - set datas server configuration
    define('BDNAME','sicopy');
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASS','');
    define('DRIVER','mysql');
}


