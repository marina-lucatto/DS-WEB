<?php

    class volei{
        public $bola;
        public $rede;
        public $jogadores;
        public $juiz;
        public $quadra;

        public function correr(){
            return "O"$this->corre. "foi escolido";
        }
        public function saltar(){
            return "O"$this->salta."foi escolido";
        }
        public function cair(){
            return "O"$this->cai."foi escolido";
        }
       
    
    
    }

    $caracteristica1 = new volei();
    $caracteristica1-> bola = "lapis";
    $caracteristica1-> rede = "moreli";
    $caracteristica1-> jogadores = "rosa";
    $caracteristica1-> juiz = "100gramas";
    $caracteristica1-> quadra = "60canetas";

    echo $caracteristica1 -> bola. "<br>";
    echo $caracteristica1 -> rede. "<br>";
    echo $caracteristica1 -> jogadores. "<br>";
    echo $caracteristica1 -> juiz. "<br>";
    echo $caracteristica1 -> quadra. "<br>";

?>