<?php

    $article = "%s  %s";
    $title = "Olá Jovem!";
    $subtitle = "Bora Progremar!!";

    printf($article, $title, $subtitle); //Função passa a variável $title e $subtitle na sequência dentro do $article


    /**
     * Para armazenar este vprint em uma variavel é preciso usar o s na frene
     */

     $article2 = sprintf($article, $title, $subtitle);
    