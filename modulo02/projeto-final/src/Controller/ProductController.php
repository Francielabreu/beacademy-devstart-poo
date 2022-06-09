<?php

declare(strict_types=1);

namespace App\Controller;


class ProductController{

    public function listAction():void
    {
        include dirname(__DIR__).'/View/Product/Listar.php';
    }
    public function addAction():void
    {
        include dirname(__DIR__).'/View/Product/Adicionar.php';
    }
    public function editAction():void
    {
        include dirname(__DIR__).'/View/Product/Editar.php';
    }
}