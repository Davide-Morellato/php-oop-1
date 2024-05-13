<?php
//
//BONUS
//includo la classe Genre
require_once __DIR__ . '/Genre.php';


//1.creo una classe Production 
class Production{

    //2.creo una Variabile d'Istanza pubblica (public)
    public $title;
    public $language;
    public $vote;

    //
    //BONUS
    //dichiaro la proprietà $genre e $description
    public $genre;
    public $description;

    //4.creo una funzione __construct per assegnare i valori alla classe
    //
    //BONUS
    //includo nel COSTRUTTORE la classe Genre con il rispettivo $_genre e $_description
    function __construct($_title, $_language, $_vote, Genre $_genre, Genre $_description)
    {
        //sfrutto il "$this->" per accedere alla variabile di istanza
        //per assegnargli un valore, passandoglielo come parametro,
        //dichiarato nella creazione dell'istanza [$istanza = new NomeClasse('valore1','valore2'....)]
        $this->title = $_title;
        $this->language = $_language;
        $this->vote = $_vote;

        //BONUS
        //richiamo la proprietà $genre e $description
        $this->genre = $_genre;
        $this->description = $_description;
    }
    
}