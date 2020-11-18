<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $movie_category = $_POST["category"];
    $movie_title = $_POST["title"];
    $movie_rating = $_POST["rating"];
    $movie_review = $_POST["review"];

    $fileCom = "data/comedy.txt";
    $fileAct = "data/action.txt";
    $fileRom = "data/romance.txt";
    $fileHorr = "data/horror.txt";

    if($movie_category == 'Action'){
        $current = file_get_contents($fileAct);
        $current .= "$movie_title;$movie_rating;$movie_review;";
        file_put_contents($fileAct, $current);
    }

    if($movie_category == 'Comedy'){
        $current = file_get_contents($fileCom);
        $current .= "$movie_title;$movie_rating;$movie_review";
        file_put_contents($fileCom, $current);
    }
}

?>