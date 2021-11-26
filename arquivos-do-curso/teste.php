<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$a=10;
$b=2;
$j=$a/2;
for ($i=0;$i<$j;$i++){
    if ($i % $b == 1) 
	echo "$i";
}
?>
</body>
</html>
