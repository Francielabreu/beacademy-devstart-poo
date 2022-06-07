<?php
include 'Produto.php';
include 'Categoria.php';

$categoria1 = new Categoria('Roupas','Roupas unisex');
$categoria2 = new Categoria('acessorios','carregador');


$produto1 = new Produto('Raquete',20, $categoria1);
//$produto1->setNome('Raquete de mata mosquito');
//$produto1->setValor(20);


$produto2 = new Produto('iphone 13',1200, $categoria2);
//$produto2->setNome('Celular iphone 13');
//$produto2->setValor(1200);

var_dump($produto1);
var_dump($produto2);
var_dump($categoria1);
var_dump($categoria2);

