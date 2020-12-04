
<html>
    <head>
      <title>Remoção de vagas</title>
    </head>
<body>
        
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
                <a href='remove.php?ID=$id'>x</a>
                </td></tr>";
        }

        echo "</table>";
        
        } else {
        echo "0 registros retornados";
        }
        $conn->close();
?>

</body>
</html>