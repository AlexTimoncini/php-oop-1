<?php
class Genre{
    public $mainGenre;
    public $secondGenre;

    function __construct($_mainGenre, $_secondGenre) {
        $this->mainGenre = $_mainGenre;
        $this->secondGenre = $_secondGenre;
    }
}


class Movie{
    public $title;
    public Array $genre;

    function __construct($_title, Array $_genre) {
        $this->title = $_title;
        $this->genre = $_genre;
    }
}



$insidious = new Movie('Insidious', [new Genre('Horror','Splatter'), new Genre('Thriller', null)]);

$mile8 = new Movie('8 mile', [new Genre('Documentary','Splice of Life'),new Genre('Musical','Rap Battle')]);


var_dump($insidious);