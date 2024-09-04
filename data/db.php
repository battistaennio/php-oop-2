<?php

require_once __DIR__ . '/../Models/Product.php';
require_once __DIR__ . '/../Models/Category.php';
require_once __DIR__ . '/../Models/Food.php';

$products = [

    new Food(
            "Crocchette Royal Canin"
            , 58.99, 
            "https://arcaplanet.vtexassets.com/arquivos/ids/288162/_0005_D-DERMA-HYPO-PACKSHOT-B1.jpg?v=638241437800970000",
            "Cibo Secco",
            [0, 1],
            10
    ),
];
