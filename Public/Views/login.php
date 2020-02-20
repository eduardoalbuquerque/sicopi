<form id="loginForm" class="login-form" name="login" action="<?php echo $base_url.'/Home' ?>" method="post">
    <p class="greet">Olá, que bom ter você por aqui!</p>
    <input type="text"  id="cpf" maxlength="11" minlength="11" required placeholder="CPF" onkeypress="onlynumber();"
           onblur="getCPF();" autocomplete="off">
    <input type="password" maxlength="1" minlength="1" style="display: none" >
    <select id="select">
        <option value="">Selecione órgão</option>
    </select>
    <input type="password" id="pwd" maxlength="14" minlength="6" required placeholder="senha | password" autocomplete="nope">
    <input type="submit" value="Entrar" id="btnEnviar">
    <div class="login-footer">
        <p><img src="<?php echo $base_url.'/Public/Assets/img/logotipo.png'?>" alt="Sicopy"></p>
        <p><a href="#">recuperar senha | recover password</a></p>
    </div>
</form>

