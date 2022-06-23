<?php

/* Escrever um algoritmo para ler cinco valores inteiros, calcular a sua média,
e escrever na tela os números que são superiores à média.
*/

echo 'informe o primeiro : ';
$primeiro = readline();

echo 'informe o segundo: ';
$segundo = readline();

echo 'informe o terceiro: ';
$terceiro = readline();

echo 'informe o quarto : ';
$quarto = readline();

echo 'informe o quinto : ';
$quinto = readline();

$media = ($primeiro + $segundo + $terceiro + $quarto + $quinto)/ 5;

if($media < $primeiro)
{
    echo "$primeiro\n";
}
if($media < $segundo)
{
    echo "$segundo\n";
}
if($media < $terceiro)
{
    echo "$terceiro\n";
}
if($media < $quarto)
{
    echo "$quarto\n";
}
if($media < $quinto)
{
    echo "$quinto\n";
}

echo'são maiores que a média';


