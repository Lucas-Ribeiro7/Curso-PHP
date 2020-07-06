<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso em Video - Estrutura FOR</title>
</head>
<body>
    <?php
        for($c=1;$c<=10;$c++){
            echo $c . "<br>";
        }
        echo "<br>";
        for($c=10;$c>=1;$c--){
            echo $c . "<br>";
        }
        echo "<br>";
        for($c=0;$c<=100;$c+=5){
            echo " $c ";
        }
    ?>
    
</body>
</html>