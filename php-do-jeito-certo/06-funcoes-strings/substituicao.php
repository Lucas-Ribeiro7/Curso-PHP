<?php

    $string = "Deus é bom o tempo todo, e o tempo todo Deus é bom";

    echo mb_strlen($string); //Contagem dos caracteres
    echo "<br>";

    echo mb_strpos($string, "Deus"); //Função com objetivo de procurar a posição com o parametro passado. OBS: Pega apenas a primeira
    echo "<br>";

    echo mb_strrpos($string, "Deus"); //Função com objetivo de procurar a posição com o parametro passado. OBS:  Pega a proxima posição se houver repetição
    echo "<br>";

    echo mb_substr($string, 40 + 2 /**Apartir da posição 40, mais duas posições depois do quarenta */, 5 /** Apenas 5 caractere depois do 40 e os 2 depois */); 
    echo "<br>";

    echo mb_strstr($string, "tempo"); //Função que mostra tudo que vem depois do parametro
    echo "<br>";


    //Função para substiuição de palavras
    echo "<p>", $string, "</p>";
    echo "<br>";
    echo "<p>", str_replace("bom", "perfeito", $string), "</p>"; //Substituindo a palavra 'bom' para 'perfeito'
    echo "<p>", str_replace(["bom", "tempo"], ["perfeito", "TEMPO"], $string), "</p>"; //Substituindo as palavras bom e tempo por perfeito e TEMPO
    echo "<p>", str_replace(["bom", "tempo"], ["perfeito"], $string), "</p>"; //Substituindo as palavras bom e tempo por perfeito
    echo "<br>";

    