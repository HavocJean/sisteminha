<?php
    include "header.php";
    include_once "php/ClassPeso.php";

    $peso = new Peso();
    $triceps = $peso->treinoTriceps();
    $kg = 'kg';
?>
<div class="container">
    <table class="table table-dark table-bordered" style="text-align:center;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Barra Paralela</th>
                <th scope="col">Supino Fechado</th>
                <th scope="col">Puxada Triceps</th>
                <th scope="col">Triceps Supinação</th>
                <th scope="col">Triceps Corda</th>
                <th scope="col">Extensão Barra Deitado</th>
                <th scope="col">Extensão Barra Sentado</th>
                <th scope="col">Extensão Sentado Halter</th>
                <th scope="col">Coice Halter</th>
                <th scope="col">Coice Corda</th>
                <th scope="col">Mergulho no Banco</th>
                <th scope="col">Triceps Banco</th>
                <th scope="col">Triceps Frânces</th>
                <th scope="col">Triceps Maquina</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
    <tbody>
        <?php foreach($triceps as $tri) { ?>
        <tr>
        <td scope="row"><?php echo $tri['id_triceps']; ?></td>
            <td>
                <?php
                     echo $tri['barra_paralela'];
                ?>
            </td>
            <td> 
                <?php
                    echo $tri['supino_fechado']." ".$kg;
                ?>
            </td>
            <td> 
                <?php
                    echo $tri['puxada_triceps']." ".$kg;
                ?>
            </td>
            <td> 
                <?php
                    echo $tri['puxada_triceps_supe']." ".$kg;
                ?>
            </td>
            <td> 
                <?php
                    echo $tri['puxada_triceps_corda']." ".$kg;
                ?>
            </td>
            <td> 
                <?php
                    echo $tri['extensao_barra_deitado']." ".$kg;
                ?>
            </td>
            <td> 
                <?php
                    echo $tri['extensao_barra_sentado']." ".$kg;
                ?>
            </td>
            <td> 
                <?php
                    echo $tri['extensao_senta_halter']." ".$kg;
                ?>
            </td>
            <td> 
                <?php
                    echo $tri['coice_halter'];
                ?>
            </td>
            <td> 
                <?php
                    echo $tri['coice_corda']." ".$kg;
                ?>
            </td>
            <td> 
                <?php
                    echo $tri['mergulho_banco'];
                ?>
            </td>
            <td> 
                <?php
                    echo $tri['triceps_banco'];
                ?>
            </td>
            <td> 
                <?php
                    echo $tri['triceps_frances']." ".$kg;
                ?>
            </td>
            <td> 
                <?php
                    echo $tri['triceps_maquina']." ".$kg;
                ?>
            </td>
            <td>
                <a href="editar_triceps.php?id_triceps=<?php echo $peito['id_triceps']; ?>">Editar</a>
            </td>
        <?php }?>
        </tr>
    </tbody>
    </table>
</div>
<div class="container">
    <a href="adicionar_triceps.php"><button type="button" class="btn btn-dark">Adicionar Treino</button></a>
    <a href="logado.php"><button type="button" class="btn btn-dark">Voltar</button></a>
</div>