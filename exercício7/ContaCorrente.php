<?php

require_once "ContaBancaria.php";

class ContaCorrente extends ContaBancaria{
    private int $numeroCartao;

    public function __construct($titular, $saldo, $numeroCartao){
        parent::__construct($titular, $saldo);
        $this->numeroCartao = $numeroCartao;
    }

    public function mostrarCartao(){
        echo "Número do cartão: " . $this->numeroCartao . 
        "<br>";
        echo "Saldo: " . $this->getSaldo() . "<br>";
    }
}

?>