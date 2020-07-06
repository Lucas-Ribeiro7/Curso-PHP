<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso em video - Vetores e Matrizes</title>
</head>
<body>
    <?php
        $nome = array ("L", "u", "c", "a", "s");
        $nome[] = "!";
        echo "O vetor tem " . count($nome) . " elementos<br>";
        print_r($nome);
        echo "<br>";
        var_dump($nome);
        echo "<br>";
        array_unshift($nome , "Nome = ");
        var_dump($nome);
        echo "<br>";
        $num = array (3,8,4,9,1);
        sort($num);
        var_dump($num);
    ?>
</body>
</html>