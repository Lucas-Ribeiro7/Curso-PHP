<?php

    echo "<pre>";

    $logicA = true;
    $logicB = false;

    $logic = [
        "a && b" => ($logicA && $logicB), //Os dois existe  
        "a || b" => ($logicA || $logicB), //Se pelo menos um dos dois existe
        "a" => ($logicA), //Se existe a
        "!a" => (!$logicA), //Se não existe a
        "b" => ($logicA), //Se existe b
        "!b" => (!$logicB), //Se não existe b

    ];

    var_dump($logic);

    echo "</pre>";

