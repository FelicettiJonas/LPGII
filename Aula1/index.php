<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>

<body>
    <?php
    $desempenhoGasolina = 10;
    $desempenhoEtanol = 7.3;
    $valorGasolina = 4.64;
    $valorEtanol = 2.74;

    if ($desempenhoEtanol / $desempenhoGasolina >= $valorEtanol / $valorGasolina) {
        echo "Abasteça Etanol";
    }
    ?>
</body>

</html>