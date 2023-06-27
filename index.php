<?php

    if(isset($_POST['submit'])){
        // print_r('Nome : '. $_POST['nome']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $n_des1 = $_POST['n_desen1'];
        $dt_des1 = $_POST['dt_desen1'];
        $idade = $_POST['idade'];
        $pa_des1 = $_POST['pa_desen1'];
        $causa =$_POST['causa'];
        $motivo = $_POST['motivo'];
        $autorizacao = $_POST['autorizacao'];
        $n_des2 = $_POST['n_desen2'];
        $dt_des2 = $_POST['dt_desen2'];
        $pa_des2 = $_POST['pa_desen2'];
        $n_des3 = $_POST['n_desen3'];
        $dt_des3 = $_POST['dt_desen3'];
        $pa_des3 = $_POST['pa_desen3'];
        $n_des4 = $_POST['n_desen4'];
        $dt_des4 = $_POST['dt_desen4'];
        $pa_des4 = $_POST['pa_desen4'];

        $checkSenha = mysqli_query($conexao, "SELECT senha FROM test_cartas WHERE senha='$senha' LIMIT 1");
       
        if (empty($dt_des2)) {
          $dt_des2 = null;
      }
      
      if (empty($dt_des3)) {
          $dt_des3 = null;
      }
      
      if (empty($dt_des4)) {
          $dt_des4 = null;
      }
        


    if(mysqli_num_rows($checkSenha) > 0) {
        // A senha já está em uso
        echo  "<script>alert('A senha digitada já está em uso!');</script>";
    } else {
        // A senha ainda não está em uso, insere as informações no banco de dados
        
          
        
        $result = mysqli_query($conexao,"INSERT INTO test_cartas(senha, nome, n_desen1, dt_desen1, idade, pa_desen1, causa, motivo, autorizacao, n_desen2, dt_desen2, pa_desen2, n_desen3, dt_desen3, pa_desen3, n_desen4, dt_desen4, pa_desen4) 
        VALUES('$senha','$nome','$n_des1','$dt_des1','$idade','$pa_des1','$causa','$motivo','$autorizacao','$n_des2','$dt_des2','$pa_des2','$n_des3','$dt_des3','$pa_des3','$n_des4','$dt_des4','$pa_des4')");
        
        if($result){
            echo "<script>alert('Informações inseridas com sucesso!');</script>";
        } else {
            echo "<script>Erro ao inserir informações</script>";
        }
    }
}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />
    <link rel="stylesheet" href="ondinha.css">
    
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Helvetica Neue:wght@400&display=swap"
    />
  </head>
    

  <body>
      
      <div class="background"></div>

            
      <div class="row">
          <div class="col-25">
            <h1>
              <span>Cartas</span>
              <span>consoladoras</span>
              <span class="year">2023</span>
            </h1>
          </div>
          <div class="col-75" >
            <a href="//www.geebcristalina.com.br"><img class="caminho-20-icon" alt="" src="public/caminho-20.svg"></img></a>
            <div class="cristalina-go">CRISTALINA - GO</div>
                <div class="cloud"></div>
                <div class="cloud2"></div>
                <div class="cloud3"></div> 
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            
            <img class="grupo-7-icon" alt="" src="public/grupo-7.svg" />
          </div>
          <div class="col-75">
          <div class='titulo-form'> Preencha o formulário para fazer sua inscrição </div>
          </div>
        </div>
      

    <div class="container">
      <form action="index.php" method="POST" id='form'>
        <div class="row">
          <div class="col-25">
            <input type="text" id="nome" name="nome" placeholder="Seu nome completo" required>
          </div>
          <div class="col-75">
            <input type="text" id="senha" name="senha" placeholder="Digite sua senha" required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <input type="text" id="n_desen1" name="n_desen1" placeholder="Nome completo do Desencarnado" required>
          </div>
          <div class="col-75">
            <label for="dt_desen1">Data de Desencarne:</label>
            <input type="date" style="width: 60%;" id=" dt_desen1" name=" dt_desen1" placeholder="Data do desencarne" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" alt="Informe a data de desencarne" required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <input type="number" id="idade" name="idade" placeholder="Idade" required>
          </div>
          <div class="col-75">
            <input type="text" id="pa_desen1" name="pa_desen1" placeholder="Parentesco" required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="causa">Causa:</label>
            <input type="radio" id="doenca" name="causa" value="Doença" required>
            <label for="doenca">Doenca</label>
            <input type="radio" id="outro" name="causa" value="Outro" required>
            <label for="outro">Outro</label>
          </div>
          <div class="col-75">
            <input type="text"  id="motivo" name="motivo" placeholder="Qual o motivo?" required>
          </div>
        </div>
        <div class="row">
          <label for="autorizacao"> Autorizo  o uso de imagem e vídeo para utilização nas redes sociais do GEEB:</label>
          
          <input type="radio" id="Sim" name="autorizacao" value="Sim" required>
          <label for="Sim">Sim</label>
          
          <input type="radio" id="Nao" name="autorizacao" value="Nao" required>
          <label for="Nao">Não</label>
       
      </div>


          <!-- Outros desencarnados -->
          <div class="row">
          <input type="button" class="acrescenta" name="mostrar1" onclick="mostrar('ou_1')" value="Acrescentar mais um desencarnado">
        </div>
            <!-- 2  -->
          <div class= "hidden" id="ou_1">
            <div class="row">
                <div class="col-25">
                  <input type="text" id="n_desen2" name="n_desen2" placeholder="Nome completo do Desencarnado 2" >
                </div>
                <div class="col-75">
                  <label for="dt_desen2">Data de Desencarne:</label>
                  <input type="date" style="width: 60%;" id=" dt_desen2" name="dt_desen2" placeholder="Data do desencarne" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" alt="Informe a data de desencarne" >
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <input type="text" id="pa_desen2" name="pa_desen2" placeholder="Parentesco" >
                  </div>
                  <div class="col-75">
                  </div>
                </div>
                <div class="row">
                <input type="button" class="acrescenta" name="mostrar1" onclick="mostrar('ou_2')" value="Acrescentar mais um desencarnado">
            </div>

                <!-- 3  -->
            <div class= "hidden" id="ou_2">
            <div class="row">
                <div class="col-25">
                  <input type="text" id="n_desen3" name="n_desen3" placeholder="Nome completo do Desencarnado 3">
                </div>
                <div class="col-75">
                  <label for="dt_desen3">Data de Desencarne:</label>
                  <input type="date" style="width: 60%;" id="dt_desen3" name="dt_desen3" placeholder="Data do desencarne" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" alt="Informe a data de desencarne" >
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <input type="text" id="pa_desen3" name="pa_desen3" placeholder="Parentesco" >
                  </div>
                  <div class="col-75">
                  </div>
                </div>
                <div class="row">
                <input type="button" class="acrescenta" name="mostrar1" onclick="mostrar('ou_3')" value="Acrescentar mais um desencarnado">
            </div>
            
          </div>

                <!-- 4 -->
                <div class= "hidden" id="ou_3">
            <div class="row">
                <div class="col-25">
                  <input type="text" id="n_desen4" name="n_desen4" placeholder="Nome completo do Desencarnado 4" >
                </div>
                <div class="col-75">
                  <label for="dt_desen4">Data de Desencarne:</label>
                  <input type="date" style="width: 60%;" id="dt_desen4" name="dt_desen4" placeholder="Data do desencarne" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" alt="Informe a data de desencarne" >
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <input type="text" id="pa_desen4" name="pa_desen4" placeholder="Parentesco" >
                  </div>
                  <div class="col-75">
                  </div>
                </div>
                
            
          </div>

              <!-- fecha aba de acrescentar -->
          </div>



        <!-- Botao enviar  -->

        <div class="row">
          <button type="submit" id="submit" name="submit" tabindex="{1}" value="Enviar" onclick="return confirmForm();">
            Enviar
          </button>
        </div>
      </form>

      <script >

        function mostrar(id){
            if(document.getElementById(id).style.display =='block'){
              document.getElementById(id).style.display = 'none';
            }else{
              document.getElementById(id).style.display = 'block';
            }
        }
      </script>
      
    </div>
    <div class="footer"> <h2>© 2023 Geeb Cristalina</h2></div>

  </body>
</html>
