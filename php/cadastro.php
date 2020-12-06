
<? include('conexao.php');?>

<html>
    <head>
    <title>Cadastro de vagas</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/estilocadastro.css">
    <meta name="autores" content="Amanda, Matheus e Thalita">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>Resultados da pesquisa</title>

    </head>

    <style>

/*H1*/

.titulo{
  color:  #ff5e3a;
  text-align: center;
  margin-top: 3rem;
  margin-bottom: 2rem;
  font-size: 3rem;
}

/*Parágrafos*/

.paragrafo{
  margin-right: 200px;
  margin-left: 200px;
  color: #272e4f;
}

/*Subtítulo*/
.subtitulo{
  text-align: center;
  color: #b4b4b4;
}
   .cadastro{
  margin-top: 200px;
  margin-right: 200px;
  margin-left: 200px;
  font-size: 18px;
  color: #272e4f;
  background-color: #ffffff;
  border-radius: 20px;
}

/* RODAPE */

footer{
  bottom: 0;
  background-color: #ff5e3a;
  color: #FFF;
  width: 100%;
  height: 50px;    
  text-align: center;
  line-height: 50px;
  margin-bottom: 0px;
}

  </style>




<body>

 <!-- CONTEÚDO DE AVISO -->
    
 <div class="aviso">
        <span>Confira informações sobre à COVID-19</span> <a href="https://coronavirus.saude.gov.br/" class="avisobotao">SABER MAIS</a>
      </div>

    <!-- MENU --> 
    <div class="navbar">
        <img class="navlogo" src="../img/logo.png">
        <a href="index.html">Início</a>
        <a href="index.html">Sobre</a>
        <a href="index.html">Locações</a>
        <a href="index.html">Contato</a>
        
      </div >
   
    


    <?php
      $titulo = $descricao = $valor = $categoria = $imagem = "";
      $tituloEr = $descricaoEr = $valorEr = $categoriaEr = $imagemEr = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["titulo"])) {
          $tituloEr = "É obrigatório informar titulo.";
        } else {
          $titulo = test_input($_POST["titulo"]);
        }

        if (empty($_POST["imagem"])) {
          $imagemEr = "";
        } else {
          $imagem = test_input($_POST["imagem"]);
        }

        if (empty($_POST["valor"])) {
          $valorEr = "É obrigatório informar o valor.";
        }else {
          $valor = test_input($_POST["valor"]);
        }

        if (empty($_POST["descricao"])) {
          $descricaoEr = "É obrigatório informar a descrição.";
        } else {
          $descricao = test_input($_POST["descricao"]);
        }

        if (empty($_POST["categoria"])) {
          $categoriaEr = "É obrigatório informar a categoria.";
        } else {
          $categoria = test_input($_POST["categoria"]);
        }
      }

      function test_input($teste) {
        $teste = trim($teste);
        $teste = stripslashes($teste);
        $teste = htmlspecialchars($teste);
        return $teste;
      }

    ?>

      <div class="cadastro">

      <h3> CADASTRO </h3>
      <p>(*) Campos obrigatórios</p><br>

      <form name = "cadastro" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validaForm(this);">
            Titulo: <input type="text" name="titulo">
                    <span>* <?php echo $tituloEr;?></span>
                    <br><br>
            
            Descrição: <br><textarea name="descricao" rows="5" cols="40"></textarea>
                      <span>* <?php echo $descricaoEr;?></span>
                      <br><br>

            Valor: <input type="text" name="valor">
                  <span>* <?php echo $valorEr;?></span>
                  <br><br>
            
            Categoria:<input type="radio" name="categoria" value="Casa">Casa
                      <input type="radio" name="categoria" value="Apartamento">Apartamento
                      <span>* <?php echo $categoriaEr;?></span>
                      <br><br>
            
          
            Imagem: <input type="file" name="foto_filme" size="50">
            <br><br>
            
            <input type="submit" name="submit" value="Enviar" >
        </form>

    </div>

        <? include('inserir.php');?>

      <br><br><br>

        
      <footer>
      <p>Todos os direitos reservados</p>
     </footer>

     <script>
     
      
      function validaForm(frm) {
      /*
      o parâmetro frm desta função significa: this.form,
      pois a chamada da função - validaForm(this) foi
      definida na tag form.
      */
          //Não receber titulo vazio
          if(frm.titulo.value == "") {
              alert("Por favor, preencha o título!");
              frm.titulo.focus();
              return false;
          }
      
          //Não receber titulo numero
          if(!isNaN(frm.titulo.value)) {
              alert("Por favor, não preencher com número!");
              frm.titulo.focus();
              return false;
          } 
      
         //Não receber titulo vazio
         if(frm.descricao.value == "") {
              alert("Por favor, preencha a descrição!");
              frm.descricao.focus();
              return false;
          }

          //Não receber valor vazio
          if(frm.valor.value == "") {
              alert("Por favor, preencha o valor!");
              frm.valor.focus();
              return false;
          }
          
          }
      
        
      
      </script>
        
        
</body>
</html>