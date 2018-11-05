<?php
    include "header.php";
    include_once "php/ClassPeso.php";

    $adicionar = new Peso();

    if(!empty($_POST['confirmar'])) {
        $id_usuario = $_SESSION['login'];
        $barra_paralela = $_POST['barra_paralela'];
        $supino_fechado = $_POST['supino_fechado'];
        $puxada_triceps = $_POST['puxada_triceps'];
        $puxada_triceps_supe = $_POST['puxada_triceps_supe'];
        $puxada_triceps_corda = $_POST['puxada_triceps_corda'];
        $extensao_barra_deitado = $_POST['extensao_barra_deitado'];
        $extensao_barra_sentado = $_POST['extensao_barra_sentado'];
        $extensao_senta_halter = $_POST['extensao_senta_halter'];
        $coice_halter = $_POST['coice_halter'];
        $coice_corda = $_POST['coice_corda'];
        $mergulho_banco = $_POST['mergulho_banco'];
        $triceps_banco = $_POST['triceps_banco'];
        $triceps_frances = $_POST['triceps_frances'];
        $triceps_maquina = $_POST['triceps_maquina'];

        $adicionar->adicionarTriceps($id_usuario, $barra_paralela, $supino_fechado, $puxada_triceps, $puxada_triceps_supe, $puxada_triceps_corda, $extensao_barra_deitado, $extensao_barra_sentado, $extensao_senta_halter, $coice_halter, $coice_corda, $mergulho_banco, $triceps_banco, $triceps_frances, $triceps_maquina);

        header("Location: triceps.php");
    }
?>
<form method="POST" action="">
    <div class="container">
        <table class="table table-dark table-bordered" style="text-align:center;">
            <thead>
                <tr>
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
                </tr>
            </thead>
        <tbody>
            <tr>
                <td>
                    <input type="text" name="barra_paralela" class="form-control" > 
                </td>
                <td>
                    <input type="text" name="supino_fechado" class="form-control" >
                </td>
                <td> 
                    <input type="text" name="puxada_triceps" class="form-control" >
                </td>
                <td>
                    <input type="text" name="puxada_triceps_supe" class="form-control" >
                </td>
                <td>
                    <input type="text" name="puxada_triceps_corda" class="form-control" >
                </td>
                <td> 
                    <input type="text" name="extensao_barra_deitado" class="form-control" >
                </td>
                <td> 
                    <input type="text" name="extensao_barra_sentado" class="form-control" >
                </td>
                <td> 
                    <input type="text" name="extensao_senta_halter" class="form-control" >
                </td>
                <td> 
                    <input type="text" name="coice_halter" class="form-control" >
                </td>
                <td> 
                    <input type="text" name="coice_corda" class="form-control" >
                </td>
                <td> 
                    <input type="text" name="mergulho_banco" class="form-control" >
                </td>
                <td> 
                    <input type="text" name="triceps_banco" class="form-control" >
                </td>
                <td> 
                    <input type="text" name="triceps_frances" class="form-control" >
                </td>
                <td> 
                    <input type="text" name="triceps_maquina" class="form-control" >
                </td>
            </tr>
        </tbody>
        </table>
        <input type="submit" name="confirmar" value="Confirmar Treino" class="btn btn-dark">
        <a href="triceps.php"><button type="button" class="btn btn-dark">Cancelar</button></a>
    </div>
</form>