<?php

    echo "<pre>";

    define("DATE_BR", "d/m/Y H:i:s");

    $dateNow = new DateTime();

    $dateBirth = new DateTime("2001-05-04");

    $dateStatic = DateTime::createFromFormat(DATE_BR, "29/04/2002 12:00:00"); //Formata a data da forma requerida no define


    var_dump(
        $dateNow, //Pega a data atual
        $dateBirth,
        $dateStatic,
        $dateNow->format(DATE_BR), //Outra forma de formatar a data
        $dateNow->format("d"), //Puxa apenas o dia atual
        $dateNow->format("Y"), //Puxa apenas o ano atual
        $dateNow->format("m"), //Puxa apenas o mes atual
        $dateNow->format("H:i"), //Puxa a hora e os minutos atual
    );

    echo "<p>Nós estamos em {$dateNow->format('Y')}</p>";  

    $newTimeZone = new DateTimeZone("Pacific/Apia"); //Puxando a data pelo o pais e por zona
    $newDateTime = new DateTime("now", $newTimeZone);

    var_dump(
        $newTimeZone,
        $newDateTime
    );