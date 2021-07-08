<?php

class Movie {
    public $title;
    public $vote;

    function __construct($movieTitle) {
        $this->title = $movieTitle;
    }

    public function setVote($voteDecimal) {
        $this->vote = ceil($voteDecimal / 2);
    }
}

$movie1 = new Movie("The Avengers");
$movie1->setVote(7.7);
// var_dump($movie1);

$movie2 = new Movie("Avengers - Endgame");
$movie2->setVote(8.3);
// var_dump($movie2);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>MOVIES</h1>
        <div>
            <h3><?php  echo $movie1->title ?></h3>
            <small><?php  echo "Vote: ".$movie1->vote ?></small>
        </div>
        <div>
            <h3><?php  echo $movie2->title ?></h3>
            <small><?php  echo "Vote: ".$movie2->vote ?></small>
        </div>
    </body>
</html>