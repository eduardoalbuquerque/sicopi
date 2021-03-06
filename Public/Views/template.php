<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Olá</title>
    <link rel="stylesheet" href="<?php echo $base_url."/Public/Assets/css/styleReset.css"?>">
    <link rel="stylesheet" href="<?php echo $base_url."/Public/Assets/css/styleForms.css"?>">
    <link rel="stylesheet" href="<?php echo $base_url."/Public/Assets/css/styleConfig.css"?>">
    <link rel="stylesheet" href="<?php echo $base_url."/Public/Assets/css/styleTemplate.css"?>">
    <link rel="stylesheet" href="<?php echo $base_url."/Public/Assets/css/styleSystem.css"?>">
</head>
<body class="corpoPreto">
<header class="header_template">
    <p class="paragrafo_template"><?php echo "Empresa: {$empresa}    |  Plataforma: {$sistema} "?></p>

    <?php
    if($logado){
    echo "<button id='sair' class='sair'><p>SAIR</p></button>";
    }
    ?>

</header>
<main class="main_template">
    <?php $this->loadViewInTemplate($view, $viewData) ?>
    <div class="loadin">
        <img id="gif" class="gif gifHidden" src="<?php echo $base_url."/Public/Medias/gifs/wait6.gif"?>">
    </div>
</main>

<footer class="footer_template">
<p class="paragrafo_template"> <?php echo "LOGADO: [ {$logado} ] | USUÁRIO:[ {$_SESSION['user_name']} ] | 
ÓRGÃO:[ {$_SESSION['company_name']} ] | IP ACESSO [ {$_SERVER['REMOTE_ADDR']} ] " ?></p>
</footer>
</body>
<script type="text/javascript" src="<?php echo $base_url.'/Public/Assets/js/functions.js'?>"></script>
<script type="text/javascript" src="<?php echo $base_url.'/Public/Assets/js/login.js'?>"></script>
</html>
