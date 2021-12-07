<?php

    echo "<pre>";

    require "classes/App/Template.php";
    require "classes/Web/Template.php";
    require "source/Qualifielt/User.php";


    use classes\App\Template;
    use classes\Web\Template as webTemplate;
    use source\Qualifielt\User;

    $appTemplate = new Template();
    $webTemplate = new Template();

    var_dump(
        $appTemplate,
        $webTemplate
    );

    $user = new User();
    $user->setFirstName("Lucas");
    $user->setLastName("Caetano");
    $user->setEmail("caetanolucasribeiro@gmail.com");

    echo "Seu nome é {$user->getFirstName()} {$user->getLastName()} e o seu email é: {$user->getEmail()}!";

