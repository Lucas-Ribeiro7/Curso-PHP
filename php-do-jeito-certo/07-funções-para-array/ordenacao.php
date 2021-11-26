<?php
    
    $index = [
        "Primiero",
        "Segundo",
        "Terceiro",
        "Als"
    ];

    $assoc = [
        "book_01" => "Primeiro",
        "book_02" => "Segundo",
        "book_03" => "Terceiro",
        "book_4" => "Adao"
    ];

    echo "<h2>Inicio do Array</h2>";

    echo "<pre>";
    var_dump(
        $index,
        $assoc
    );
    echo "</pre>";

    //Ordem reversa, coloca o array ao contrário
    echo "<h2>Ordem reversa, coloca o array ao contrário</h2>";

    $index = array_reverse($index);
    $assoc = array_reverse($assoc);

    echo "<pre>";
    var_dump(
        $index,     
        $assoc
    );
    echo "</pre>";

    //Ordena o array em ordem alfabetica    
    echo "<h2>Ordena o array em ordem alfabetica</h2>";

    asort($index);
    asort($assoc);

    echo "<pre>";
    var_dump(
        $index,     
        $assoc
    );
    echo "</pre>";

    //Ordena os indice do array em ordem crescente e descresente sem alterar nos valores
    echo "<h2>Ordena os indice do array em ordem crescente e descresente sem alterar nos valores</h2>";

    ksort($index); //Crescente
    krsort($assoc); //Descrescente

    echo "<pre>";
    var_dump(
        $index,     
        $assoc
    );
    echo "</pre>";

    //Ordena os indice do array em ordem crescente e descresente. Os valores permanecem, só muda os indices
    echo "<h2>Ordena os indice do array em ordem crescente e descresente</h2>";

    sort($index); //Crescente
    rsort($assoc); //Descrescente

    echo "<pre>";
    var_dump(
        $index,     
        $assoc
    );
    echo "</pre>";

