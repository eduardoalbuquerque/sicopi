<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>SICOPI</title>
    <link rel="stylesheet" href="<?php echo $base_url."/Public/Assets/css/styleReset.css"?>">
    <link rel="stylesheet" href="<?php echo $base_url."/Public/Assets/css/styleForms.css"?>">
    <link rel="stylesheet" href="<?php echo $base_url."/Public/Assets/css/styleConfig.css"?>">
    <link rel="stylesheet" href="<?php echo $base_url."/Public/Assets/css/styleTemplate.css"?>">
    <link rel="stylesheet" href="<?php echo $base_url."/Public/Assets/css/styleSystem.css"?>">
</head>
<body class="corpoPreto">
<header class="header_template">
    <p class="paragrafo_template"><?php echo "Empresa: {$empresa}    |  Plataforma: {$sistema} "?></p>
</header>
<main class="main_template">
    <div class="container">
        <div class="menu-button">
            <input type="checkbox" id="check">
            <label for="check" id="icone"><img class="imagem" src="Public/Assets/ico/icone2.png"> </label>
        </div>
        <section class="barra">
            <nav>
                <a href="#"><div class="link">menu1</div> </a>
                <a href="#"><div class="link">menu2</div> </a>
                <a href="#"><div class="link">menu3</div> </a>
                <a href="#"><div class="link">menu4</div> </a>
                <a href="#"><div class="link">menu5</div> </a>
            </nav>
        </section>
        <section class="screen-system">
                <?php $this->loadViewInTemplate($view, $viewData) ?>
        </section>
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
