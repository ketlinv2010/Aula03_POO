<?php

require_once 'Livro.php';
require_once 'Revista.php';

echo "<h2>Livros</h2>";

$livro1 = new Livro('Revolução dos Bichos', 1989, 'George Orwell');
$livro1->mostrarTitulo();
$livro1->mostrarLivro();

echo "<br>";

$livro2 = new Livro('Lucíola', 1889, 'José de Alencar');
$livro2->mostrarTitulo();
$livro2->mostrarLivro();

echo "<h2>Revistas</h2>";

$revista = new Revista('Vogue', 2010, 2.1);
$revista->mostrarTitulo();
$revista->mostrarRevista();
?>