<?php

    $id = (isset($_GET["id"]))?$_GET["id"]:4;

    if(!is_numeric($id) || strlen($id) > 5){
        exit("bloqueado");
    }

    $conn = mysqli_connect("localhost", "root", "", "db_php");

    $sql = "SELECT * FROM tb_usuarios WHERE IdUsuario = $id";

    $exec = mysqli_query($conn, $sql);

    while($resultado = mysqli_fetch_object($exec)){
        echo $resultado->DesLogin . "<br>";
    }
?>