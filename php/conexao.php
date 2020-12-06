<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
       // die("Connection failed: " . $conn->connect_error);
    
    } else {
         //echo "Connected successfully";
         //$conn -> select_db("sin143");
        if($conn -> select_db('sin143') == false){
            echo "Deu erro na conexão com banco de dados";
        }
    }  
?>