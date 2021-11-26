<?php
 
    //String
    $userName = "Lucas";
    $userSurname = "Ribeiro";

    echo "{$userName} {$userSurname}";

    //int
    $userAge = 20;

    //float
    $flot = 2.1;

    echo " {$userName} tem {$userAge} anos";

    $userEmail = "caetanolucasribeiro@gmail.com";

    //Variavél Variável -> Uma variável da variável
    $company = "Empresa";
    $$company = "São Camilo";

    echo " {$company} {$Empresa} ";

    //Referênciar a variável

    $calcA = 20;
    $calcB = 30;
    $calcB = &$calcA; //& É de referência, posso mudar o valor de qualquer um dos dois, que o valor permanece o mesmo para os dois
    $calcA = 50;

    var_dump($calcA, $calcB);

    //Array()
    $array = [
        "Lucas",
        "20"
    ];

    //Objeto
    //$object = new ObjectClass();
    $object->create();
