<?php

    $is_mine = false;

    if($is_mine)
    {
        echo nl2br("This car is mine\n\n");
    }
    else
    {
        echo nl2br("This car is not mine\n\n");

    }


    for ($i=0; $i < 0; $i++) { 
        # code...
        if( ($i) % 2 == 0){
            echo nl2br("${i} is an even number\n\n");
        }else{
            echo nl2br("${i} is not an even number  ");
            echo nl2br("but ${i} is an odd number\n\n");
        }
    }


    // while(true){
    //     echo nl2br("THis code will run forever\n\n");
    // }


    $name = "Carrington7";
    echo var_dump($name);

    echo ("<br/>");
    echo ((int) $name);
    $num =  23_000;
    echo ("<br/>");

    echo nl2br($num);
    
    echo ("<br/>");
    echo nl2br(gettype($num));
    echo ("<br/>");
    echo (PHP_ROUND_HALF_DOWN);
    echo ("<br/>");
    echo (PHP_FLOAT_MAX);
    echo ("<br/>");

?>