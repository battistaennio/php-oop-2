<?php

require_once __DIR__ . '/../Models/Product.php';
require_once __DIR__ . '/../Models/Category.php';
require_once __DIR__ . '/../Models/Article.php';

$products = [

    new Article(
            "Crocchette Royal Canin", 
            58.99, 
            "https://arcaplanet.vtexassets.com/arquivos/ids/288162/_0005_D-DERMA-HYPO-PACKSHOT-B1.jpg?v=638241437800970000",
            "Cibo Secco",
            [0, "12 mesi"],
            10.00,
            new Category("Cane", '<i class="fa-solid fa-dog"></i>')

    ),

    new Article(
        "Monge Fresh Dog Lattina", 
        1.99, 
        "https://arcaplanet.vtexassets.com/arquivos/ids/226830/monge-fresh-cane-adult-maiale.jpg?v=637466528133900000",
        "Cibo Umido",
        [1, "tutte le età"],
        0.8,
        new Category("Cane", '<i class="fa-solid fa-dog"></i>')
    ),

    new Article(
        "Monge Fresh Dog Lattina", 
        1.99, 
        "https://arcaplanet.vtexassets.com/arquivos/ids/226830/monge-fresh-cane-adult-maiale.jpg?v=637466528133900000",
        "Cibo Umido",
        [1, "tutte le età"],
        0.8,
        new Category("Cane", '<i class="fa-solid fa-dog"></i>')
    ),


];
