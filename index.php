<?php
    include "header.php";
    include_once "php/ClassLogin.php";

    $login = new Login();
    $login->logar();
?>
<body style="background-color:#eaeaea;"> 
    <div class="container-fluid" style="margin-top:20vh;">
        <div class="container caixa-login">
            <div class="d-flex justify-content-center align-items-center member">
                <h4>Member login</h4>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <form class="form-group formulario" method="POST" action="">

                    <input class="form-control" id="email" type="email" name="email" required="required" placeholder="Email"/>

                    <input class="form-control" id="senha"type="password" name="senha" required="required" placeholder="Senha"/>

                    <button type="submit" class="btn btn-primary botaologin">Entrar</button>
                </form>
            </div>
            <div class="d-flex justify-content-center align-items-center senha">
                <a href="esqueci.php">Esqueceu a senha?</a>
            </div>
        </div>
    </div>
</body>
