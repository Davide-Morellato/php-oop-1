<?php

//includo i file contenenti: la classe; le istanze; l'array
//include_once __DIR__ . 'percorso_file.php'
require_once __DIR__ . '/Models/Production.php';

require_once __DIR__ . '/db_istanze.php';

?>



<!-- STAMPO IN PAGINA -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Films</title>
</head>

<body>
    <header class="bg-deepblue text-white height-60 pt-3">
        <!-- includo l'header -->
        <?php include_once __DIR__ . '/Partials/header.php' ?>
    </header>

    <main class="mt-5">
        <section>
            <table class="table table-striped text-center w-50 mx-auto">
                <thead>
                    <tr class="text-danger">
                        <th scope="col">Titolo</th>
                        <th scope="col">Lingua</th>
                        <th scope="col">Voto (*/10)</th>
                        <th scope="col">Profitti ($)</th>
                        <th scope="col">Durata (min.)</th>
                        <th scope="col">Genere</th>
                        <th scope="col">Descrizione</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <!-- foreach($array as $elemento_singolo): scorro l'array $films as $film -->
                    <?php foreach ($films as $film) { ?>
                        <tr>
                            <th scope="row">
                                <!-- stampo i valori -->
                                <?= $film->title; ?>
                            </th>
                            <td>
                                <?= $film->language; ?>
                            </td>
                            <td>
                                <?= $film->vote; ?>
                            </td>
                            <td>
                                <?= $film->profit; ?>
                            </td>
                            <td>
                                <?= $film->length; ?>
                            </td>
                            <td>
                                <?= $film->genre->name; ?>
                            </td>
                            <td>
                                <?= $film->genre->getDescription(); ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>

        <section class="pt-4">
            <table class="table table-striped text-center w-50 mx-auto">
                <thead>
                    <tr class="text-danger">
                        <th scope="col">Titolo</th>
                        <th scope="col">Lingua</th>
                        <th scope="col">Voto (*/10)</th>
                        <th scope="col">stagioni</th>
                        <th scope="col">Genere</th>
                        <th scope="col">Descrizione</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <!-- foreach($array as $elemento_singolo): scorro l'array $films as $film -->
                    <?php foreach ($series as $serie) { ?>
                        <tr>
                            <th scope="row">
                                <!-- stampo i valori -->
                                <?= $serie->title; ?>
                            </th>
                            <td>
                                <?= $serie->language; ?>
                            </td>
                            <td>
                                <?= $serie->vote; ?>
                            </td>
                            <td>
                                <?= $serie->seasons; ?>
                            </td>
                            <td>
                                <?= $serie->genre->getName(); ?>
                            </td>
                            <td>
                                <?= $serie->genre->description; ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
    </main>

    <footer class="bg-deepblue text-white height-60 pt-3">
        <!-- includo il footer -->
        <?php include_once __DIR__ . '/Partials/footer.php' ?>
    </footer>
</body>

</html>