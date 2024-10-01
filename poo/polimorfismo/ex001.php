<?php
    abstract class Animal{
        public function falar(){
            return "som";
        }

        public function mover(){
            return "Anda";
        }
    }

    class Cachorro extends Animal{
        public function falar(){
            return "Late";
        }
    }

    class Gato extends Animal{
        public function falar(){
            return "Mia";
        }

        public function mover(){
            return "se arrasta";
        }
    }

    class Passaro extends Animal{
        public function falar(){
            return "bib bib";
        }

        public function mover(){
            return "voa e " . parent::mover();
        }
    }

    $papa_leguas = new Passaro();

    echo $papa_leguas->falar() . "<br>";
    echo $papa_leguas->mover() . "<br>";

    echo "---------------------------------------- <br>";
    

    $garfield = new Gato();
    echo $garfield->falar() . "<br>";
    echo $garfield->mover() . "<br>";

    echo "---------------------------------------- <br>";

    $pluto = new Cachorro();
    
    echo $pluto->falar() . "<br>";
    echo $pluto->mover() . "<br>";
    
?>