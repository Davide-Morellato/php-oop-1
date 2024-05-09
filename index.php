<?php

//includo i file contenenti: la classe; le istanze; l'array
//include_once __DIR__ . 'percorso_file.php'
include_once __DIR__ . '/models.php';

include_once __DIR__ . '/db.php';

include_once __DIR__ . '/array.php';

?>



<!-- STAMPO IN PAGINA -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Films</title>
</head>

<body>
    <main class="mt-5">
        <table class="table table-striped text-center w-50 mx-auto">
            <thead>
                <tr class="text-danger">
                    <th scope="col">Titolo</th>
                    <th scope="col">Lingua</th>
                    <th scope="col">Voto (*/10)</th>
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
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
</body>

</html>