<?php

/* Escreva um algoritmo que lê três valores para os lados de um triângulo. O
algoritmo deve verificar se o triângulo é equilátero (todos lados iguais),
isósceles (dois lados iguais) ou scaleno(todos lados diferentes).
*/


echo'valor do primeiro lado:';
$lado1 = readline();

echo'valor do segundo lado:';
$lado2 = readline();

echo'valor do terceiro lado:';
$lado3 = readline();

if(($lado1 == $lado2) and ($lado1 == $lado3))
{
    echo'o triâmgulo é equilátero';
}
if(($lado1 == $lado2) and ($lado1 != $lado3))
{
    echo'o triângulo é isóceles';
}
if(($lado1 != $lado2) and ($lado1 == $lado3))
{
    echo' o triângulo é isóceles';
}
if(($lado1 != $lado2) and ($lado2 == $lado3))
{
    echo'o triângulo é isóceles';
}
if(($lado != $lado2) and ($lado2 != $lado3) and ($lado1 != $lado3))
{
    echo'o triângulo é scaleno';
}