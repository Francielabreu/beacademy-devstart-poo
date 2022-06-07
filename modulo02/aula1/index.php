<?php
include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';

$aluno = new Aluno();
$aluno->nome = 'Alessandro';
$aluno->cpf = '123.123.123-12';



$cursoPHP = new Curso();
$cursoPHP->nome = 'Introução ao PHP';
$cursoPHP->cargaHoraria = 80;
$cursoPHP->descricao = 'PHP do basico ao Avançado';


echo "O aluno {$aluno->nome} esta fazendo o Curso de {$cursoPHP->nome} com a duração de {$cursoPHP->cargaHoraria} horas, pois o curso e de {$cursoPHP->descricao}";

