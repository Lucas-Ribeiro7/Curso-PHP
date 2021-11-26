<?php

    $profile = [
        "name" => "Lucas",
        "surname" => "Ribeiro",
        "year" => 20
    ];

    $template = <<<TPL
        <article>
            <h1>{{name}}</h1>
            <h2>{{surname}}</h2>
            <h3>{{year}}</h3>
        </article>
    TPL;

    echo str_replace(
        array_keys($profile),
        array_values($profile),
        $template
    );

    //Excluindo os '{}'
    $replaces = "{{". implode("}}&{{", array_keys($profile)). "}}"; 

    //explode("&", $replaces);

    echo str_replace(
        explode("&", $replaces),
        array_values($profile),
        $template
    );
