<?php

require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Genre.php';
require_once __DIR__ . '/Models/Movies.php';
require_once __DIR__ . '/Models/TvSeries.php';

//
//BONUS
//creo l'istanza richiamando la classe Genre
$thriller = new Genre();

//imposto i valori sia della proprietà $name sia della proprietà description attraverso i rispettivi metodi [$istanza->metodo_SETTER('valore')]
$thriller->setName('Thriller');
$thriller->setDescription('Michelino Jackson: "Sò de Latina!" (Thriller)');


$fantasy = new Genre();
$fantasy->setName('Fantasy');
$fantasy->setDescription('Lorem ipsum Fantasy');

$drama = new Genre();
$drama->setName('Drama');
$drama->setDescription('Lorem ipsum Drama');

$noir = new Genre();
$noir->setName('Noir');
$noir->setDescription('Lorem ipsum Noir');

$science_fiction = new Genre();
$science_fiction->setName('Science Fiction');
$science_fiction->setDescription('Lorem ipsum Science Fiction');

$historic = new Genre();
$historic->setName('Historic');
$historic->setDescription('Lorem ipsum Historic');

$comedy = new Genre();
$comedy->setName('Comedy');
$comedy->setDescription('Lorem ipsum Comedy');

//3.creo un'istanza richiamando la classe estesa e assegnandogli dei valori
//
//BONUS
//aggiungo l'istanza della classe Genre tra i valori della classe Production estesa dalla Classe Movie
$following = new Movie('Following', 'ita', 7, $thriller);

//imposto i parametri da inserire nell'istanza
$following->setProfit(100000);
$following->setLength(140);
// var_dump($following);


$memento = new Movie('Memento', 'ita', 9, $drama);
$memento->setProfit(50000);
$memento->setLength(160);
// var_dump($memento);

$insomnia = new Movie('Insomnia', 'ita', 8, $noir);
$insomnia->setProfit(70000);
$insomnia->setLength(150);


$batman_begins = new Movie('Batman Begins', 'ita', 8, $fantasy);

$the_prestige = new Movie('The Prestige', 'ita', 7, $thriller);

$the_dark_knight = new Movie('The Dark knight', 'ita', 9, $fantasy);

$inception = new Movie('Inception', 'ita', 8, $thriller);

$the_dark_knight_rises = new Movie('The Dark Knight Rises', 'ita', 8, $fantasy);

$interstellar = new Movie('Interstellar', 'ita', 8, $science_fiction);

$dunkirk = new Movie('Dunkirk', 'ita', 7, $historic);

$tenet = new Movie('Tenet', 'ita', 7, $thriller);

$oppenheimer = new Movie('Oppenheimer', 'ita', 9, $science_fiction);


//5.creo un array vuoto in cui inserire i vari titoli
$films = [];

//6.pusho le istanze interno dell'array [array_push($array, $istanza1, $istanza2.....)]
array_push($films, $following, $memento, $insomnia, $batman_begins, $the_prestige, $the_dark_knight, $inception, $the_dark_knight_rises, $interstellar, $dunkirk, $tenet, $oppenheimer);
// var_dump($films);

//
//
//
//creo le istante per la classe TvSeries
$scrubs = new TvSeries('Scrubs', 'ita', 8, $comedy);
$scrubs->setSeasons(9);

$the_breaking_bad = new TvSeries('The Breaking Bad', 'ita', 8, $thriller);
$the_breaking_bad->setSeasons(5);

//creo un array vuoto in cui inserire i vari titoli
//pusho le istanze all'interno dell'array [array_push($array, $istanza1, $istanza2.....)]
$series = [];
array_push($series, $scrubs, $the_breaking_bad);


