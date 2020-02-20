<?php

require "vendor/autoload.php";

session_start();

if(empty($_SESSION['token'])){
    $_SESSION['token']= md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
    $_SESSION['login'] = false;
}
$token = md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
if($_SESSION['token'] != $token){
    print ('Opss, algo aconteceu, conecte novamente');
    session_destroy();
    header("Refresh: 2;url=login");
    exit();
}

if(empty($_SESSION['user_name'])){
    $_SESSION['user_name']='';
}

if(empty($_SESSION['company_name'])){
    $_SESSION['company_name']='';
}

if(empty($_SESSION['logado'])){
    $_SESSION['logado']='off';
}

$run = new \Core\core();
$run->run();