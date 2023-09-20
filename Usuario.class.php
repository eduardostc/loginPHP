<?php
    class Usuario{
        
        public function login($email, $senha){
            global $pdo;

            $sql = "SELECT * FROM tb_login WHERE email = :email AND senha = :senha";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("email",$email);
            $sql->bindValue("senha", md5($senha));
            $sql->execute();

            if($sql->rowCount()>0){
                $dado = $sql->fetch();
                //echo $dado['usuario'];
                $_SESSION['idusuario'] = $dado['id'];
                return true;
            }else{
                return false;
            }
        }

        public function logged($id){
            global $pdo;

            $array = array();

            $sql = "SELECT nome FROM tb_login WHERE id = :idusuario";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("idusuario", $id);
            //$sql->execute();
            $sql->execute();

            if($sql->rowCount() > 0){
                $array = $sql->fetch();
            }
            return $array;
        }
    }

?>