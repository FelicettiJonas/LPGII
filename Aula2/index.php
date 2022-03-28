<!-- Utilize o conhecimento prático de PHP e do protocolo HTTP para criar uma calculadora que faça as quatro operações básicas (+, -, *, /).

Entrada: Dois números reais, e uma operação matemática;
Saída: O resultado da operação matemática.

O resultado deve ser impresso em outra página html. Descreva também a diferença ao utilizar o método GET e POST. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="result.php" method="get">
        <label for="n1">Primeiro algarismo</label>
        <input type="text" id="n1" name="n1">
        </br>
        <label for="sinal">Operação</label>
        <select name="sinal" id="sinal">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        </br>
        <label for="n2">Segundo Algarismo</label>
        <input type="text" id="n2" name="n2">
        </br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>