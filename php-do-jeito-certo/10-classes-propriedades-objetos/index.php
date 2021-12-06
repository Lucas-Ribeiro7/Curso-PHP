<?php

    echo "<pre>";

    require "User.php";

    $user = new User();

    $user->firstName = "Lucas";
    $user->lastName = "Caetano";
    $user->email = "lucas@gmail.com";

    var_dump(
        $user
    );

    echo "<p>O {$user->firstName} tem 20 anos.</p>";

    $user->setFirstName("Arthur");

    var_dump(
        $user
    );

    echo "<p>O {$user->firstName} tem 20 anos.</p>";


