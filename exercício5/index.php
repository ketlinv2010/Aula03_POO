<?php

require_once 'Cachorro.php';
require_once 'Gato.php';

echo "<h2>Cachorros</h2>";

$cachorro = new Cachorro('Safira', 6, 'PitBull');
$cachorro->exibirInformacoes();
$cachorro->latir();

echo "<h2>Gatos</h2>";

$gato = new Gato('Mel', 3, 'Preto');
$gato->exibirInformacoes();
$gato->miar();

?>