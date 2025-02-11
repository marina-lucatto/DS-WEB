<?php

    class conta{
        public $deposito;
        public $saldo;
        public $saque;
        public $nome;
        public $numconta;

        public function sacar(){
            return "seu saque"$this->saque. "foi aprovado";
        }
        public function depositar(){
            return "seu deposito"$this->deposito."foi aprovado";
        }
        public function saldo(){
            return "seu saldo é"$this->contadinherio .",00";
        }
       
    
    
    }

    $caracteristica1 = new conta();
    $caracteristica1-> deposito = "1.300,00";
    $caracteristica1-> saldo = "15.000,00";
    $caracteristica1-> saque = "5.000,00";
    $caracteristica1-> nome = "Marina Lucatto Silva";
    $caracteristica1-> numconta = "0987654321";

    echo $caracteristica1 -> deposito. "<br>";
    echo $caracteristica1 -> saldo. "<br>";
    echo $caracteristica1 -> saque. "<br>";
    echo $caracteristica1 -> nome. "<br>";
    echo $caracteristica1 -> numconta. "<br>";
?>