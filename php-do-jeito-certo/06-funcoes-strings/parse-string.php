<?php

    $pointEnd = "name=Lucas&email=lucas@gmail.com";

    mb_parse_str($pointEnd, $parsePointEnd); //Transforma a string em um array

    var_dump($parsePointEnd);