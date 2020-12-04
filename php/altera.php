<?php include('conexão.php');
      $id = $_GET['ID'];
      $aux = "SELECT * FROM dados WHERE $id";
      $aux1= mysqli_query($conn, $aux);
      $row = mysqli_fetch_assoc($aux1);

?>

<html>
    <head>
      <title>Alteração de vagas</title>
    </head>
<body>
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

      <h3> ALTERAR </h3>
      <p>(*) Campos obrigatórios</p><br>

      <form name = "cadastro" method="post">
            Titulo: <input type="text" name="titulo" value="<? echo $row['titulo']?>">
                    <span>* <?php echo $tituloEr;?></span>
                    <br><br>
            
            Descrição: <input type="text" name="descricao" value="<? echo $row['descricao']?>">
                      <span>* <?php echo $descricaoEr;?></span>
                      <br><br>

            Valor: <input type="text" name="valor" value="<? echo $row['valor']?>">
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
        
        
        <? include('aa.php');?>
        
</body>
</html>