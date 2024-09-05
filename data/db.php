<?php

require_once __DIR__ . '/../Models/Product.php';
require_once __DIR__ . '/../Models/Category.php';
require_once __DIR__ . '/../Models/Food.php';
require_once __DIR__ . '/../Models/Bed.php';
require_once __DIR__ . '/../Models/Toy.php';


$products = [

    new Food(
        "Crocchette Royal Canin",
        58.99,
        "https://arcaplanet.vtexassets.com/arquivos/ids/288162/_0005_D-DERMA-HYPO-PACKSHOT-B1.jpg?v=638241437800970000",
        "Cibo",
        [0, "12 mesi"],
        10.00,
        new Category("Cane", '<i class="fa-solid fa-dog"></i>')

    ),

    new Food(
        "Monge Fresh Dog Lattina",
        1.99,
        "https://arcaplanet.vtexassets.com/arquivos/ids/226830/monge-fresh-cane-adult-maiale.jpg?v=637466528133900000",
        "Cibo",
        [1, "tutte le età"],
        0.8,
        new Category("Cane", '<i class="fa-solid fa-dog"></i>')
    ),

    new Toy(
        "Piuma con Silvervine",
        4.05,
        "https://arcaplanet.vtexassets.com/arquivos/ids/271992/croci-euphoria-bacchetta-silvervine.jpg?v=637896678260630000",
        "Gioco",
        "Tessuto",
        "Cuccioli",
        new Category("Gatto", '<i class="fa-solid fa-cat"></i>')
    ),

    new Toy(
        "Palla Gomma Squeaker",
        4.14,
        "https://arcaplanet.vtexassets.com/arquivos/ids/205592/Camon-palla-cane-8-cm-in-gomma-con-squeaker.jpg?v=637413929975030000",
        "Gioco",
        "Plastica",
        "Adulti",
        new Category("Cane", '<i class="fa-solid fa-dog"></i>')
    ),

    new Bed(
        "Materasso Royal Blu",
        65.99,
        "https://arcaplanet.vtexassets.com/arquivos/ids/276554/luna-e-teo-cuccia-royal-blu.jpg?v=638034254184470000",
        "Cuccia",
        "Quadrato",
        "Grande",
        new Category("Cane", '<i class="fa-solid fa-dog"></i>')
    ),

    new Bed(
        "Letto Teddy",
        14.39,
        "https://arcaplanet.vtexassets.com/arquivos/ids/278613/Teddy-grigio.jpg?v=638088607889100000",
        "Cuccia",
        "Ovale",
        "Piccolo",
        new Category("Gatto", '<i class="fa-solid fa-cat"></i>')
    ),

];
