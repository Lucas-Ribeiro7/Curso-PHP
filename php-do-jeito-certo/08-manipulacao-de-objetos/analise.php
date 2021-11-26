<?php

echo "<pre>";
$arrProfile = [
    "name" => "Lucas",
    "surName" => "Ribeiro",
    "yearsOld" => 20
];

$objProfile = (object)$arrProfile;

$ceo = $objProfile;
unset($ceo->yearsOld); //Remove do objeto o atributo 'yearsOld'

$company = new StdClass(); //Intanciando uma nova Class
$company->company = "Hospital";
$company->ceo = $ceo; //Adicionando a um atributo uma outra classe
$company->manager = new StdClass(); //Instanciando uma nova classe, dentro de uma classe
$company->manager->name = "Ellen"; //Atribuindo atributos dentro dessa nova classe


var_dump([
    "class" => get_class($company), //Descobre de qual class o objeto vem, no exemplo: o objeto 'company' vem da classe StdClass
    "mathods" => get_class_methods($company), //Mostram os métodos da classe
    "vars" => get_object_vars($company), //Mostra os atributos da classe
    //"parent" => get_parent_class($date) //Mostram os parametro das classes anteriores
    //"subclass" => is_subclass_of($date, "DateTime") //Verifica se existe subclasses
]);

$expetion = new PDOException();