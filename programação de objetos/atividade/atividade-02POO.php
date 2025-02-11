<?php

    class estojo{
        public $armazena;
        public $marca;
        public $cor;
        public $peso;
        public $capacidade;

        public function armazena(){
            return "O"$this->armazenar. "foi escolido";
        }
        public function abre(){
            return "O"$this->abrir."foi escolido";
        }
        public function fecha(){
            return "O"$this->fechar."foi escolido";
        }
       
    
    
    }

    $caracteristica1 = new estojo();
    $caracteristica1-> armazena = "lapis";
    $caracteristica1-> marca = "moreli";
    $caracteristica1-> cor = "rosa";
    $caracteristica1-> peso = "100gramas";
    $caracteristica1-> capacidade = "60canetas";

    echo $caracteristica1 -> armazena. "<br>";
    echo $caracteristica1 -> marca. "<br>";
    echo $caracteristica1 -> cor. "<br>";
    echo $caracteristica1 -> peso. "<br>";
    echo $caracteristica1 -> capacidade. "<br>";

?>