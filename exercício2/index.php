<?php

require_once 'Carro.php';
require_once 'Moto.php';

$carro = new Carro('Chevrolet', 2010, 4 );
$carro->apresentarVeiculo();
$carro->mostrarCarros();

$moto = new Moto('Biz', 2007, 80);
$moto->apresentarVeiculo();
$moto->mostrarMoto();

?>