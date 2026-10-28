<?php

require_once 'ProdutoFisico.php';
require_once 'ProdutoDigital.php';

echo "<h2>Produto Físico</h2>";

$fisico = new ProdutoFisico('Sabão em Pó', 25.50, 2);
$fisico->mostrarProduto();
$fisico->mostrarPeso();

echo "<h2>Produto Digital</h2>";

$digital = new ProdutoDigital('Sabão de Pedra', 18.99, 108);
$digital->mostrarProduto();
$digital->mostrarTamanho();

?>