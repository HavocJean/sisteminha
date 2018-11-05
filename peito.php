<?php
    include "header.php";
    include_once "php/ClassPeso.php";

    $peso = new Peso();
    $peitos = $peso->treinoPeito();
    $kg = 'kg';
?>
<div class="container">
    <table class="table table-dark table-bordered" style="text-align:center;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Supino Reto</th>
                <th scope="col">Supino Declinado</th>
                <th scope="col">Supino Inclinado</th>
                <th scope="col">Peck Deck</th>
                <th scope="col">Crucifixo</th>
                <th scope="col">Crucifixo Inclinado</th>
                <th scope="col">Crucifixo Declinado</th>
                <th scope="col">Pullover</th>
                <th scope="col">Flexões</th>
                <th scope="col">Press</th>
                <th scope="col">Press Cabo</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
    <tbody>
        <?php foreach($peitos as $peito) { ?>
        <tr>
        <td scope="row"><?php echo $peito['id_peito']; ?></td>
            <td>
                <?php
                     echo $peito['supino_reto']." ".$kg;
                ?>
            </td>
            <td> 
                <?php
                    echo $peito['supino_declinado']." ".$kg;
                ?>
            </td>
            <td> 
                <?php
                    echo $peito['supino_inclinado']." ".$kg;
                ?>
            </td>
            <td> 
                <?php
                    echo $peito['peck_deck']." ".$kg;
                ?>
            </td>
            <td> 
                <?php
                    echo $peito['crucifixo']." ".$kg;
                ?>
            </td>
            <td> 
                <?php
                    echo $peito['crucifixo_inclinado']." ".$kg;
                ?>
            </td>
            <td> 
                <?php
                    echo $peito['crucifixo_declinado']." ".$kg;
                ?>
            </td>
            <td> 
                <?php
                    echo $peito['pullover']." ".$kg;
                ?>
            </td>
            <td> 
                <?php
                    echo $peito['flexoes'];
                ?>
            </td>
            <td> 
                <?php
                    echo $peito['press']." ".$kg;
                ?>
            </td>
            <td> 
                <?php
                    echo $peito['press_cabo']." ".$kg;
                ?>
            </td>
            <td>
                <a href="editar_peito.php?id_peito=<?php echo $peito['id_peito']; ?>">Editar</a>
            </td>
        <?php }?>
        </tr>
    </tbody>
    </table>
</div>
<div class="container">
    <a href="adicionar_peito.php"><button type="button" class="btn btn-dark">Adicionar Treino</button></a>
    <a href="logado.php"><button type="button" class="btn btn-dark">Voltar</button></a>
</div>