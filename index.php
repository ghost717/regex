<?php
    echo '<br><br> #1 Character Classes <br> ';


    if(preg_match($pattern, $text)){
        echo "Match found!";
    } else{
        echo "Match not found.";
    }

?>