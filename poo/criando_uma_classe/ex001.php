<?php
    class Pessoa{
        // Atributo
        public $nome;

        // Método
        public function falar(){
            return "O meu nome é " . $this->nome;
        }
    }

    $marcelo = new Pessoa();
    $marcelo->nome = "Marcelo seduc";
    echo $marcelo->falar();
?>