<?php

    $string = "Deus é bom o tempo todo, e o tempo todo Deus é bom";

    //mb significa multibyte, funções que aceitam acentos, recomendavél usar o mb_

    echo $string;
    echo "<br>";

    echo strlen($string); //Função para realizar a contagem das caracteres da string. OBS: Caractere com acentos é contado como 2, porque o inglês não aceita os acentos, ou seja, É = 2
    echo "<br>";

    echo mb_strlen($string); //Função para realizar a contagem das caracteres da string. OBS: É contagem correta, pois ele pega a contagem da letra com o acento com um só, ou seja, É = 1
    echo "<br>";
    
    echo substr($string, 12, 20); //Função onde pode pegar uma parte do texto, no exemplo dado, ele pega do caractere 12 ao 20
    echo "<br>";

    echo mb_substr($string, 12, 21); //Função onde pode pegar uma parte do texto, no exemplo dado, ele pega do caractere 12 ao 21
    echo "<br>";

    echo strtoupper($string); //Função com objetivo de deixar o texto todo em CapsLoks. OBS: Os caracteres com acento não entram no CapsLk
    echo "<br>";

    echo mb_strtoupper($string); //Função com objetivo de deixar o texto todo em CapsLoks
    echo "<br>";

