<?php

    echo "<pre>";
    $operatorA = 5;
    print "Inicia com a = {$operatorA} <br>";

    $operators = [
        "a += 5" => ($operatorA += 5),
        "a -= 5" => ($operatorA -= 5),
        "a *= 5" => ($operatorA *= 5),
        "a /= 5" => ($operatorA /= 5),
    ];

    var_dump($operators);

    echo "</pre>";

    echo "<pre>";
    $incrementA = 5;
    $incrementB = 10;

    $increment1 = [
        "Pós-Increment" => ($incrementA++),
        "Resultado-Increment" => ($incrementA),
        "Pré-Increment" => (++$incrementA),
    ];

    $increment2 = [
        "Pós-Decrement" => ($incrementB--),
        "Resultado-Decrement" => ($incrementB),
        "Pré-Decrement" => (--$incrementB),
    ];


    var_dump($increment1);
    var_dump($increment2);

    echo "</pre>";