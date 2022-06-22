<?php

echo 'informe um número: ';

$n1 = readline();

if($n1 >= 1 and $n1 <=9)
{
    echo 'o numero está dentro do limite';
}
else
{
    echo 'o número não está dentro do limite';
}