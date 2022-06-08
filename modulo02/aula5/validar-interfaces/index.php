<?php

include 'validar.php';
include 'validarBR.php';

$br = new ValidarBR();
$br->validarDocumento('12312312323');

echo 'Funcionou!';