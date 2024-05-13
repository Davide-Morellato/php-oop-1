<?php

    //1.creo la classe TvSeries
    class TvSeries extends Production{

         //2.dichiaro le variabili
        public $seasons;

        
        //3.creo un metodo SETTER per impostare il valore
        public function setSeasons($_seasons){
            $this->seasons = $_seasons;
        }

        //4.creo un metodo GETTER per invocare il valore
        public function getSeasons(){
            return $this->seasons;
        }

    }