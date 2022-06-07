<?php
include 'Usuario.php';
include 'Gestor.php';
include 'Cliente.php';


$c1 = new Cliente();
$c1->setNome('chiquinho');

$g1 = new Gestor();
$g1->setNome('pedrinho');

var_dump($c1);
var_dump($g1);