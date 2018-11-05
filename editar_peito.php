<?php
    include "header.php";
    include_once "php/ClassPeso.php";

    $alterar = new Peso();
    $peitos = $alterar->selecionarPeito();
    
    if(!empty($_POST['atualizar'])) {
        $id_usuario = $_SESSION['login'];
        $id_peito = $_POST['id_peito'];
        $supino_reto = $_POST['supino_reto'];
        $supino_declinado = $_POST['supino_declinado'];
        $supino_inclinado = $_POST['supino_inclinado'];
        $peck_deck = $_POST['peck_deck'];
        $crucifixo = $_POST['crucifixo'];
        $crucifixo_inclinado = $_POST['crucifixo_inclinado'];
        $crucifixo_declinado = $_POST['crucifixo_declinado'];
        $pullover = $_POST['pullover'];
        $flexoes = $_POST['flexoes'];
        $press = $_POST['press'];
        $press_cabo = $_POST['press_cabo'];

        $alterar->alterarPeito($id_peito, $id_usuario, $supino_reto, $supino_declinado, $supino_inclinado, $peck_deck, $crucifixo, $crucifixo_inclinado, $crucifixo_declinado, $pullover, $flexoes, $press, $press_cabo);    
        header("Location: peito.php");
    }
?>
<form method="POST" action="">
    <input type="hidden" name="id_peito" value="<?php echo $peitos['id_peito']; ?>">
    <div class="container">
        <table class="table table-dark table-bordered" style="text-align:center;">
            <thead>
                <tr>
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
                </tr>
            </thead>
        <tbody>
            <tr>
                <td>
                    <input type="text" name="supino_reto" class="form-control" value="<?php echo $peitos['supino_reto']; ?>"> 
                </td>
                <td>
                    <input type="text" name="supino_declinado" class="form-control" value="<?php echo $peitos['supino_declinado']; ?>" >
                </td>
                <td> 
                    <input type="text" name="supino_inclinado" class="form-control"value="<?php echo $peitos['supino_inclinado']; ?>" >
                </td>
                <td>
                    <input type="text" name="peck_deck" class="form-control" value="<?php echo $peitos['peck_deck']; ?>">
                </td>
                <td>
                    <input type="text" name="crucifixo" class="form-control" value="<?php echo $peitos['crucifixo']; ?>">
                </td>
                <td> 
                    <input type="text" name="crucifixo_inclinado" class="form-control" value="<?php echo $peitos['crucifixo_inclinado']; ?>">
                </td>
                <td> 
                    <input type="text" name="crucifixo_declinado" class="form-control" value="<?php echo $peitos['crucifixo_declinado']; ?>" >
                </td>
                <td> 
                    <input type="text" name="pullover" class="form-control" value="<?php echo $peitos['pullover']; ?>">
                </td>
                <td> 
                    <input type="text" name="flexoes" class="form-control" value="<?php echo $peitos['flexoes']; ?>">
                </td>
                <td> 
                    <input type="text" name="press" class="form-control" value="<?php echo $peitos['press']; ?>">
                </td>
                <td> 
                    <input type="text" name="press_cabo" class="form-control" value="<?php echo $peitos['press_cabo']; ?>" >
                </td>
            </tr>
        </tbody>
        </table>
        <input type="submit" name="atualizar" value="Atualizar Treino" class="btn btn-dark">
        <a href="peito.php"><button type="button" class="btn btn-dark">Voltar</button></a>
    </div>
</form>