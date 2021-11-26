<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso em Video - Rotinas / Procedimentos</title>
</head>
<body>

    <?php
        function teste ($x){
            $x += 2;
            echo "Esse é a função teste onde a variável X é $x";
        }
        $a = 2;
        teste($a); //Irá subistituir a variável $x que esá na função
        echo "<br>Apenas a variável a mesmo, que é $a"; //Irá aparecer 2
    ?>

    <br>
    <h2>Entenda a diferença no corpo do código</h2>
    <br>

    <?php
        function teste1 (&$y){
            $y += 2;
            echo "Esse é a função teste onde a variável X é $y";
        }
        $b = 6;
        teste1($b); //Irá subistituir a variável $x que esá na função
        echo "<br>Apenas a variável a mesmo, que é $b"; //Irá aparecer 2
    ?>
    
</body>
</html>