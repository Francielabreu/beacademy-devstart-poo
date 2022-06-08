<?php
ini_set('display_errors',1);
include 'vendor/autoload.php';

use classes\config\Usuario; 
use classes\Categoria;
//$us2 = new UsuarioConfig;
//$us1 = new \classes\Usuario();

$us = new Usuario();
$ca = new Categoria();

//var_dump($us1);
var_dump($us);
var_dump($ca);
echo 'Funcionou!';