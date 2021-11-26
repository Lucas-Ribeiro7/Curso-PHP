<?php
    echo "<pre>";

    define("DATE_BR", "d/m/Y H:i:s");

    $dateNow = new DateTime();

    $dateStatic = DateTime::createFromFormat(DATE_BR, "29/04/2002 12:00:00"); //Formata a data da forma requerida no define

    //Objeto com objetivo de capturar um intervalo de tempo
    $dateInterval = new DateInterval("P10Y2MT10M"); 
    /**
     * P: Periodo -> equivale a ano e mes
     * T: Tempo -> equivale a hora, minuto e segundos
     * Y: Ano
     * M: Mês
     * M: Minutos
     * D: Dia
     * etc..
     */

     var_dump(
        $dateInterval
     );

     $dateTime = new DateTime("now");
     $dateTime->add($dateInterval); //Está adicionando a data atual um adiantamento de 10 anos, 2 meses e 10 minutos
     $dateTime->sub($dateInterval); //Subtrai o valor da dataInterval com o atual

     var_dump($dateTime); 


    $dateTheEndYear = new DateTime(date("Y") . "-12-31"); //Data do fim do ano
    $dateNow = new DateTime("now"); //Data atual

    $diff = $dateNow->diff($dateTheEndYear); //$diff está pegando a diferença da data atual com a data do fim do ano

    var_dump($dateTheEndYear, $diff);

    echo "<p>Estamos a {$diff->m} mes e {$diff->d} dias para o ano novo</p>";

    $dateResources = new DateTime("now");

    var_dump([
        $dateResources->format(DATE_BR),
        $dateResources->sub(DateInterval::createFromDateString("10days"))->format(DATE_BR), //Colocando 10 dias antes da atual
        $dateResources->add(DateInterval::createFromDateString("20days"))->format(DATE_BR) //Colocando 20 dias depois da atual
    ]);