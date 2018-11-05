<?php
include "header.php";
include_once "php/ClassLogin.php";

$login = new Login();
$login->redefinir($_GET['token']);
?>
    <body style="background-color:#eaeaea;"> 
        <div class="container-fluid" style="margin-top:20vh;">
            <div class="container caixa-login">
                <div class="d-flex justify-content-center align-items-center" style="margin-top:30px;margin-bottom:15px;">
                    <h4>Digite a nova senha</h4>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <form class="form-group formulario" method="POST" action="">

                        <input class="form-control" type="password" name="senha" required="required" placeholder="Digite a senha"/>

                        <input class="form-control" type="password" name="confirmar-senha" required="required" placeholder="Confirmar a senha"/>

                        <input class="form-control btn btn-primary botaologin" type="submit" name="mudarsenha" value="Mudar senha" />
                    </form>
                </div>
            </div>
        </div>
    </body>