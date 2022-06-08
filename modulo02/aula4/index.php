<?php
include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';



$c1 = new Cliente('chiquinho@gmail.com','123456',1500);
$c1->setNome('chiquinho');
$c1->setDataCadastro('01/01/2021');

$g1 = new Gestor('pedrinho@gmail.com','123456',1500);
$g1->setNome('pedrinho');
$g1->setSalario(1500);

var_dump($c1);
var_dump($g1);