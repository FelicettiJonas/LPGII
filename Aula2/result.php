<?php
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$sinal = $_GET['sinal'];
$resultado;

switch ($sinal) {
    case '+':
        $resultado = $n1 + $n2;
        break;

    case '-':
        $resultado = $n1 - $n2;
        break;

    case '*':
        $resultado = $n1 * $n2;
        break;

    case '/':
        $resultado = $n1 / $n2;
        break;

    default:
        break;
}
// echo var_dump($sinal);
// echo $resultado;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado: <?php echo $resultado ?></h1>
</body>
</html>