<?php

    if(isset($_POST['submit'])){
        // print_r('Nome : '. $_POST['nome']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $nomedesen1 = $_POST['nome_desen1'];
        $datadesencarne = $_POST['data_desen1'];
        $idade = $_POST['idade'];
        $parentesco = $_POST['parentesco'];
        $causa =$_POST['causa'];
        $motivo = $_POST['motivo'];

        $checkSenha = mysqli_query($conexao, "SELECT senha FROM informacoes WHERE senha='$senha' LIMIT 1");

    if(mysqli_num_rows($checkSenha) > 0) {
        // A senha já está em uso
        echo  "<script>alert('A senha digitada já está em uso, tente outra senha!');</script>";
    } else {
        // A senha ainda não está em uso, insere as informações no banco de dados
        
          
        
        $result = mysqli_query($conexao,"INSERT INTO informacoes(ID,nome,senha, nome_desen1, data_desen1, idade, parentesco,causa, motivo) 
        VALUES('','$nome','$senha','$nomedesen1','$datadesencarne','$idade','$parentesco','$causa','$motivo')");
        
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
            <input type="text" id="nome_desen1" name="nome_desen1" placeholder="Nome completo do Desencarnado" required>
          </div>
          <div class="col-75">
            <label for="data-nascimento">Data de Desencarne:</label>
            <input type="date" style="width: 60%;" id=" data_desen1" name=" data_desen1" placeholder="Data do desencarne" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" alt="Informe a data de desencarne" required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <input type="number" id="idade" name="idade" placeholder="Idade" required>
          </div>
          <div class="col-75">
            <input type="text" id="parentesco" name="parentesco" placeholder="Parentesco" required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="parentesco">Causa:</label>
            <label for="doenca">Doenca</label>
            <input type="radio" id="causa" name="causa" value="Doença" required>
            <label for="outro">Outro</label>
            <input type="radio" id="causa" name="causa" value="Outro" required>
          </div>
          <div class="col-75">
            <input type="text"  id="motivo" name="motivo" placeholder="Qual o motivo?">
          </div>
        </div>


          <!-- Outros desencarnados -->
          <div class="row">
          <input type="button" class="acrescenta" name="mostrar1" onclick="mostrar('ou_1')" value="Acrescentar mais um desencarnado">
        </div>
            <!-- 1  -->
          <div class= "hidden" id="ou_1">
            <div class="row">
                <div class="col-25">
                  <input type="text" id="nome_desen1" name="nome_desen1" placeholder="Nome completo do Desencarnado 2" >
                </div>
                <div class="col-75">
                  <label for="data-nascimento">Data de Desencarne:</label>
                  <input type="date" style="width: 60%;" id=" data_desen1" name=" data_desen1" placeholder="Data do desencarne" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" alt="Informe a data de desencarne" >
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <input type="text" id="parentesco" name="parentesco" placeholder="Parentesco" >
                  </div>
                  <div class="col-75">
                  </div>
                </div>
                <div class="row">
                <input type="button" class="acrescenta" name="mostrar1" onclick="mostrar('ou_2')" value="Acrescentar mais um desencarnado">
            </div>

                <!-- 2  -->
            <div class= "hidden" id="ou_2">
            <div class="row">
                <div class="col-25">
                  <input type="text" id="nome_desen1" name="nome_desen1" placeholder="Nome completo do Desencarnado 3">
                </div>
                <div class="col-75">
                  <label for="data-nascimento">Data de Desencarne:</label>
                  <input type="date" style="width: 60%;" id=" data_desen1" name=" data_desen1" placeholder="Data do desencarne" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" alt="Informe a data de desencarne" >
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <input type="text" id="parentesco" name="parentesco" placeholder="Parentesco" >
                  </div>
                  <div class="col-75">
                  </div>
                </div>
                <div class="row">
                <input type="button" class="acrescenta" name="mostrar1" onclick="mostrar('ou_3')" value="Acrescentar mais um desencarnado">
            </div>
            
          </div>

                <!-- 3 -->
                <div class= "hidden" id="ou_3">
            <div class="row">
                <div class="col-25">
                  <input type="text" class="acrescenta" id="nome_desen1" name="nome_desen1" placeholder="Nome completo do Desencarnado 4" >
                </div>
                <div class="col-75">
                  <label for="data-nascimento">Data de Desencarne:</label>
                  <input type="date" style="width: 60%;" id=" data_desen1" name=" data_desen1" placeholder="Data do desencarne" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" alt="Informe a data de desencarne" >
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <input type="text" id="parentesco" name="parentesco" placeholder="Parentesco" >
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

    
      
    </div>
    <div class="footer"> <h2>© 2023 Geeb Cristalina</h2></div>

  </body>
</html>
