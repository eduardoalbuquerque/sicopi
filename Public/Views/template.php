<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Olá</title>
    <link rel="stylesheet" href="<?php echo $base_url."/Public/Assets/css/styleReset.css"?>">
    <link rel="stylesheet" href="<?php echo $base_url."/Public/Assets/css/styleForms.css"?>">
    <link rel="stylesheet" href="<?php echo $base_url."/Public/Assets/css/styleConfig.css"?>">
    <link rel="stylesheet" href="<?php echo $base_url."/Public/Assets/css/styleTemplate.css"?>">
</head>
<body class="corpoPreto">
<header class="header_template">
    <p class="paragrafo_template"><?php echo "Empresa: {$empresa}    |  Plataforma: {$sistema}"?></p>
</header>
<main class="main_template">
    <?php $this->loadViewInTemplate($view, $viewData) ?>
</main>
<footer class="footer_template">
<p class="paragrafo_template"> <?php echo "STATUS: [ {$logado} ] | USUÁRIO:[ {$user} ] | PREFEITURA:[ {$client} ] | IP ACESSO [ {$_SERVER['REMOTE_ADDR']} ] " ?></p>
</footer>
</body>
<script type="text/javascript" src="<?php echo $base_url.'/Public/Assets/js/functions.js'?>"></script>
</html>
