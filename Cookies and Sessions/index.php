<?php
session_start();

if (!empty($_SESSION)) {
    header('Location: inicial.php');
    exit;
}
if (!empty($_POST)) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    if ($usuario == 'teste' && $senha == '1234') {
        setcookie('usuario', $usuario, 0);
        $_SESSION['usuario'] = $usuario;
        $_SESSION['id'] = 46;
        header('Location: inicial.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies and Sessions</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="." method="POST">
        <div class="linha">
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" id="usuario" value="<?php echo isset($_COOKIE['usuario']) ? $_COOKIE['usuario'] : ""; ?>">
        </div>
        <div class="linha">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha">
        </div>
        <input type="submit" value="Acessar!" class="button">
    </form>
</body>
</html>