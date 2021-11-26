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
        

        function soma (){
            $p = func_get_args();
            $tot = func_num_args();
            $s=0;
            for($n=0;$n<=$tot;$n++){
                $s += $p[$n];
            }
            return $s;
        }
        
        $res = soma(1,2,6,9,5, 1);
        echo "A soma dos valores é $res"
    ?>
</body>
</html>