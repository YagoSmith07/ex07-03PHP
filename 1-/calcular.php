<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular</title>
</head>
<body>
<?php

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

        if ($num1 > $num2)
    {
        echo "o maior número é ".$num1."</br>";
    }
        else
    {
        echo "o maior número é ".$num2."</br>";
    }


?>
</body>
</html>