

<? include('conexao.php');?>
    
    <?php   
         if (!empty($titulo) || !empty($descricao) || !empty($valor) || !empty($categoria) ) {
          $sql = "INSERT INTO dados (titulo, descricao, valor, categoria) VALUES ('$titulo', '$descricao', '$valor', '$categoria')";

            if ($conn->query($sql) === TRUE) {
              echo "";
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }

          $conn->close();

        }
    ?>