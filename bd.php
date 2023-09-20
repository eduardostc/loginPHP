<?php
session_start();

    $host = '172.21.0.158:3306';
    $user = 'n8nworkflow';
    $password = 'Xncnoswo3834s09210sjkq3jhdsjxjf';
    $dbname = 'db_n8n_workflow';

    global $pdo;
  
  // SEGUINDO OS PASSOS A PASSOS DO VIDEO https://www.youtube.com/watch?v=M6oi90Q7gd8&list=PLGwqoftZstLY4t2rKI9VmVCrYxPtXtjY2&index=4
  //MODELO ESTRUTURAL DE CONEXÃO
  /* $conecta = mysqli_connect($host, $user, $password, $dbname);
    $sql = mysqli_query($conecta, "SELECT * FROM tb_login");
    echo "existem" . mysqli_num_rows($sql);*/

    //CONEXÃO MODELO PDO É ORIENTADO OBJETO
    try{
        $pdo = new PDO("mysql:dbname=".$dbname. "; host=".$host, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Erro: ".$e->getMessage();
        exit;
    }

    function mensagem($texto, $tipo){
        echo "<div class='alert alert-$tipo' role='alert'>$texto</div>";
    }
  
    //tratamento de caracteres especiais
    function clear($texto_puro){
        $texto = mysqli_real_escape_string($texto_puro);
        $texto = htmlspecialchars($texto);
        return $texto;
    }

?>