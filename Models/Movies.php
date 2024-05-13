<?php

    //1.creo la classe Movie ed estendo la classe Production
    class Movie extends Production{

        //2.dichiaro le variabili
        public $profit;
        public $length;

        //3.creo un metodo SETTER per impostare il valore
        public function setProfit($_profit){
            $this->profit = $_profit;
        }

        //4.creo un metodo GETTER per invocare il valore
        public function getProfit(){
            return $this->profit;
        }

    }