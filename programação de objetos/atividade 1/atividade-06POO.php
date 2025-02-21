<?php

    class conta{
        public $deposito;
        public $saldo;
        public $saque;
        public $nome;
        public $numconta;

        public function salda(){
            return "O saldo é: R$" . $this->saldo;
        }
        public function depositar($deposito){
            $this ->saldo += $deposito;
            return "esse é seu novo saldo" . $this->saldo;

        }
        public function sacar($saque){
            $this -> saldo -= $saque;
            return "esse é seu novo saldo" . $this->saldo;

        }
    
    
    }

    $caracteristica1 = new conta();
    $caracteristica1-> deposito = 1.300;
    $caracteristica1-> saldo = 15.000;
    $caracteristica1-> saque = 5.000;
    $caracteristica1-> nome = "Marina Lucatto Silva";
    $caracteristica1-> numconta = "0987654321";

    echo $caracteristica1 -> deposito. "<br>";
    echo $caracteristica1 -> saldo. "<br>";
    echo $caracteristica1 -> saque. "<br>";
    echo $caracteristica1 -> nome. "<br>";
    echo $caracteristica1 -> numconta. "<br>";
?>