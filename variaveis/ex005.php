<?php
    $nome = "Marcelo";

    function teste(){
        global $nome;
        echo $nome;
    }

    function teste2(){
        $nome = "David";
        echo $nome. " teste2";
    }

    teste2();
    teste();
?>