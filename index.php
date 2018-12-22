<?php
    echo '<br><br> #1 Character Classes <br> ';
    $text = '102x768.jpg';
    $text2 = 'p_bg_(1)-1024x768.jpg';

    if(preg_match('/.+-[0-9]+x[0-9]+.jpg/', $text2)){
        echo "Match found!";
    } else{
        echo "Match not found.";
    }

?>