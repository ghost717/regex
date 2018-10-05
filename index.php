<?php
    echo '<br><br> #1 Character Classes <br> ';

    $pattern = "/ca[kf]e/";
    $text = "He was eating cake in the cafe.";

    if(preg_match($pattern, $text)){
        echo "Match found!";
    } else{
        echo "Match not found.";
    }

    echo '<br><br> #2 Character Classes <br>';
    $pattern = "/ca[kf]e/";
    $text = "He was eating cake in the cafe.";
    $matches = preg_match_all($pattern, $text, $array);
    echo $matches . " matches were found.";


    echo '<br><br> #3 Predefined Character Classes  <br>';
    $pattern = "/\s/";
    $replacement = "-";
    $text = "Earth revolves around\nthe\tSun";
    // Replace spaces, newlines and tabs
    echo preg_replace($pattern, $replacement, $text);
    echo "<br>";
    // Replace only spaces
    echo str_replace(" ", "-", $text);

    echo '<br><br> #4 Repetition Quantifiers <br>';

    $pattern = "/[\s,]+/";
    $text = "My favourite colors are red, green and blue";
    $parts = preg_split($pattern, $text);
    
    // Loop through parts array and display substrings
    foreach($parts as $part){
        echo $part . "<br>";
    }

    echo '<br><br> #5 Position Anchors <br>';

    $pattern = "/^J/";
    $names = array("Jhon Carter", "Clark Kent", "John Rambo");
    $matches = preg_grep($pattern, $names);
    
    // Loop through matches array and display matched names
    foreach($matches as $match){
        echo $match . "<br>";
    }

    echo '<br><br> #6 Pattern modifiers <br>';
    $pattern = "/color/i";
    $text = "Color red is more visible than color blue in daylight.";
    $matches = preg_match_all($pattern, $text, $array);
    echo $matches . " matches were found.";

?>