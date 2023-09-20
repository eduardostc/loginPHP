<?php
//global $pdo;
     switch($_REQUEST["acao"]){
        case "cadastrar":
            $nome =  $_POST["nome"];
            $email =  $_POST["email"];
            $senha = md5($_POST["senha"]);
                        
            try{
                $query_sql = "INSERT INTO tb_login (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
                $sql = $pdo->prepare($query_sql);
                $sql->execute();
                mensagem ("$nome cadastro com sucesso!", 'success');
            }catch(PDOException $e){
                mensagem ("$nome não cadastro!", 'danger');
                //echo 'Falha no Cadastramento!';
                exit;
            }            
            break;
        case "editar":
            break;
        case "excluir":
            break;
    }
?>