<?php


//1.creo una classe Production 
class Production
{

    //2.creo una Variabile d'Istanza pubblica (public)
    public $title;
    public $language;
    public $vote;

    //4.creo una funzione __construct per assegnare i valori alla classe
    function __construct($_title, $_language, $_vote)
    {
        //sfrutto il "$this->" per accedere alla variabile di istanza
        //per assegnargli un valore, passandoglielo come parametro,
        //dichiarato nella creazione dell'istanza [$istanza = new NomeClasse('valore1','valore2'....)]
        $this->title = $_title;
        $this->language = $_language;
        $this->vote = $_vote;
    }
}


//3.creo un'istanza richiamando la classe e assegnandogli dei valori
$following = new Production('Following', 'italiano', 7);
// echo $following->title;
// echo $following->language;
// echo $following->vote;

$memento = new Production('Memento', 'italiano', 9);

$insomnia = new Production('Insomnia', 'italiano', 8);

$batman_begins = new Production('Batman Begins', 'italiano', 8);

$the_prestige = new Production('The Prestige', 'italiano', 7);

$the_dark_knight = new Production('The Dark knight', 'italiano', 9);

$inception = new Production('Inception', 'italiano', 8);

$the_dark_knight_rises = new Production('The Dark Knight Rises', 'italiano', 8);

$interstellar = new Production('interstellar', 'italiano', 8);

$dunkirk = new Production('Dunkirk', 'italiano', 7);

$tenet = new Production('Tenet', 'italiano', 7);

$oppenheimer = new Production('Oppenheimer', 'italiano', 9);



//5.creo un array vuoto in cui inserire i vari titoli
$films = [];

//6.pusho le istanze [$istanza = new Classe('valore'...)] all'interno dell'array
array_push($films, $following, $memento, $insomnia, $batman_begins, $the_prestige, $the_dark_knight, $inception, $the_dark_knight_rises, $interstellar, $dunkirk, $tenet, $oppenheimer);

// var_dump($films);

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
    <main class="p-5">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Lingua</th>
                    <th scope="col">Voto (*/10)</th>
                </tr>
            </thead>
            <tbody>
                <!-- foreach($array as $elemento_singolo) -->
                <?php foreach ($films as $film) { ?>
                    <tr>
                        <th scope="row">
                            <?php echo $film->title; ?>
                        </th>
                        <td>
                            <?php echo $film->language; ?>
                        </td>
                        <td>
                            <?php echo $film->vote; ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
</body>

</html>