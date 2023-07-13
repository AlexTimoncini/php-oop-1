<?php
// class Genre{
//     public $mainGenre;
//     public $secondGenre;

//     function __construct($_mainGenre, $_secondGenre) {
//         $this->mainGenre = $_mainGenre;
//         $this->secondGenre = $_secondGenre;
//     }
// }
class Movie{
    public $title;
    public Array $genre;

    function __construct($_title, Array $_genre) {
        $this->title = $_title;
        $this->genre = $_genre;
    }

    public function pegiChecker(){
        if(in_array("Horror", $this->genre))
            return 'Are you over 18 years old?';
        return 'Enjoy the film';
    }
}
$insidious = new Movie('Insidious', ['Horror','Splatter', 'Thriller']);
$mile8 = new Movie('8 mile', ['Documentary','Splice of Life', 'Musical','Rap Battle']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <div id="app">
        <div class="ivy_movies">
            <div class="ivy_movie">
                <h1>
                    <?php echo $insidious->title ?>
                </h1>
                <h2><?php echo implode(' -- ', $insidious->genre) ?></h2>
                <p><?php echo $insidious->pegiChecker()?></p>
            </div>
            <div class="ivy_movie">
                <h1>
                    <?php echo $mile8->title ?>
                </h1>
                <h2><?php echo implode(' -- ', $mile8->genre) ?></h2>
                <p><?php echo $mile8->pegiChecker()?></p>
            </div>
        </div>
    </div>
</body>
</html>