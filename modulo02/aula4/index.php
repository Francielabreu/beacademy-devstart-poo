<?php
include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';



$c1 = new Cliente('chiquinho@gmail.com','123456',1500);
$c1->setNome('chiquinho');
$c1->setDataCadastro('01/01/2021');

$g1 = new Gestor('pedrinho@gmail.com','123456',1500);
$g1->setNome('pedrinho');
$g1->setSalario(1500);

$gg1 = new GestorGeral('gestor@gmail.com','123456',3000);
$gg1->setBonusAnual(7000);

$cpf = "123456789";
Validar::validarCpf($cpf);
$c1->setCpf($cpf);

var_dump($c1);
//var_dump($g1);
//var_dump($gg1);