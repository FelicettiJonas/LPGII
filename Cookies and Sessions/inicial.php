<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="inicial">
        <h1>Bem Vindo <?php echo $_COOKIE['usuario']?></h1>
        <p>Seu ID é <?php echo $_SESSION['id'] ?></p>

        <a href="logOut.php">Log Out</a>
    </div>
</body>
</html>