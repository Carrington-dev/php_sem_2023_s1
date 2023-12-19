<?php

    $name = [];

    for ($i=0; $i < 4; $i++) { 
        # code...
        $name[] = $i;
    }
   

    array_push($name, "C++");
    array_push($name, "C#");
    array_push($name, "CPP");

    for ($i=0; $i < count($name); $i++) { 
        # code...
        // $name[] = $i;
        echo "<br/>";
        // echo "<br/>";
        echo $name[$i];
        echo "<br/>";
    }
    echo "<pre>";
    print_r( $name);
    echo "</pre>";

    