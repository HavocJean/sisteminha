<?php
    include "header.php";
    include_once "php/ClassPeso.php";

    $adicionar = new Peso();

    if(!empty($_POST['confirmar'])) {
        $id_usuario = $_SESSION['login'];
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

        $adicionar->adicionarPeito($id_usuario, $supino_reto, $supino_declinado, $supino_inclinado, $peck_deck, $crucifixo, $crucifixo_inclinado, $crucifixo_declinado, $pullover, $flexoes, $press, $press_cabo);

        header("Location: peito.php");
    }
?>
<form method="POST" action="">
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
                    <input type="number" name="supino_reto" class="form-control" > 
                </td>
                <td>
                    <input type="number" name="supino_declinado" class="form-control" >
                </td>
                <td> 
                    <input type="number" name="supino_inclinado" class="form-control" >
                </td>
                <td>
                    <input type="number" name="peck_deck" class="form-control" >
                </td>
                <td>
                    <input type="number" name="crucifixo" class="form-control" >
                </td>
                <td> 
                    <input type="number" name="crucifixo_inclinado" class="form-control" >
                </td>
                <td> 
                    <input type="number" name="crucifixo_declinado" class="form-control" >
                </td>
                <td> 
                    <input type="number" name="pullover" class="form-control" >
                </td>
                <td> 
                    <input type="number" name="flexoes" class="form-control" >
                </td>
                <td> 
                    <input type="number" name="press" class="form-control" >
                </td>
                <td> 
                    <input type="number" name="press_cabo" class="form-control" >
                </td>
            </tr>
        </tbody>
        </table>
        <input type="submit" name="confirmar" value="Confirmar Treino" class="btn btn-dark">
        <a href="peito.php"><button type="button" class="btn btn-dark">Cancelar</button></a>
    </div>
</form>