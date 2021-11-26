<?php

    $string = "Deus é bom o tempo todo, e o tempo todo Deus é bom";

    echo strtoupper($string); //Função de CapsLoks ALTA
    echo "<br>";

    echo strtolower($string); //Função de CapsLoks BAIXA
    echo "<br>";

    echo mb_convert_case($string, MB_CASE_UPPER); //Função de CapsLoks ALTA
    echo "<br>";

    echo mb_convert_case($string, MB_CASE_LOWER); //Função de CapsLoks BAIXA
    echo "<br>";

    echo mb_convert_case($string, MB_CASE_TITLE); //Função para deixar a primeira letra de cada palavra em maíuscula 
    echo "<br>";
