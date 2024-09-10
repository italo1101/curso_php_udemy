<?php
    function ola($texto, $periodo = "Bom dia"){
        return "Olá $texto, $periodo! <br>";
        
    }


    echo ola("mundo");
    echo ola('');
    echo ola("Glaucio");
    echo ola("João");
?>