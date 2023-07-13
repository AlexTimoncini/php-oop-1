<?php
class Movie{
    public $title;
    public $genre;

    public function warning(){
        if($this->genre === 'Horror'){
            return 'You must be over 18 years old to watch this film!';
        }
        return 'Enjoy the film!';
    }

    function __construct($_title, $_genre) {
        $this->title = $_title;
        $this->genre = $_genre;
    }
}

$insidious = new Movie('Insidious', 'Horror');
echo $insidious->warning();

$mile8 = new Movie('8 mile', 'Rap Battle');
echo $mile8->warning();

var_dump($insidious, $mile8);