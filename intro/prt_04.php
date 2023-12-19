<?php

    $statement = "we are so good, how are you?";

    for($i=0; $i < 12; $i++){
        echo "<br/>";
        echo "{$statement[$i]}";
        echo "<br/>";
    }


    for($i=0; $i < 12; $i++){
        $statement[$i] = (string) $i*$i;
    }


    echo "<br/>";
    echo $statement;