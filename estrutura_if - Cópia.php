<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso em Video - Aula 09</title>
</head>
<body>
    <div>
    <?php

         $nome = isset($_POST["nome"]) ? $_POST["nome"] : "Nome não informado.";
         $ano = isset($_POST["ano"]) ? $_POST["ano"] : "Nome não informado.";
         $idade = date("Y") - $ano;

         if( $idade>=18){
             $votar = true;
             $dirigir = true;
         }else{
             $votar = false;
             $dirigir = false;
         }

        if($votar==true && $dirigir==true){
            echo "Olá $nome de acordo com as informações dadas, você pode Dirigir e também pode votar.<br>Agradecemos a preferência.";
        }else{
            echo "Olá $nome de acordo com as informações dadas, você não pode Dirigir e também não pode votar.<br>Agradecemos a preferência.";
        }
    ?>
    </div>
</body>
</html>