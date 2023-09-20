<?php
    require 'bd.php';

    if(isset($_SESSION['idusuario']) && !empty($_SESSION['idusuario'])){
        
        require_once 'Usuario.class.php';
        $u = new Usuario();
        $listLogged = $u->logged($_SESSION['idusuario']);
        $nomeUser = $listLogged['nome'];

    }else{
      //  echo ("não logou");
        header("Location: login.php");
    }
?>
