<?php
include "header.php";
include_once "php/ClassLogin.php";

$login = new Login();

    if(!empty($_POST['email'])) {
        $email = $_POST['email'];

        $login->redefinirSenha($email);
    }
?>
<body style="background-color:#eaeaea;"> 
    <div class="container-fluid" style="margin-top:20vh;">
        <div class="container caixa-login">
            <div class="d-flex justify-content-center align-items-center" style="margin-top:30px;margin-bottom:15px;">
                <h4>Redefinir Senha</h4>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <form class="form-group formulario" method="POST" action="">

                    <input class="form-control" type="email" name="email" required="required" placeholder="E-mail"/>

                    <input class="form-control" type="email" name="confirmar-email" required="required" placeholder="Confirmar E-mail"/>

                    <input class="form-control btn btn-primary botaologin"  type="submit" name="recuperar" value="Recuperar" />
                </form>
            </div>
        </div>
    </div>
</body>
