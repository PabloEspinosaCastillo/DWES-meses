<?=
"Hola mundo ";

$nombre = "Pablo";

echo "Mi nombre es: $nombre";
?>


<?php

$meses = [
    'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo',
    'Junio', 'Julio', 'Agosto', 'Septiembre',
    'Ocutbre', 'Noviembre', 'Diciembre'
    ];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scalable">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<h1> Meses del año </h1>
<ul>
    <?php
        foreach ($meses as $mes){
            echo '<li>'.$mes.'</li>';
        }
    ?>
</ul>
</body>
</html>
