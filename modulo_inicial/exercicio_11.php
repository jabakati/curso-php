<?php

/*Escrever um algoritmo para ler a quantidade de horas/aula de dois
professores e o valor por hora recebido por cada um. Mostrar na tela qual dos
professores tem salário total maior.*/ 


echo'informe a quantidade de horas do primeiro professor:';
$horasp1 = readline();

echo'informe a quantidade de horas do segundo professor:';
$horasp2 = readline();

echo'informe o valor da hora trabalhada do primeiro professor:';
$valorhorap1 = readline();

echo'informe o valor da hora trabalhada do segundo professor:';
$valorhorap2 = readline();

$saláriop1 = $horasp1 * $valorhorap1;
$saláriop2 = $horasp2 * $valorhorap2;

if($saláriop1 > $saláriop2)
{
    echo'o primeiro professor tem o maior salário';
}
else
{
    echo'o segundo professor tem o maior salário';
}