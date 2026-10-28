<?php

require_once "ContaCorrente.php";
require_once "ContaPoupanca.php";

echo "<h2>Conta Corrente</h2>";

$conta1 = new ContaCorrente('Ketlin', 1000,'12344');
$conta1->exibirInformacoes();
$conta1->mostrarCartao();
$conta1->depositar(500);
$conta1->sacar(200);
$conta1->getSaldo();

echo "<h2>Conta Poupança</h2>";

$conta2 = new ContaPoupanca('Madalena', 1050, 'Compra pão');
$conta2->exibirInformacoes();
$conta2->mostrarObjetivo();

?>