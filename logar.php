<?php
//include "bd.php";
    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){
        
        require 'bd.php';
        require 'Usuario.class.php';

        $u = new Usuario();

        $email = $_POST['email'];
       // $email = mysqli_real_escape_string($pdo, $_POST['email']); //tratamento do SQL Injection
       // $senha = mysqli_real_escape_string($pdo, $_POST['senha']);
        $senha = addslashes($_POST['senha']);
        
       if($u->login($email, $senha) == true){
            if(isset($_SESSION['idusuario'])){
                header("Location: index.php");
            }else{
                header("Location: login.php");
            }
       }else{
        header("Location: login.php");
       }

    }else{
        header("Location: login.php");
    }
    
?>
