<?php
//1 - Escreva um programa para imprimir os números inteiros entre 1 e 10 na mesma linha, primeiro em ordem crescente e depois em ordem decrescente.

for ($i=1; $i <= 10; $i++) { 
    echo " " . $i;
}
echo "\n";
for ($i=10; $i > 0; $i--) { 
    echo " " . $i;
}


// 02 - Escreva um programa que peça ao utilizador um nome e um número inteiro (entre 1 e 20). Deverá mostrar esse nome um número de vezes igual a esse valor inteiro.

echo "\n Digite um nome: ";

$nome = fgets(STDIN);

echo "Digite um valor inteiro de entre 1 e 20: ";

$numero = fgets(STDIN);

for($i = 1; $i <= $numero; $i++){
    echo $nome;
}

// 03 - Escreva um programa que leia n números (sendo n introduzido pelo utilizador) e indique se os números são todos iguais.

echo "\n Quantos números quer digitar? ";
$n = fgets(STDIN);
$numeros = [];

for($i = 1; $i <= $n ; $i++){
    echo "\n Digite um número {$i} : ";
    $nNumeros = fgets(STDIN);
    $numeros[] = $nNumeros;
}

if (count(array_unique($numeros)) == 1){
    echo "\n Todos os números são iguais.";
}else{
    echo "\n Os números são diferentes";
}



// 04 - 17 - Escreva um programa que calcule o factorial de um número.
echo "\nDigite um valor para realziar a factoração: ";
$nf = intval(fgets(STDIN));

for($i = $nf -1 ; $i > 0; $i--){
    $nf *= $i;
}

echo $nf;


//5 - Escreva um programa que some os algarismos de um número.
echo "\nInforme um numero: ";
$n = fgets(STDIN);
$soma = 0;
$i = 0;

for ($i=0; $i < strlen($n); $i++) { 
    $soma += intval($n[$i]);
}

// while ($n[$i] != NULL) {
//     $soma += intval($n[$i]);
//     $i++;
// }

echo "a soma dos algarismos de " . $n . "é: " . $soma;
