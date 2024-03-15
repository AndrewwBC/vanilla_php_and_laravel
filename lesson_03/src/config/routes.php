<?php

use Tsi\Php\controller\api\{Produto, Desconto};
use Tsi\Php\controller\web\Produto as WebProduto;

$routes = [
    'api' => [
        'produtos' => Produto::class,
        'descontos'=> Desconto::class,
    ],
    // 'web' => [
    //     'produtos' => WebProduto::class
    // ]
];