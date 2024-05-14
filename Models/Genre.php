<?php

//BONUS

//1.creo una classe Genre
class Genre{

    //2.dichiaro le prorpietà
    public $name;
    public $description;

    //3.dichiaro un metodo SETTER per impostarne il valore
    public function setName($_name){
        $this->name = $_name;
    }

    //4.dichiaro un metodo SETTER per impostarne il valore
    public function setDescription($_description){
        $this->description = $_description;
    }

    //5.dichiaro un metodo GETTER per importane il valore
    public function getName(){
        return $this->name;
    }
    
    //6.dichiaro un metodo GETTER per importane il valore
    public function getDescription(){
        return $this->description;
    }

}