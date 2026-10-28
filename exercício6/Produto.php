<?php

class Produto{
    protected string $nome;
    private float $preco;

    public function __construct($nome, $preco){
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function mostrarProduto(){
        echo "Produto: " . $this->nome . "<br>";
        echo "Preço: " . $this->preco . "<br>";
    }
}

?>