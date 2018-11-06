<?php
include_once("ClassConexao.php");

class Peso extends Conexao {

    public function treinoPeito(){
            if(empty($_SESSION['login'])){
                header("Location: index.php");
                exit;
            } else {
                $peitos = "SELECT * FROM peitos INNER JOIN usuarios on peitos.id_usuario=usuarios.id_usuario WHERE usuarios.id_usuario = :id_usuario";
                $peitos = $this->pdo->prepare($peitos);
                $peitos->execute([':id_usuario'=>$_SESSION['login']]);

                if($peitos->rowCount() > 0) {
                    return $peitos->fetchAll();
                } else {
                    return array();
                }
        }
    }


    public function adicionarPeito($id_usuario = '', $supino_reto = '', $supino_declinado = '', $supino_inclinado = '', $peck_deck = '', $crucifixo = '', $crucifixo_inclinado = '', $crucifixo_declinado = '', $pullover = '', $flexoes = '', $press = '', $press_cabo = ''){

        $peitos = "INSERT INTO peitos 
        (id_usuario, supino_reto, supino_declinado, supino_inclinado, peck_deck, crucifixo, crucifixo_inclinado, crucifixo_declinado, pullover, flexoes, press, press_cabo)
        VALUES
        (:id_usuario, :supino_reto, :supino_declinado, :supino_inclinado, :peck_deck, :crucifixo, :crucifixo_inclinado, :crucifixo_declinado, :pullover, :flexoes, :press, :press_cabo)";
        $peitos = $this->pdo->prepare($peitos);
        $peitos->bindValue(":id_usuario", $id_usuario);
        $peitos->bindValue(":supino_reto", $supino_reto);
        $peitos->bindValue(":supino_declinado", $supino_declinado);
        $peitos->bindValue(":supino_inclinado", $supino_inclinado);
        $peitos->bindValue(":peck_deck", $peck_deck);
        $peitos->bindValue(":crucifixo", $crucifixo);
        $peitos->bindValue(":crucifixo_inclinado", $crucifixo_inclinado);
        $peitos->bindValue(":crucifixo_declinado", $crucifixo_declinado);
        $peitos->bindValue(":pullover", $pullover);
        $peitos->bindValue(":flexoes", $flexoes);
        $peitos->bindValue(":press", $press);
        $peitos->bindValue(":press_cabo", $press_cabo);
        $peitos->execute();
    }

    
    public function selecionarPeito(){

        if(empty($_SESSION['login'])){
            header("Location: index.php");
            exit;
        } else {
            $id_peito = isset($_REQUEST['id_peito'])?$_REQUEST['id_peito']:false;

            $peitos = "SELECT * FROM peitos WHERE id_peito = :id_peito";
            $peitos = $this->pdo->prepare($peitos);
            $peitos->execute([':id_peito'=>$id_peito]);

            if($peitos->rowCount() > 0) {
                return $peitos->fetch();
            } else {
                return array();
            }
        }
    }


    public function alterarPeito($id_peito, $id_usuario, $supino_reto, $supino_declinado, $supino_inclinado, $peck_deck, $crucifixo, $crucifixo_inclinado, $crucifixo_declinado, $pullover, $flexoes, $press, $press_cabo){

        $peitos = "UPDATE peitos 
        SET id_usuario = :id_usuario, supino_reto = :supino_reto, supino_declinado = :supino_declinado, supino_inclinado = :supino_inclinado, peck_deck = :peck_deck, crucifixo = :crucifixo, crucifixo_inclinado = :crucifixo_inclinado, crucifixo_declinado = :crucifixo_declinado, pullover = :pullover, flexoes = :flexoes, press = :press, press_cabo = :press_cabo
        WHERE id_peito = :id_peito";
        $peitos = $this->pdo->prepare($peitos);
        $peitos->bindValue(":supino_reto", $supino_reto);
        $peitos->bindValue(":supino_declinado", $supino_declinado);
        $peitos->bindValue(":supino_inclinado", $supino_inclinado);
        $peitos->bindValue(":peck_deck", $peck_deck);
        $peitos->bindValue(":crucifixo", $crucifixo);
        $peitos->bindValue(":crucifixo_inclinado", $crucifixo_inclinado);
        $peitos->bindValue(":crucifixo_declinado", $crucifixo_declinado);
        $peitos->bindValue(":pullover", $pullover);
        $peitos->bindValue(":flexoes", $flexoes);
        $peitos->bindValue(":press", $press);
        $peitos->bindValue(":press_cabo", $press_cabo);
        $peitos->bindValue(":id_peito", $id_peito);
        $peitos->bindValue(":id_usuario", $id_usuario);
        $peitos->execute();
    }


