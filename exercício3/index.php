<?php

require_once 'Desenvolvedor.php';
require_once 'Gerente.php';

echo "<h2>Gerentes</h2>";

$gerente = new Gerente('Ketlin', 4068, 'Gerenciamento de Alimentos');
$gerente->exibirInformacoes();
$gerente->gerenciarEquipe();

echo "<h2>Desenvolvedores</h2>";

$desenvolvedor = new Desenvolvedor('Joana', 3980, 'PHP');
$desenvolvedor->exibirInformacoes();
$desenvolvedor->programar();

?>