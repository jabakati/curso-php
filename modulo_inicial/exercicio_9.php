<?php

/*Escrever um algoritmo para ler três valores inteiros e escrever na tela o
maior e o menor deles. Considere que todos os valores são diferentes.*/

echo'digite um número: ';
$n1 = readline();

echo'digite outro número: ';
$n2 = readline();

echo'digite outro número: ';
$n3 = readline();

$maior = $n1;
$menor = $n1;

if($n2 > $maior)
{
    $maior = $n2;
}
if($n3 > $maior)
{
    $maior = $n3;
}
if($menor > $n2)
{
    $menor = $n2;
}
if($menor > $n3)
{
    $menor = $n3;
}

echo
"o maior é $maior \n
o menor é $menor";

