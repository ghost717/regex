<?php
    echo '<br><br> #1 Character Classes <br> ';
    $text = '102x768.jpg';
    $text2 = 'p_bg_(1)-1024x768.jpg';
    $text3 = 'XXXXR30P';

    if(preg_match('/.+-[0-9]+x[0-9]+.jpg/', $text2)){
        echo "Match found!";
    } else{
        echo "Match not found.";
    }

    echo '<br>'.$text3;

    if(preg_match('/.+XR[0-9]+P/', $text3)){
        echo "Match found!";
    } else{
        echo "Match not found.";
    }

?>