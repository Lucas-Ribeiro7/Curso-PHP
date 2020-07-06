<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso em video PHP - Aula 10 </title>
</head>
<body>  

    <?php
        $d = $_POST["dia"];

        switch ($d) {
            case 2:
            case 3:    
            case 4:
            case 5:
            case 6:
                echo "Acorde, Vá estudar!";
            break;
                
            case 1:
            case 7:
                echo "Hoje é dia de descansar!";   
            break;
            
            default : 
            echo "ERRO!";

        }
    ?>

</body>
<html>