<?php

    echo "<pre>";

    $calcA = 5;
    $calcB = 10;

    $calc = [
        "a + b" => ($calcA + $calcB),  
        "a - b" => ($calcA - $calcB), 
        "a / b" => ($calcA / $calcB), 
        "a * b" => ($calcA * $calcB), 
        "a % b" => ($calcA % $calcB), //Resto da divisão

    ];

    var_dump($calc);

    echo "</pre>";