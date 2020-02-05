<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Olá</title>
    <link rel="stylesheet" href="<?php echo BASE_URL.'/Public/Assets/css/styleReset.css'?>">
    <link rel="stylesheet" href="<?php echo BASE_URL.'/Public/Assets/css/styleForms.css'?>">
    <link rel="stylesheet" href="<?php echo BASE_URL.'/Public/Assets/css/styleConfig.css'?>">
</head>
<body class="corpoPreto">
<form class="login-form" name="login" action="<?php echo BASE_URL.'Home' ?>" method="post">
    <p class="greet">Olá, que bom ter você por aqui!</p>
    <input type="text"  id="cpf" maxlength="11" minlength="11" required placeholder="CPF" onkeypress="onlynumber();"
           onblur="getCPF();" autocomplete="off">
    <input type="password" maxlength="1" minlength="1" style="display: none" >
    <input type="password" maxlength="14" minlength="6" required placeholder="senha | password" autocomplete="nope">
    <input type="submit" value="Entrar">
    <div class="login-footer">
        <p><img src="<?php echo BASE_URL.'/Public/Assets/img/logotipo.png'?>" alt="Sicopy"></p>
        <p><a href="#">recuperar senha | recover password</a></p>
    </div>
</form>

<script type="text/javascript" src="<?php echo BASE_URL.'/Public/Assets/js/functions.js'?>"></script>
</body>



</html>
