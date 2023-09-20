<!-- O codigo PHP abaixo serve para evitar de usuário acessar a pagina diretamente pela URL no navegador-->
<?php
    require 'verifica.php';
    //esse comando desconfigura o rediricionamento da pagina como tambem não popula o nome do usuário apos login.
    //require 'bd.php';

    if(isset($_SESSION['idusuario']) && !empty($_SESSION['idusuario'])): ?>

<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>O Futuro do Marketing Digital com IA</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
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
    <div class="container m-12 p-3">
      <div class="row">
        <div class="col-12" >
          <div class="card" style="background-color: #F2F2F2">          
          <main>
              <div class="container-fluid" style="background-color: #F2F2F2">
                <h5 class="mt-3" style="color: red">Olá <?php echo $nomeUser; ?>, Seja Bem-vindo!</h5>
              </div>
          </main>
            <div class="card-body" style="background-color: #F2F2F2">
              <h1 class="custom-title text-center" style="color: red">
                O Futuro do Marketing Digital com Inteligência Artificial
              </h1>
              <br />
              <br />
              <div>
                <div class="form-group mb-3 row">
                  <div class="my-3 col">
                    <label class="form-label" for="atuacao" style="color: red"
                      >Qual é a área de atuação da sua empresa?</label
                    >
                    <select class="form-select" name="atuacao" id="atuacao">
                      <option value="" selected>Selecione uma opção</option>
                      <option value="Agricultura">Agricultura</option>
                      <option value="Construção">Construção</option>
                      <option value="Educação">Educação</option>
                      <option value="Entretenimento">Entretenimento</option>
                      <option value="Manufatura">Manufatura</option>
                      <option value="Saúde">Saúde</option>
                      <option value="Serviços financeiros">
                        Serviços financeiros
                      </option>
                      <option value="Transporte">Transporte</option>
                      <option value="Turismo">Turismo</option>
                      <option value="Tecnologia da informação">
                        Tecnologia da informação
                      </option>
                      <option value="Varejo">Varejo</option>
                      <option value="Outros">Outros</option>
                    </select>
                  </div>
                  <div class="my-3 col">
                    <label
                      class="form-label"
                      for="principais_produtos"
                      style="color: red"
                      >Quais são os seus principais produtos ou serviços?</label
                    >
                    <select
                      class="form-select"
                      name="principais_produtos"
                      id="principais_produtos"
                    >
                      <option value="" selected>Selecione uma opção</option>
                      <option value="Agricultura">Agricultura</option>
                      <option value="Arquitetura">Arquitetura</option>
                      <option value="Bens de consumo">Bens de consumo</option>
                      <option value="Cinema">Cinema</option>
                      <option value="Construção civil">Construção civil</option>
                      <option value="Cursos online">Cursos online</option>
                      <option value="E-commerce">E-commerce</option>
                      <option value="Engenharia">Engenharia</option>
                      <option value="Entretenimento">Entretenimento</option>
                      <option value="Esportes">Esportes</option>
                      <option value="Hospitais">Hospitais</option>
                      <option value="Informatica">Informatica</option>
                      <option value="Investimentos">Investimentos</option>
                      <option value="Laboratórios">Laboratórios</option>
                      <option value="Música">Música</option>
                      <option value="Produtos industrializados">
                        Produtos industrializados
                      </option>
                      <option value="Restaurantes">Restaurantes</option>
                      <option value="Seguros">Seguros</option>
                      <option value="Serviços de TI">Serviços de TI</option>
                      <option value="Transporte">Transporte</option>
                      <option value="Turismo">Turismo</option>
                      <option value="Universidades">Universidades</option>
                      <option value="Outros">Outros</option>
                    </select>
                  </div>
                </div>

                <div class="form-group mb-3 row">
                  <div class="my-3 col">
                    <label class="form-label" for="desafios" style="color: red"
                      >Quais são os principais desafios que sua empresa
                      enfrenta?</label
                    >
                    <input
                      class="form-control"
                      type="text"
                      name="desafios"
                      id="desafios"
                    />
                  </div>
                  <div class="my-3 col">
                    <label class="form-label" for="objetivos" style="color: red"
                      >Qual é a missão da empresa?</label
                    >
                    <input
                      class="form-control"
                      type="text"
                      name="objetivos"
                      id="objetivos"
                    />
                  </div>
                </div>

                <div class="my-3 col">
                  <label
                    class="form-label"
                    for="prompt"
                    style="color: red; font-weight: bold;"
                    >Selecione o prompt desejado:</label
                  >
                  <select
                    class="form-select"
                    name="prompt"
                    id="prompt"
                  >
                    <option value="" selected>Selecione uma opção</option>
                    <option value="Faça um resumo das seguintes palavras chaves:">Resumo das palavras chaves</option>
                    <option value="Como ajudar as empresas a alcançar seus objetios conforme as seguintes informações:">Como ajudar as empresas a alcançar seus objetios conforme as seguintes informações:</option>
                    <option value="Faça um resumo, incluindo problema, objetivo e ação, em três linha de sugestões de ações baseadas nas seguintes palavras chaves:">Resumo, incluindo problema, objetivo e ação, em três linha de sugestões de ações baseadas nas palavras chaves que foram informada</option>
                                                            
                  </select>
                </div>

                <div class="form-group mb-3">
                  <label class="form-label" for="resultado" style="color: red; font-weight: bold;"
                    >Sugestão de como a inteligência artificial pode ajudar sua empresa:</label
                  >
                  <textarea
                    class="form-control"
                    name="resultado"
                    id="resultado"
                    cols="20"
                    rows="7"
                  ></textarea>
                </div>
                
                <div class="form-group text-center">
                  <button type="submit" class="btn btn-danger col-1" id="btn_enviar">
                    Enviar
                  </button>
                        <a href="logout.php"  class="btn btn-outline-danger col-1">
                          <span class="glyphicon glyphicon-ok img-circle text-primay btn-icon"></span>
                          Sair
                        </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      window.addEventListener('load', function () {
        const atuacao = document.querySelector('#atuacao');
        const principais_produtos = document.querySelector('#principais_produtos');
        const desafios = document.querySelector('#desafios');
        const objetivos = document.querySelector('#objetivos');
        const prompt = document.querySelector('#prompt');
        const resultado = document.querySelector('#resultado');
        const btn_enviar = document.querySelector('#btn_enviar');
        
        btn_enviar.addEventListener('click', function () {
          enviar_dados(
            atuacao.value, 
            principais_produtos.value, 
            desafios.value, 
            objetivos.value, 
            prompt.value
          );
          btn_enviar.setAttribute('disabled', 'true');
        });
        
        async function enviar_dados(
          atuacao,
          principais_produtos,
          desafios,
          objetivos,
          prompt
        ) {
          window.setTimeout(function () {
            btn_enviar.removeAttribute('disabled');
          }, 15000);
          var formdata = new FormData();
          formdata.append("atuacao", atuacao);
          formdata.append("principais_produtos", principais_produtos);
          formdata.append("desafios", desafios);
          formdata.append("objetivos", objetivos);
          formdata.append("prompt", prompt);
          var requestOptions = {
              method: 'POST',
              body: formdata,
              redirect: 'follow'
          };
          let resp = await fetch("./proxy.php", requestOptions);
          resp = await resp.json();
          if (resp?.result?.content !== null) {
            resultado.innerHTML = resp?.result?.content;
            btn_enviar.removeAttribute('disabled');
          }
        }
      });
    </script>
  </body>
</html>
<?php else: header("Location: login.php"); endif; ?>