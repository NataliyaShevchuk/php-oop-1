<?php

class Genre{

    public $arrayGenre;


    public function __construct($_arrayGenre){
        $this->arrayFunction($_arrayGenre);
    }

    public function arrayFunction(){
        $array = ["Adventure" => 1, "Horror" => 2, "Thriller" => 3 , "Animation" => 4, "Fantasy" => 5, "Western" => 6];

        $result = array_rand($array, 1);
        $this->arrayGenre = $result;
    }

}





?> 