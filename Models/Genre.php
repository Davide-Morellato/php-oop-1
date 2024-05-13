<?php

//BONUS


//1.creo una classe Genre
class Genre{

    //2.dichiaro le prorpietà
    public $genre;
    public $description;

    //3.dichiaro un metodo SETTER per impostarne il valore
    public function setGenre($_genre){
        $this->genre = $_genre;
    }

    //4.dichiaro un metodo SETTER per impostarne il valore
    public function setDescription($_description){
        $this->genre = $_description;
    }

    //5.dichiaro un metodo GETTER per importane il valore
    public function getGenre(){
        $this->genre;
    }
    
    //6.dichiaro un metodo GETTER per importane il valore
    public function getDescription(){
        $this->description;
    }

}