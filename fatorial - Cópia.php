<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso em video - Fatorial</title>
</head>
<body>
    
    <?php
        $num = $_POST["valor1"];
        $cont = $num;
        $fat = 1;
        do{
            $fat = $fat * $cont;
            $num--;
        }while($cont >= 1);
        echo "<h2>O fatorial de $num é $cont";
    ?>

</body>
</html>