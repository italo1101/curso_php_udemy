<?php
    require_once("config.php");

    use Cliente\Cadastro;

    $cad = new Cadastro();

    $cad->setName("djalma Sindeaux");
    $cad->setEmail("djalma@gmail.com");
    $cad->setPassword("123456789");

    $cad->registrarVenda()
?>

