<?php

/* Fazer um algoritmo em pseudocodigo para ler o ano de nascimento de uma
pessoa, calcular e mostrar sua idade e, também, verificar e mostrar se ela já
tem idade para votar (16 anos ou mais)e para conseguir a Carteira de Habilitação
(18 anos ou mais).
*/

echo'informe seu ano de nascimento:';
$ano = readline();
$idade = 2022 - $ano;

if($idade >= 18)
{
    echo'pode votar e dirigir';
}
else
{
    if($idade >= 16)
    {
        echo'pode votar mas não pode dirigir';
    }
    else
    {
        echo'não pode votar e dirigir';
    }
}