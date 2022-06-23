<?php

echo 'informe a nota do primeiro semestre: ';
$primeiro = readline();

echo 'informe a nota do segundo semestre: ';
$segundo = readline();

echo 'informe a nota do terceiro semestre: ';
$terceiro = readline();

echo 'informe a nota do quarto semestre: ';
$quarto = readline();

$mediafinal = ($primeiro + $segundo + $terceiro + $quarto) / 4;

if($mediafinal >= 7)
{
   echo 'o aluno foi aprovado';
}
else
{
    echo "informe a nota do exame:";
    $exame = readline();
    $finalreproved = ($exame + $mediafinal / 2 );
    if ($finalreproved >= 5)
    {
        echo 'o aluno foi aprovado';
    }
    else
    {
        echo "infelizmente o aluno foi reprovado com a média final = $finalreproved";
    }
}
