<?php

class Movie{
    public $title;
    public $genre;
    public $releaseDate;

    public function __constructor(){

    }


    public function randomReleaseDate(){
        $day = random_int(min:1, max: 31);
        $month = random_int(min:1, max: 12);
        $year = random_int(min: 1000, max: 3000);

        $this->releaseDate= $day . "/" . $month . "/" . $year;

    }
}