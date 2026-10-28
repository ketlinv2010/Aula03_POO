<?php

class ContaBancaria{
    protected string $titular;
    private float $saldo;


    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar($valor){
        $this->saldo = $this->saldo+$valor;

        echo "Depositado: R$" . $valor . "<br>";
    }

    public function sacar($valor){
        if($this->saldo > $valor){
            $this->saldo = $this->saldo - $valor;
            echo "Valor do saque: R$" . $valor . "<br>";
        }
        else{
            echo "Não é possível sacar este valor. Saldo Insuficiente!" . "<br>";
        } 
    }

    public function getSaldo(){
        return "Saldo atual: R$" . $this->saldo . "<br>";
    }

    public function exibirInformacoes(){
        echo "Titular: " . $this->titular . "<br>";
    }
}

?>