<?php

    class pessoa{
        public $cabelo;
        public $unha;
        public $roupa;
        public $nome;
        public $nascimento;

        public function come(){
            return "O"$this->comer. "foi escolido";
        }
        public function banho(){
            return "O"$this->banhar."foi escolido";
        }
        public function necessidades(){
            return "O"$this-> necessidades."foi escolido";
        }
       
    
    
    }

    $caracteristica1 = new pessoa();
    $caracteristica1-> cabelo = "curto";
    $caracteristica1-> unha = "comprida";
    $caracteristica1-> roupa = "vestido";
    $caracteristica1-> nome = "maria";
    $caracteristica1-> nascimento = "16/04/90";

    echo $caracteristica1 -> cabelo. "<br>";
    echo $caracteristica1 -> unha. "<br>";
    echo $caracteristica1 -> roupa. "<br>";
    echo $caracteristica1 -> nome. "<br>";
    echo $caracteristica1 -> nascimento. "<br>";

?>