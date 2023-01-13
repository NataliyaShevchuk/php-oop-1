<?php

class Genre{
    //public $arrayGenre = ["Adventure", "Horror", "Thriller", "Animation", "Fantasy", "Western"];
    public $arrayGenre;

    /**
     * @param [array] $arrayGenre
     */

    public function __construct($_arrayGenre){
        $this->arrayFunction($_arrayGenre);
    }

    public function arrayFunction(){
        $array = ["Adventure" => 1, "Horror" => 2, "Thriller" => 3 , "Animation" => 4, "Fantasy" => 5, "Western" => 6];

        $result = array_rand($array, 1);
        $this->arrayGenre = $result;
    }



    // public function randomArray(){
        
    //     $randomEl = array_rand( $arrayGenre, 1);

    //     $this->arrayGenre = $randomEl;
    // }

}





?> 