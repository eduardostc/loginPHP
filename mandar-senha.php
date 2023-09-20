
<?php
     switch($_REQUEST["acao"]){
        case "SendRecuperar":
            
        $email = $_POST["email"];
         

        try{
            if(!empty($email)){
                $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                var_dump($dados);
                //echo 'ok';
                $query_sql = "SELECT id, email FROM tb_login WHERE email =:email LIMIT 1";
                $sql = $pdo->prepare($query_sql);
               // $sql ->bindParam(':email', $email['email'], PDO::param_STR);
               $sql ->bindParam(':email', $dados['email'], PDO::param_STR);
                //$sql->bindValue(1, $email);
                $sql->execute();
                mensagem ("$nome Email ok com sucesso!", 'success');

            }else{
                echo 'campo vazio, Informe um e-mail';
            }

        }catch(PDOException $e){
            mensagem ("não foi possivel recuperar a senha!", 'danger');
            //echo 'Falha no Cadastramento!';
            exit;
        } 
    }
?>