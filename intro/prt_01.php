<?php 
// 
    echo nl2br("Carrington Muleya\n");
    $name =  "Khuthadzo";
    $surname =  "My surname is ";

    echo nl2br("My gf is ${name}\n");
    echo nl2br("My gf is {$name}\n");
    echo nl2br("My goal is ${name}\n" . $surname . $name );


    echo nl2br("\nI really like " . $name  . "\n");
    echo nl2br("Insert a new line \rbefore here \n");

    echo PHP_VERSION;


    

?>