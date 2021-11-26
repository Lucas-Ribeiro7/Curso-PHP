<?php

    echo "<pre>";

    $relatedA = 5;
    $relatedB = "5";
    $relatedC = 10;

    $related = [
        "a == b" => ($relatedA == $relatedB), //Apenas os valor
        "a === b" => ($relatedA === $relatedB), //Valores e o tipo
        "a != b" => ($relatedA != $relatedB), //Diferente
        "a !== b" => ($relatedA == $relatedB), //Valores e o tipo (Diferente)
        "a !== c" => ($relatedA == $relatedC), 
        "a > c" => ($relatedA > $relatedC), 
        "a < c" => ($relatedA < $relatedC), 
        "a <= b" => ($relatedA < $relatedB),
    ];

    var_dump($related);

    echo "</pre>";