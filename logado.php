<?php
    include "header.php";
    include_once "php/ClassLogin.php";

    $logados = new Login();
    $logados->atualizaip();
?>
<div class="container">
    <nav class="nav bg-dark" style="height:60px;">
        <ul class="nav col-9" style="margin: auto 0;">
            <li class="nav-item">
                <a class="nav-link" href="peito.php">Treino Peito</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="triceps.php">Treino Triceps </a>
            </li>
        </ul>
        <ul class="nav col-3" style="margin: auto 0;">
            <li class="nav-item">
                <a class="nav-link" href="logado.php">Usuário: <?php foreach($sql as $s){ echo $s['nome']; } ?> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Logout</a>
            </li>
        </ul>
    </nav>
</div>

