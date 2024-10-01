<?php
    function incluirClasses($nomeClasse){
        spl_autoload_register(function($nomeClasse){
            if (file_exists("abstratas" . DIRECTORY_SEPARATOR .  $nomeClasse . ".php") === true){
                require_once($nomeClasse . ".php");
            } 
        });
    }    
    $carro = new DelRey();
    $carro->acelerar(80);
?>