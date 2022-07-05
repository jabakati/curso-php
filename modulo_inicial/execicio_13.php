<?php

/*  Escrever um algoritmo que leia valores inteiros em duas variáveis distintas.
• Se o resto da divisão da primeira pela segunda for 1 mostre a soma
dessas variáveis mais o resto da divisão;
• Se for 2 escreva se o primeiro e o segundo valor são pares ou ímpares;
• Se for igual a 3 multiplique a soma dos valores lidos pelo primeiro;
• Se for igual a 4 divida a soma dos números lidos pelo segundo, se este
for diferente de zero.
• Em qualquer outra situação mostre o quadrado dos números lidos.
*/

echo ' primeiro número: ';
$n1 = readline();

echo 'segundo número: ';
$n2 = readline();

if($n1 % $n2 == 1)
{
    echo $n1 + $n2;
}
if($n1 % $n2 == 2)
{
    if($n1 % 2 == 0)
    {
        echo 'o primeiro é par e';
    }
    if($n2 % 2 == 0)
    {
        echo 'o segundo é par';
    }
    if($n1 % 2 != 0)
    {
        echo 'o primeiro é impar';
    }
    if($n2 % 2 != 0)
    {
        echo 'o segundo é impar';
    }

}