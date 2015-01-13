<?php
$inputMovieList = $_GET['list'];
$minSeats = $_GET['minSeats'];
$maxSeats = $_GET['maxSeats'];
$filter = $_GET['filter'];
$order = $_GET['order'];

$inputMovies = preg_split("/[\n\r]+/", $inputMovieList, -1, PREG_SPLIT_NO_EMPTY);
class Movie {
    public $name;
    public $genre;
    public $stars;
    public $seats;
}

$movies = [];

foreach ($inputMovies as $inputMovie) {
    $reviewMovie = preg_split("/[\(\)\-\/]/", $inputMovie, -1, PREG_SPLIT_NO_EMPTY);
    $currentMovie = new Movie();
    $currentMovie->name = trim($reviewMovie[0]);
    $currentMovie->genre = trim($reviewMovie[1]);
    $starsArray = [];
    $stars = preg_split("/,/", $reviewMovie[2]);
    foreach ($stars as $star) {
        $starsArray[] = trim($star);
    }
    $currentMovie->stars = $starsArray;
    $currentMovie->seats = trim($reviewMovie[3]);
    $movies[] = $currentMovie;
}

$outputMovies = [];


foreach ($movies as $currentMovie) {
    if($currentMovie->seats >= $minSeats && $currentMovie->seats <= $maxSeats) {
        if($filter == "all") {
            $outputMovies[]= $currentMovie;
        } else {
            if($currentMovie->genre == $filter) {
                $outputMovies[]= $currentMovie;
            }
        }
    }
}

usort($outputMovies, function($movie1, $movie2) use ($order) {
    if($order == "ascending") {
        if($movie1->name == $movie2->name) {
            return $movie1->seats > $movie2->seats;
        }
        return $movie1->name > $movie2->name;
    } else {
        if($movie1->name == $movie2->name) {
            return $movie1->seats > $movie2->seats;
        }
        return $movie1->name < $movie2->name;
    }
});

if(!empty($outputMovies)) {
    foreach ($outputMovies as $outputMovie) {
        echo "<div class=\"screening\"><h2>".htmlspecialchars($outputMovie->name)."</h2><ul>";
        foreach ($outputMovie->stars as $star) {
            echo "<li class=\"star\">".htmlspecialchars($star)."</li>";
        }
        echo "</ul>";
        echo "<span class=\"seatsFilled\">".htmlspecialchars($outputMovie->seats)." seats filled</span>";
        echo "</div>";
    }
}