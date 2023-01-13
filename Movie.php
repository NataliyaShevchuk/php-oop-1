<?php

class Movie{
    public $title;
    public $genre;
    public $releaseDate;

    /**
     * @param [string] $_title
     * @param [string] $_genre 
     */
    public function __constructor($_title, $_genre, $_releaseDate){
        $this->setTitle($_title);
        $this->setGenre($_genre);
        $this->randomReleaseDate($_releaseDate);

    }


    public function randomReleaseDate(){
        $day = random_int(min:1, max: 31);
        $month = random_int(min:1, max: 12);
        $year = random_int(min: 2023, max: 2050);

        $this->releaseDate= $day . "/" . $month . "/" . $year;

    }

    public function setTitle($_title){
        $this->title = $_title;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setGenre($_genre){
        $this->genre = $_genre;
    }

    public function getGenre(){
        return $this->genre;
    }
}