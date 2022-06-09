<?php
ini_set('display_errors',1);
include 'vendor/autoload.php';

use classes\config\Usuario; 
use classes\Categoria;
use Dompdf\Dompdf;




// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('hello world');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();