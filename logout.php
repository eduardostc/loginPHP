<?php
 session_start();
 //session_destroy();
 unset($_SESSION['idusuario']);
 header("Location: login.php");
 //exit;
?>