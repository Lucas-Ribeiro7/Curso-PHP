<!DOCTYPE html>
<html lang="ot-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso em Video - Funções</title>
</head>
<body>
    <h2>Se não entendeu, vá no código fonte</h2>
    <?php

        soma(3,4);

        function soma ($a,$b){
            $r = $a + $b;
            echo "<br>A soma é $r";
        }

        soma(8,4);
        $x = 4;
        $v = 2;
        soma($x,$v);
    ?>
</body>
</html>