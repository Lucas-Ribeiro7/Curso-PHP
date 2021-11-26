<?php
    echo "<pre>";
    $arrProfile = [
        "name" => "Lucas",
        "surName" => "Ribeiro",
        "yearsOld" => 20
    ];

    $objProfile = (object)$arrProfile;
    var_dump($arrProfile, $objProfile);

    echo "<p>{$arrProfile['name']} tem {$arrProfile['yearsOld']} anos</p>";
    echo "<p>{$objProfile->name} tem {$objProfile->yearsOld} anos</p>";

    $ceo = $objProfile;
    unset($ceo->yearsOld); //Remove do objeto o atributo 'yearsOld'
    var_dump($ceo);

    $company = new StdClass(); //Intanciando uma nova Class
    $company->company = "Hospital";
    $company->ceo = $ceo; //Adicionando a um atributo uma outra classe
    $company->manager = new StdClass(); //Instanciando uma nova classe, dentro de uma classe
    $company->manager->name = "Ellen"; //Atribuindo atributos dentro dessa nova classe

    var_dump($company);

    
