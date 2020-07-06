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
        function soma ($a,$b){
            $r = $a + $b;
            return $r;
        }

        $x = 4;
        $v = 2;
        $s = soma($x,$v);
        echo "A soma de $x e $v é $s";
    ?>
</body>
</html>