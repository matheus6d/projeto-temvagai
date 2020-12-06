    <?php

        include('conexao.php');
        $id = $_GET['ID'];

    
        $sql = "DELETE FROM dados WHERE ID=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Record removed successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

        header("Location: remover.php");
        exit();

    ?>