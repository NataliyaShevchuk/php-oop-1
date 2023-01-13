<?php
require_once __DIR__ . "/Genre.php";

class Movie{
    public $title;
    public $genre;
    public $releaseDate;
    public $vote;

    /**
     * @param [string] $_title
     * @param [string] $_genre 
     * @param [number] $_vote
     */
    public function __construct($_title,  $_releaseDate, $_vote, Genre $genre = null){
        $this->setTitle($_title);
        $this->randomReleaseDate($_releaseDate);
        $this->setVote($_vote);
        $this->getGenre($genre);


        if ($genre) {
            $this->setGenre($genre);
        }
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

    public function randomReleaseDate(){
        $day = random_int(min:1, max: 31);
        $month = random_int(min:1, max: 12);
        $year = random_int(min: 2023, max: 2050);

        $this->releaseDate= $day . "/" . $month . "/" . $year;
    }

    public function setVote($_vote){
        $this->vote = $_vote;
    }


    public function getVote(){
        return $this->vote;
    }
}

?>