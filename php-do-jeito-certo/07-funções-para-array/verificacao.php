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
        array_keys($assoc), //Chaves da array
        array_values($assoc) //Valores de cada chave
    );
    echo "</pre>";

    if(in_array("Segundo", $index)){
        echo "Tem";
    }

    if(in_array("book_03", array_keys($assoc))){
        echo "<br>Tem também";
    }

    //Transformando um array em uma string
    echo "<h2>Transformando um array em uma string</h2>";
    $arrToString = implode(", ", $assoc);
    echo "<p>Eu gosto muitos dos livros: {$arrToString}.</p>";

    //Transformando um string em uma array
    echo "<h2>Transformando um string em uma array</h2>";
    var_dump(explode(", ", $arrToString));


