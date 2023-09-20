<html lang="pt-BR">
  <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>Cadastrar Usuário</title>
            
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
                <link rel="stylesheet" href="css/bootstrap.min.css" />
                <link
                href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
                rel="stylesheet"
                integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
                crossorigin="anonymous"/> 

            <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"
            ></script>
            <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
            ></script>
            <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
            crossorigin="anonymous"
            ></script>     
            
            <script>
                function confereSenha(){
                    const senha = document.querySelector('input[name=senha]');
                    const confirma = document.querySelector('input[name=confirma]');

                    if(confirma.value === senha.value){
                        confirma.setCustomValidity('');
                    }else{
                        confirma.setCustomValidity('As senhas não conferem!');
                    }
                }
                
            </script>    
  </head>


  <body >
    <form action="login.php?page=salvar" method="POST" >
        <input type="hidden" name="acao" value="cadastrar">
    <div class="container m-12 p-3">
      <div class="row">
        <div class="col-8 mx-auto " >
          <div class="card" style="background-color: #F2F2F2">          
            <div class="card-body" style="background-color: #F2F2F2">
              <h1 class="custom-title text-center" style="color: red">
                Cadastrar Usuário
              </h1>
              <br />
              <div>
                <div class="form-group mx-auto mb-3 row col-8">
                  <div class="my-3 col">
                    <label class="form-label" for="nome" style="color: red"
                      >Nome Completo:</label
                    >
                    <input require
                      class="form-control"
                      type="text"
                      name="nome"
                     />
                    <label class="form-label" for="email" style="color: red"
                        >Informe seu e-mail:</label
                        >
                        <input require
                        class="form-control"
                        type="email"
                        name="email"
                        id="email"
                        />
                        <label class="form-label" for="senha" style="color: red"
                        >Informe a senha:</label
                        >
                        <input require onchange='confereSenha();'
                        class="form-control"
                        type="password"
                        name="senha"
                        id="senha"
                        />
                        <label class="form-label" for="confirma" style="color: red"
                        >Confirma a senha:</label
                        >
                        <input require onchange='confereSenha();'
                        class="form-control"
                        type="password" 
                        name="confirma"
                        id="confirma"
                        />
                  </div>                
                <div class="form-group text-center">
                  <button type="submit" class="btn btn-danger col-3">
                    Cadastrar
                  </button>
                        <a href="logout.php"  class="btn btn-outline-danger col-3">
                          <span class="glyphicon glyphicon-ok img-circle text-primay btn-icon"></span>
                          Voltar
                        </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>   
  </body>
</html>