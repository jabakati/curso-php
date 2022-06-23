<?php

echo 'informe a nota do primeiro semestre: ';
$primeiro = readline();

echo 'informe a nota do segundo semestre: ';
$segundo = readline();

echo 'informe a nota do terceiro semestre: ';
$terceiro = readline();

echo 'informe a nota do quarto semestre: ';
$quarto = readline();

$mediafinal = ($primeiro + $segundo + $terceiro + $quarto) / 5;

if($mediafinal >= 5)
{
    echo "PARABÉNS \n 
    O ALUNO FOI APROVADO COM A NOTA FINAL = $mediafinal";
}
else
{
    echo "INFELIZMENTE O ALUNO NÃO FOI APROVADO \n
    COM A NOTA FINAL = $mediafinal";
}