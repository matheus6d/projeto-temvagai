<?php include('conexao.php');

   
        if (!empty($titulo) || !empty($descricao) || !empty($valor) || !empty($categoria) ) {
        
             $sql = "UPDATE dados SET titulo= $titulo WHERE ID=$id";
             $sql = "UPDATE dados SET descricao= $descricao WHERE ID=$id";
             $sql = "UPDATE dados SET valor= $valor WHERE ID=$id";
            
            if ($conn->query($sql) === TRUE) {
                echo "";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        $conn->close();

        }



    ?>