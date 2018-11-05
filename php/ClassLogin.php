<?php
include_once("ClassConexao.php");

class Login extends Conexao {

   public function logar(){
    $_SESSION['login'] = '';

        //verificar se o email foi enviado e armazena email e senha
        if(isset($_POST['email']) && !empty($_POST['email'])) {
            $email = $_POST['email'];
            $senha = $_POST['senha'];
        // da um select para verificar se tudo ta certo
            $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = MD5(:senha)";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":senha", $senha);
            $sql->execute();
        // se tem resultado ele pega o id e o ip do usuario, guarda o id na session
            if($sql->rowCount() > 0) {
                $sql = $sql->fetch();
                $id_usuario = $sql['id_usuario'];
                $ip = $_SERVER['REMOTE_ADDR'];

                $_SESSION['login'] = $id_usuario;
        // atualiza o ip do usuario      
                $sql = "UPDATE usuarios SET ip = :ip WHERE id_usuario = :id_usuario";
                $sql = $this->pdo->prepare($sql);
                $sql->bindValue(":ip", $ip);
                $sql->bindValue(":id_usuario", $id_usuario);
                $sql->execute();
        // depois vai para a parte de logado
                header("Location: logado.php");
                exit;
            }
        }
    }


    public function atualizaip(){ 
        if(empty($_SESSION['login'])){
            header("Location: index.php");
            exit;
        } else {
            $id_usuario = $_SESSION['login'];
            $ip = $_SERVER['REMOTE_ADDR'];
            global $sql;
            
            $sql = "SELECT * FROM usuarios WHERE id_usuario = :id_usuario AND ip = :ip";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(":id_usuario", $id_usuario);
            $sql->bindValue(":ip", $ip);
            $sql->execute();

            if($sql->rowCount() == 0) {
                header("Location: index.php");
                exit;
            }
        }
    }


    public function redefinirSenha($email){
        $email = $_POST['email'];

        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->execute();

        if($sql->rowCount() > 0) {
            
            $sql = $sql->fetch();
            $id = $sql['id_usuario'];

            $token = md5(time().rand(0, 99999).rand(0, 99999));

            $sql = "INSERT INTO usuarios_token (id_usuario, hash, used, expira_em) VALUES (:id_usuario, :hash, :used, :expira_em)";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(":id_usuario", $id);
            $sql->bindValue(":hash", $token);
            $sql->bindValue(":used", 0);
            $sql->bindValue(":expira_em", date('Y-m-d H:i', strtotime('+1 months')));
            $sql->execute();

            $link = "http://localhost/sisteminha/redefinir.php?token=".$token;

            $msg = "Clique no link para redefinir sua senha!<br>".$link;
            $assunto = "Redefinição de senha";
            $cabeçalho = "From: email@teste.com.br"."\r\n".'X-Mailer: PHP/'.phpversion();

            // mail($email, $assunto, $msg, $cabeçalho);
            echo $msg;
            exit;
        }
    }


    public function redefinir($token){
        $token = $_GET['token'];

        if(!empty($_GET['token'])) {
            $token = $_GET['token'];
        
        $sql = "SELECT * from usuarios_token WHERE hash = :hash AND used = 0 AND expira_em > NOW()";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":hash", $token);
        $sql->execute();

            if($sql->rowCount() > 0) {
                $sql = $sql->fetch();
                $id_usuario = $sql['id_usuario'];

                if(!empty($_POST['senha'])) {
                    $senha = $_POST['senha'];

                    $sql = "UPDATE usuarios SET senha = :senha WHERE id_usuario = :id_usuario";
                    $sql = $this->pdo->prepare($sql);
                    $sql->bindValue(":senha", md5($senha));
                    $sql->bindValue(":id_usuario", $id_usuario);
                    $sql->execute();

                    $sql = "UPDATE usuarios_token SET used = 1 WHERE hash = :hash";
                    $sql = $this->pdo->prepare($sql);
                    $sql->bindValue(":hash", $token);
                    $sql->execute();

                    header("Location: index.php");
                    exit;
                }
            }
        }
    }



}
