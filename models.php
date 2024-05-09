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