<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso em video PHP - Aula 10</title>
</head>
<body>
    <div>
    <?php
        $num = $_POST["valor1"];
        $op = $_POST["oper"];
        $resul; 
        switch ($op) {
            case 1 : 
                $resul = $num * 2;
                echo "Resultado: $resul";
                break;
            case 2 :
                $resul = pow($num,3);
                echo "Resultado: $resul";
                break; 
            case 3 :
                $resul = sqrt($num);    
                echo "Resultado: $resul";
                break;
            default :
                echo "ERRO!";       
        }        
    ?>
    <br>
    <a href="estrutura_switch.html" class = "botao">Voltar</a>
    </div>
</body>
</html>