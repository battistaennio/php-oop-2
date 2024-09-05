<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L’e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->


<?php

require_once __DIR__ . '/data/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoolandia</title>

    <link rel="stylesheet" href="style/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>

    <div id="wrapper">

        <?php foreach ($products as $product): ?>
            <div class="card">

                <img src="<?php echo $product->img ?>" alt="<?php echo $product->title ?> - copertina">

                <div class="card-details">

                    <div class="details-section">
                        <h2><?php echo $product->title ?></h2>
                    </div>

                    <div class="details-section">
                        <h4>Prezzo:</h4>
                        <span><?php echo $product->price ?> €</span>
                    </div>

                    <div class="details-section">
                        <h4>Categoria:</h4>
                        <span><?php echo $product->category->name ?> <?php echo $product->category->icon ?></span>
                    </div>

                    <div class="details-section">
                        <h4>Tipo:</h4>
                        <span><?php echo $product->type ?></span>
                    </div>

                    <?php if ($product instanceof Food): ?>

                        <div class="details-section">
                            <h4>Età:</h4>
                            <span>
                                Da <?php echo $product->ageRange[0] ?> a <?php echo $product->ageRange[1] ?>
                            </span>
                        </div>

                        <div class="details-section">
                            <h4>Peso Articolo:</h4>
                            <span><?php echo $product->weight ?> kg</span>
                        </div>

                    <?php elseif ($product instanceof Toy): ?>

                        <div class="details-section">
                            <h4>Materiale:</h4>
                            <span><?php echo $product->material ?></span>
                        </div>

                        <div class="details-section">
                            <h4>Adatto per:</h4>
                            <span><?php echo $product->lifeStage ?></span>
                        </div>

                    <?php elseif ($product instanceof Bed): ?>

                        <div class="details-section">
                            <h4>Forma:</h4>
                            <span><?php echo $product->shape ?></span>
                        </div>

                        <div class="details-section">
                            <h4>Dimensione:</h4>
                            <span><?php echo $product->size ?></span>
                        </div>

                    <?php endif; ?>

                </div>

            </div>
        <?php endforeach; ?>

    </div>
</body>

</html>