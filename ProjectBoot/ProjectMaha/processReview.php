<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $movie_category = $_POST["category"];
    $movie_title = $_POST["title"];
    $movie_rating = $_POST["rating"];
    $movie_review = $_POST["review"];

    $fileCom = "crm/data/comedy.txt";
    $fileAct = "crm/data/action.txt";
    $fileRom = "crm/data/romance.txt";
    $fileHorr = "crm/data/horror.txt";

    if($movie_category == 'Action'){
        $current = file_get_contents($fileAct);
        $current .= "$movie_title;$movie_rating;$movie_review;";
        file_put_contents($fileAct, $current);
    }

    if($movie_category == 'Comedy'){
        $current = file_get_contents($fileCom);
        $current .= "$movie_title;$movie_rating;$movie_review;";
        file_put_contents($fileCom, $current);
    }

    if($movie_category == 'Horror'){
        $current = file_get_contents($fileHorr);
        $current .= "$movie_title;$movie_rating;$movie_review;";
        file_put_contents($fileHorr, $current);
    }

    if($movie_category == 'Romance'){
        $current = file_get_contents($fileRom);
        $current .= "$movie_title;$movie_rating;$movie_review;";
        file_put_contents($fileRom, $current);
    }
}

?>