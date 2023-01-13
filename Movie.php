<?php

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
    public function __constructor($_title, $_genre, $_releaseDate, $_vote){
        $this->setTitle($_title);
        $this->setGenre($_genre);
        $this->randomReleaseDate($_releaseDate);
        $this->setVote($_vote);
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