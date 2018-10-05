<?php
    $pattern = "/ca[kf]e/";
    $text = "He was eating cake in the cafe.";

    if(preg_match($pattern, $text)){
        echo "Match found!";
    } else{
        echo "Match not found.";
    }

    $pattern = "/ca[kf]e/";
    $text = "He was eating cake in the cafe.";
    $matches = preg_match_all($pattern, $text, $array);
    echo $matches . " matches were found.";
?>