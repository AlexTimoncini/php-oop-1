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
    public $genre;

    function __construct($_title, Genre $_genre) {
        $this->title = $_title;
        $this->genre = $_genre;
    }
}



$insidious = new Movie('Insidious', new Genre('Horror', 'Thriller'));

$mile8 = new Movie('8 mile', new Genre('Documentary', 'Rap Battlee'));


var_dump($insidious, $mile8);