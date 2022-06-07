<?php
include 'Produto.php';


/*
$produto1 = new Produto();
$produto1->nome = 'Tenis para corrida';
$produto1->valor = 299;


$produto2 = new Produto();
$produto2->nome = 'Mochila';
$produto2->valor = 100;

*/

$produto3 = new Produto();
$produto3->alterarNome('Raquete de mata mosquito');
$produto3->alterarValor(20);

var_dump($produto3);

