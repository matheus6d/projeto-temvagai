<html>
<head>
    <title>Alteração de vagas</title>
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
   .alterar{
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
        <a href="#inicio">Início</a>
        <a href="#sobre">Sobre</a>
        <a href="#locacoes">Locações</a>
        <a href="#contato">Contato</a>
      </div >

      <div class="alterar">

          <h3> Alterar </h3>

    <?php

            include('conexão.php');

            $sql = "SELECT * FROM dados";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

            echo "<table>";
            echo "<tr><td>ID</td><td>Titulo</td><td>Descrição</td><td>Valor</td><td>Categoria</td></tr>";


            while($row = $result->fetch_assoc()) {
                $id    = $row['ID'];
                $titulo  = $row['titulo'];
                $descricao = $row['descricao'];
                $valor = $row['valor'];
                $categoria = $row['categoria'];

                echo "<tr><td>$id</td><td>$titulo</td><td>$descricao</td><td>$valor</td><td>$categoria<td>
                    <a href='altera.php?ID=$id'>x</a>
                    </td></tr>";
            }

            echo "</table>";
            
            } else {
            echo "0 registros retornados";
            }
            $conn->close();
    ?>

    <br><br><br><br><br><br><br><br><br><br><br><br>
</div>

    <!-- RODAPÉ -->
    <footer>
          <p>Todos os direitos reservados</p>
      </footer>

</body>
</html>