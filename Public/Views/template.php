<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Olá</title>
    <link rel="stylesheet" href="<?php echo $base_url."/Public/Assets/css/styleReset.css"?>">
    <link rel="stylesheet" href="<?php echo $base_url."/Public/Assets/css/styleForms.css"?>">
    <link rel="stylesheet" href="<?php echo $base_url."/Public/Assets/css/styleConfig.css"?>">
</head>
<body class="corpoPreto">
<h1>este é o cabeçalho do template</h1>
<?php $this->loadViewInTemplate($view, $viewData) ?>
</body>
</html>
