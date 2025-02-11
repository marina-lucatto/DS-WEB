<?php

    class cozinha{
        public $armario;
        public $panela;
        public $talheres;
        public $pia;
        public $geladeira;

        public function cozinha(){
            return "O"$this->cozinhar. "foi escolido";
        }
        public function armazena(){
            return "O"$this->armazenar."foi escolido";
        }
        public function limpa(){
            return "O"$this->limpar."foi escolido";
        }
       
    
    
    }

    $caracteristica1 = new cozinha();
    $caracteristica1-> armario = "Modulado";
    $caracteristica1-> panela = "frigideira";
    $caracteristica1-> talheres = "garfo";
    $caracteristica1-> pia = "inox";
    $caracteristica1-> geladeira = "duas portas";

    echo $caracteristica1 -> armario. "<br>";
    echo $caracteristica1 -> panela. "<br>";
    echo $caracteristica1 -> talheres. "<br>";
    echo $caracteristica1 -> pia. "<br>";
    echo $caracteristica1 -> gelaeira. "<br>";

?>