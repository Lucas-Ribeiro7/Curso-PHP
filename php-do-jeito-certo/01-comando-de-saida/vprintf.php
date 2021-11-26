<?php
 
    $array = [
        "Nome" => "Lucas",
        "Curso" => "ADS",
        "Idade" => "20"
    ];

    $article = "Nome %s, Curso: %s, Idade: %s";

    vprintf($article, $array); //Mema coisa do printf, porém com array()

    /**
     * Para armazenar este vprint em uma variavel é preciso usar o s na frene
     */

    $article2 = vsprintf($article, $array);