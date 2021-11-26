<?php

    $index = [
        "Genesis",
        "Mateus",
        "Apocalipse"
    ];

    $assoc = [
        "book_01" => "Genesis",
        "book_02" => "Mateus",
        "book_03" => "Apocalipse"
    ];

    echo "<h2>Inicio do Array</h2>";

    echo "<pre>";
    var_dump(
        $index,
        $assoc
    );
    echo "</pre>";

   //Atribuindo valor na frente das demais valores do array
   echo "<h2>Atribuindo valor na frente das demais valores do array</h2>";

    array_unshift($index," ", "Lucas", "Joao"); 
    $assoc = ["book_5" => "Marcos"] + $assoc;

    echo "<pre>";
    var_dump(
        $index,     
        $assoc
    );
    echo "</pre>";

    //Atribuindo valor depois dos valores da array
    echo "<h2>Atribuindo valor depois dos valores da array</h2>";

    array_push($index, "Zacarias", "Isaias"); 
    $assoc = $assoc + [" " => " ", "book_6" => "Judas"];

    echo "<pre>";
    var_dump(
        $index,
        $assoc
    );  
    echo "</pre>";

    //Removendo o primeiro valor do array
    echo "<h2>Removendo o primeiro valor do array</h2>";

    array_shift($index);
    array_shift($assoc);

    echo "<pre>";
    var_dump(
        $index,
        $assoc
    );  
    echo "</pre>";

    //Removendo o último valor do array
    echo "<h2>Removendo o último valor do array</h2>";

    array_pop($index);
    array_pop($assoc);

    echo "<pre>";
    var_dump(
        $index,
        $assoc
    );  
    echo "</pre>";

    //Removendo o indice da array que não tem valor
    echo "<h2>Removendo o indice da array que não tem valor</h2>";

    $index = array_filter($index);
    $assoc = array_filter($assoc);

    echo "<pre>";
    var_dump(
        $index,
        $assoc
    );  
    echo "</pre>";

