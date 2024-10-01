<?php
    $conn = new PDO("mysql:host=localhost;dbname=db_php", "root", "");

    $stmt = $conn->prepare("UPDATE tb_usuarios SET DesLogin = :LOGIN, DesSenha = :PASSWORD WHERE IdUsuario = :ID");

    $login = "David";
    $password = "12345";
    $id = 2;

    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD", $password);
    $stmt->bindParam(":ID", $id);

    $stmt->execute();

    echo "Dados Alterados";
?>