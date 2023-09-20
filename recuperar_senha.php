

<html lang="pt-BR">
  <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>Recuperar Senha</title>
            
            
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
  </head>


  <body >
      <form action="login.php?page=mandar" method="POST">
        <!--<input type="hidden" name="acao" value="recuperar">-->

    <div class="container m-12 p-3">
      <div class="row ">
        <div class="col-8 mx-auto " >
          <div class="card" style="background-color: #F2F2F2">          
            <div class="card-body" style="background-color: #F2F2F2">
              <h1 class="custom-title text-center" style="color: red">
              Recuperar de Senha
              </h1>
              <br />
                    
              <div>
                <div class="form-group mx-auto mb-3 row col-8">
                  <div class="my-3 col">
                       <label class="form-label" for="email" style="color: red"
                        >E-mail:</label
                        >
                        <input
                        class="form-control"
                        type="email"
                        name="email"
                        id="email"
                        />
                        
                  </div>                
                <div class="form-group text-center">
                  <button type="submit" class="btn btn-danger col-3" value="SendRecuperar" name="acao">
                    Recuperar
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