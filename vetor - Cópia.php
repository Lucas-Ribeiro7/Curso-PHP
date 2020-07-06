<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso em Video - Vetores e Matrizes</title>
</head>
<body>

    <?php
        $n = array (3,5,6,1);
        foreach ($n as $valor){
            echo "$valor ";
        }
        echo "<br>";
        echo "<br>";
        $v = array ("Nome" => "Lucas" , "Idade" => 19);
        foreach($v as $k => $c){
            echo "O campo $k tem o conteudo $c <br>";
        }
     ?>
     <pre>
     <?php   
       
        echo "<br>";
        echo "<br>";
        $m = array (array(3,5),array(9,5),array(8,4),array(5,8),array(6,8));
        print_r($m);
        
    ?>
    </pre>
</body>
</html>