<?php

require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Genre.php';
require_once __DIR__ . '/Models/Movies.php';
require_once __DIR__ . '/Models/TvSeries.php';

//
//BONUS
//creo l'istanza richiamando 
$thriller = new Genre();
$thriller->setGenre('Thriller');
$thriller->getgenre();

$fantasy = new Genre();
$fantasy->setGenre('Fantasy');
$fantasy->getGenre();

$drama = new Genre();
$drama->setGenre('Drama');
$drama->getGenre();

$noir = new Genre();
$noir->setGenre('Noir');
$noir->getGenre();

$science_fiction = new Genre();
$science_fiction->setGenre('Science Fiction');
$science_fiction->getGenre();

$historic = new Genre();
$historic->setGenre('Historic');
$historic->getGenre();

$comedy = new Genre();
$comedy->setGenre('Comedy');
$comedy->getGenre();

$description = new Genre();
$description->setDescription('Lorem ipsum');
$description->getDescription();

//3.creo un'istanza richiamando la classe estesa e assegnandogli dei valori
//
//BONUS
//aggiungo la proprietà genre tra i valori
$following = new Movie('Following', 'ita', 7, $thriller, $description);
//imposto i parametri da inserire nell'istanza
$following->setProfit(100000);
$following->getProfit();
// var_dump($following);

// echo $following->title;
// echo $following->language;
// echo $following->vote;

$memento = new Movie('Memento', 'ita', 9, $drama, $description);
$memento->setProfit(50000);
$memento->getProfit();
// var_dump($memento);

$insomnia = new Movie('Insomnia', 'ita', 8, $noir, $description);
$insomnia->setProfit(70000);
$insomnia->getProfit();

$batman_begins = new Movie('Batman Begins', 'ita', 8, $fantasy, $description);

$the_prestige = new Movie('The Prestige', 'ita', 7, $thriller, $description);

$the_dark_knight = new Movie('The Dark knight', 'ita', 9, $fantasy, $description);

$inception = new Movie('Inception', 'ita', 8, $thriller, $description);

$the_dark_knight_rises = new Movie('The Dark Knight Rises', 'ita', 8, $fantasy, $description);

$interstellar = new Movie('Interstellar', 'ita', 8, $science_fiction, $description);

$dunkirk = new Movie('Dunkirk', 'ita', 7, $historic, $description);

$tenet = new Movie('Tenet', 'ita', 7, $thriller, $description);

$oppenheimer = new Movie('Oppenheimer', 'ita', 9, $science_fiction, $description);


//5.creo un array vuoto in cui inserire i vari titoli
$films = [];

//6.pusho le istanze [$istanza = new Classe('valore'...)] all'interno dell'array
array_push($films, $following, $memento, $insomnia, $batman_begins, $the_prestige, $the_dark_knight, $inception, $the_dark_knight_rises, $interstellar, $dunkirk, $tenet, $oppenheimer);
// var_dump($films);



//creo un array vuoto in cui inserire i vari titoli
$scrubs = new TvSeries('Scrubs', 'ita', 8, $comedy, $description);
$scrubs->setSeasons(9);
$scrubs->getSeasons();

$the_breaking_bad = new TvSeries('The Breaking Bad', 'ita', 8, $thriller, $description);
$the_breaking_bad->setSeasons(5);
$the_breaking_bad->getSeasons();
//pusho le istanze [$istanza = new Classe('valore'...)] all'interno dell'array
$series = [];
array_push($series, $scrubs, $the_breaking_bad);


