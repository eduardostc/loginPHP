<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>

  <body >
  <p><br><br></p>
    <div class="conainer mt-4">
        <div class="row align-items-center">
            <div class="col-md-10 mx-auto col-lg-5">
                <form name='login' class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="logar.php">
                 <div class="panel-heading text-center fst-normal" style="color: red">
                    <b>Acesso ao Sistema do Futuro do Marketing Digital com Inteligência Artificial</b>
                 </div>   
                 <br>
                    <div class="form-floating mb-3">
                        <input type="text" name="email" class="form-control" id="email" placeholder="E-mail"/>
                        <label for="email">E-mail</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha"/>
                        <label for="senha">Senha</label>
                    </div>
                     <button class="w-100 btn btn-lg btn-danger" type="submit">Entrar</button>
                 <!-- <button type="button" class="btn btn-primary autenticar col-8">Entrar</button>-->
                 <ul class="navbar-nav" >
                    <a class="nav-link text-center" href="novo-usuario.php?page=novo" style="color: red" >Casdastrar</a>
                </ul>
                <a class="nav-link text-center" href="recuperar_senha.php?page=recuperar" style="color: red" >Esqueceu a Senha</a>
                </form>
            </div>
        </div>
    </div>
<!-- Configuração de acordo com o video https://www.youtube.com/watch?v=BSqtIw_hW8M 14min-->
<div class="container">
    <div class="row">
        <div class="col mt-5">
        <?php
        include("bd.php");
                switch(@$_REQUEST["page"]){
                    case "novo":
                        //formulario
                        include("novo-usuario.php");
                        break;
                    case "recuperar":
                        //formulario
                        include("recuperar_senha.php");
                        break;
                    case "salvar":
                        include("salvar-usuario.php");
                        break;
                    case "mandar":
                        include("mandar-senha.php");
                        break;
                }
            ?>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>