    public function selecionarVariosPeitos($id_usuario){
        $id_usuario = $_SESSION['login'];

        $peitos = "SELECT * FROM peitos WHERE id_usuario = :id_usuario";
        $peitos = $this->pdo->prepare($peitos);
        $peitos->execute([':id_usuario'=>$id_usuario]);
           
            if($peitos->rowCount() > 0) {
                return $peitos->fetchAll();
            } else {
                return array();
            } 
    }



    public function treinoTriceps(){
        if(empty($_SESSION['login'])){
            header("Location: index.php");
            exit;
        } else {
            $triceps = "SELECT * FROM triceps INNER JOIN usuarios on triceps.id_usuario=usuarios.id_usuario WHERE usuarios.id_usuario = :id_usuario";
            $triceps = $this->pdo->prepare($triceps);
            $triceps->execute([':id_usuario'=>$_SESSION['login']]);

            if($triceps->rowCount() > 0) {
                return $triceps->fetchAll();
            } else {
                return array();
            }
        }
    }


    public function adicionarTriceps($id_usuario = '', $barra_paralela = '', $supino_fechado = '', $puxada_triceps = '', $puxada_triceps_supe = '', $puxada_triceps_corda = '', $extensao_barra_deitado = '', $extensao_barra_sentado = '', $extensao_senta_halter = '', $coice_halter = '', $coice_corda = '', $mergulho_banco = '', $triceps_banco = '', $triceps_frances = '', $triceps_maquina = ''){

        $peitos = "INSERT INTO triceps 
        (id_usuario, barra_paralela, supino_fechado, puxada_triceps, puxada_triceps_supe, puxada_triceps_corda, extensao_barra_deitado, extensao_barra_sentado, extensao_senta_halter, coice_halter, coice_corda, mergulho_banco, triceps_banco, triceps_frances, triceps_maquina)
        VALUES
        (:id_usuario, :barra_paralela, :supino_fechado, :puxada_triceps, :puxada_triceps_supe, :puxada_triceps_corda, :extensao_barra_deitado, :extensao_barra_sentado, :extensao_senta_halter, :coice_halter, :coice_corda, :mergulho_banco, :triceps_banco, :triceps_frances, :triceps_maquina)";
        $peitos = $this->pdo->prepare($peitos);
        $peitos->bindValue(":id_usuario", $id_usuario);
        $peitos->bindValue(":barra_paralela", $barra_paralela);
        $peitos->bindValue(":supino_fechado", $supino_fechado);
        $peitos->bindValue(":puxada_triceps", $puxada_triceps);
        $peitos->bindValue(":puxada_triceps_supe", $puxada_triceps_supe);
        $peitos->bindValue(":puxada_triceps_corda", $puxada_triceps_corda);
        $peitos->bindValue(":extensao_barra_deitado", $extensao_barra_deitado);
        $peitos->bindValue(":extensao_barra_sentado", $extensao_barra_sentado);
        $peitos->bindValue(":extensao_senta_halter", $extensao_senta_halter);
        $peitos->bindValue(":coice_halter", $coice_halter);
        $peitos->bindValue(":coice_corda", $coice_corda);
        $peitos->bindValue(":mergulho_banco", $mergulho_banco);
        $peitos->bindValue(":triceps_banco", $triceps_banco);
        $peitos->bindValue(":triceps_frances", $triceps_frances);
        $peitos->bindValue(":triceps_maquina", $triceps_maquina);
        $peitos->execute();
    }












}