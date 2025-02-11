<?php

    class cinema{
        public $nome;
        public $comida;
        public $ingressos;
        public $local;
        public $filmes;

        public function filmes(){
            return "O"$this->filme. "foi escolido";
        }
        public function comida(){
            return "O"$this->comidas."foi escolido";
        }
        public function salas(){
            return "O"$this->acento ."foi escolido";
        }
       
    
    
    }

    $caracteristica1 = new cinema();
    $caracteristica1-> nome = "Cinemark";
    $caracteristica1-> comida = "pipoca";
    $caracteristica1-> ingressos = "inteira";
    $caracteristica1-> local = "são paulo";
    $caracteristica1-> filmes = "shrek";

    echo $caracteristica1 -> nome. "<br>";
    echo $caracteristica1 -> comida. "<br>";
    echo $caracteristica1 -> ingressos. "<br>";
    echo $caracteristica1 -> local. "<br>";
    echo $caracteristica1 -> filmes. "<br>";

?>