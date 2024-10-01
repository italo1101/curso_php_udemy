<?php
    $conn = new mysqli("localhost", "root", "", "db_php");

    if ($conn->connect_error){
        echo "Error: " . $conn->connect_error;
    }

    $stmt = $conn->prepare("INSERT INTO tbusuarios (deslogin, dessenha) VALUES(?, ?)");
    
    $stmt->bind_param("ss", $login, $pass);

    $login = "user";
    $pass = "12345";

    $stmt->execute();

    $login = "user2";
    $pass = "12345678";
    $stmt->execute();
?>