<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso em Video - WHILE</title>
</head>
<body>
    <div>
    <?php
        echo "Ordem crescente!<br>";
        $c = 0;
        while ($c <= 10){
            echo $c . "<br>";
            $c++;
        }
    ?>
    </div>
    <br>
    <div>
    <?php
        echo "Ordem decrescente!<br>";
        $n = 10;
        while ($n >= 1){
            echo $n . "<br>";
            $n--;
        }
    ?>
    </div>
    <br>
    <div>
    <?php
        echo "5 Valores para digitarem!<br>";
        $c = 1;
        while ($c <= 5){
            echo "<label>Valor $c</label>
            <input type='number' name='v$c' value='valor$c'>
            <br>";
            $c++;
        }
    ?>
    </div>
    
</body>
</html>