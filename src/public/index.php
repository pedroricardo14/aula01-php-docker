<?php
//declare(strict_types=1);

//phpinfo();


// O uso de duas barras e/ou de barra asterisco serve para comentar o código.



//echo 'oi';
/*
$contador = 1;
$mensagem = "Olá";
$versao = array('1.1','2','3.4');
//print_r($versao);

$primeiro_nome = "Maria";
echo $primeiro_nome;
//echo '<br />';
$ultimo_nome = "Lourdes";
//echo $ultimo_nome;

*/

/*
$time = array('Maria', 'José', 'Ana');

echo $time[2];

echo '<br />';

print_r($time);

*/

// Tanto o echo como o print_r serve para mostrar o valor das variáveis

/*

echo 'a: [' . TRUE. ']<br />';
echo 'a: [' . FALSE . ']<br />';

echo 'a: [' . (20 > 9) . ']<br />';
echo 'b: [' . (5 == 6) . ']<br />';
echo 'c: [' . (1 == 0) . ']<br />';
echo 'd: [' . (1 === '1') . ']<br />';

// Para checar se o valor é igual usa o ==, se quisr comparar tudo, até o tipo, usa ===
// O . antes e depois da variável é para concatenar com alguma coisa


$idade = 30;

echo 'e: [' . "$idade" . ']<br />';


// quando usa aspas simples o php já passa a variável direto, mas se usar aspas duplas, ai o PHP passa duas vezes sendo que a segunda é uma verificação da variável

*/

$saldo = 10;
if ($saldo<100){
    $deposito = 1000;
    $saldo += $deposito;
}
echo $saldo;


//comentário de commit(teste)

?>