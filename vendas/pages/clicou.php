<?php
$linhas = file("../produtos.txt");
$id = $_GET['id'];
date_default_timezone_set('America/Sao_Paulo');
$arrayAll = [];

$aux = 0;
for ($i=0; $i < 10; $i++) {
    if ($linhas[$aux] == $id) {
        // echo $linhas[$aux + 3];
        $cookieName =trim($linhas[$aux + 3]);
        // echo $cookieName;
        if(!isset($_COOKIE[$cookieName])){
            // var_dump($cookieName);
            setcookie($cookieName, 1+1, time()+60*60*24);
            setcookie($cookieName."Time", date('d/m/Y H:i'), time()+60*60*24);
        }else {
            $acessos = $_COOKIE[$cookieName] + 1;
            setcookie($cookieName, $acessos, time()+60*60*24);
            setcookie($cookieName."Time", date('d/m/Y H:i'), time()+60*60*24);
        }
    }
    array_push($arrayAll, [
        'id'        => $linhas[$aux],
        'nome'      => $linhas[$aux + 1],
        'valor'     => $linhas[$aux + 2],
        'categoria' => $linhas[$aux + 3],
        'img'       => $linhas[$aux + 4]
    ]);
    $aux += 5;
};

header("Location: home.php");
exit;
?>