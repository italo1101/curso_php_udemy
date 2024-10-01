<?php
    $conn = new PDO("mysql:host=localhost;dbname=db_php", "root", "");

    $conn->beginTransaction();

    $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE IdUsuario = ?");

    $id = 3;

    $stmt->execute(array($id));

    $conn->commit();

    echo "Dados deletados";
?>