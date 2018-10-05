<?php
    echo '<br><br> #1 Character Classes';

    $pattern = "/ca[kf]e/";
    $text = "He was eating cake in the cafe.";

    if(preg_match($pattern, $text)){
        echo "<br>Match found!";
    } else{
        echo "<br> Match not found.";
    }

    echo '<br><br> #2 Character Classes';
    $pattern = "/ca[kf]e/";
    $text = "He was eating cake in the cafe.";
    $matches = preg_match_all($pattern, $text, $array);
    echo $matches . "<br> matches were found.";


    echo '<br><br> #3 Predefined Character Classes';
    $pattern = "/\s/";
    $replacement = "-";
    $text = "Earth revolves around\nthe\tSun";
    // Replace spaces, newlines and tabs
    echo "<br>";
    echo preg_replace($pattern, $replacement, $text);
    echo "<br>";
    // Replace only spaces
    echo str_replace(" ", "-", $text);

    echo '<br><br> #4 Repetition Quantifiers';

    $pattern = "/[\s,]+/";
    $text = "My favourite colors are red, green and blue";
    $parts = preg_split($pattern, $text);
    
    // Loop through parts array and display substrings
    echo "<br>";
    foreach($parts as $part){
        echo $part . "<br>";
    }

    echo '<br><br> #5 Position Anchors';

    $pattern = "/^J/";
    $names = array("Jhon Carter", "Clark Kent", "John Rambo");
    $matches = preg_grep($pattern, $names);
    
    // Loop through matches array and display matched names
    echo "<br>";
    foreach($matches as $match){
        echo $match . "<br>";
    }

?>