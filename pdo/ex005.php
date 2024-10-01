<?php
    $conn = new PDO("mysql:host=localhost;dbname=db_php", "root", "");

    $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE IdUsuario = :ID");

    $id = 2;

    $stmt->bindParam(":ID", $id);

    $stmt->execute();

    echo "Dados Deletados";
?>