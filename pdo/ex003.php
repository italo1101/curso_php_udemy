<?php
    $conn = new PDO("mysql:host=localhost;dbname=db_php", "root", "");

    $stmt = $conn->prepare("INSERT INTO tb_usuarios (DesLogin, DesSenha) VALUES(:LOGIN, :PASSWORD)");

    $login = "Marcelo";
    $password = "12345678";

    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD", $password);

    $stmt->execute();

    echo "Inserido ok!";
?>