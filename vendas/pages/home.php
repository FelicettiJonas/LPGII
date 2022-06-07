<?php 
    session_start();
    $linhas = file("../produtos.txt");

    $categorias = ['bebidas', 'calçado', 'mobilia', 'brinquedo', 'vestuario'];
    $arrayAll = [];
    $arrayKeys = [];
    $maisAcessado = '';
    $aux = 0;
    $cont = 0;

    foreach ($_COOKIE as $cookie => $valor){
        if (in_array($cookie, $categorias)) {
            $maisAcessado = ($valor > $cont) ? $cookie : $maisAcessado;
            $cont = ($valor > $cont) ? $valor : $cont;
        }
    };

    for ($i=0; $i < 10; $i++) {
        array_push($arrayAll, [
            'id'        => $linhas[$aux],
            'nome'      => $linhas[$aux + 1],
            'valor'     => $linhas[$aux + 2],
            'categoria' => $linhas[$aux + 3],
            'img'       => $linhas[$aux + 4]
        ]);
        $aux += 5;
    };
    $arrayKeys = array_rand($arrayAll, 4);
    $_SESSION['produtos'] = [
        $arrayAll[$arrayKeys[0]],
        $arrayAll[$arrayKeys[1]],
        $arrayAll[$arrayKeys[2]],
        $arrayAll[$arrayKeys[3]],
    ];

    $produtos = $_SESSION['produtos'];
?>
<?php $_SESSION['page-title'] = 'Página Inicial' ?>
<?php include '../_partials/header.php' ?>

<main>
        <div>
            <p>Promoção! Compre agora <span><?php echo $maisAcessado."s" ?></span> com 5% de desconto no Pix </p>
        </div>
        <?php foreach ($produtos as $key => $produto) { ?>
                <ul>
                    <li><?php echo $produto['id']; ?></li>
                    <li><?php echo $produto['nome']; ?></li>
                    <li><?php echo $produto['valor']; ?></li>
                    <li><?php echo $produto['categoria']; ?></li>
                    <img src=<?php echo $produto['img']?> alt="Foto do produto">
                    <li>
                        <a href="clicou.php?id=<?=$produto['id']?>">
                            <img src="../img/carrinhoIcon.png" height="20px">
                            Adicionar ao Carrinho
                        </a>
                    </li>
                </ul>
        <?php } ?>
</main>

<?php include '../_partials/footer.php' ?>