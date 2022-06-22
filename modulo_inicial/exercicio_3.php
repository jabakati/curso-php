<?php

echo'digite seu nome:';
$nome = readline();

echo'informe seu sexo (masculino ou feminino):',
$sexo = readline();

if($sexo == 'masculino')
{
    echo"bem vindo Sr.$nome";
}
else
{
    echo"bem vindo Sra.$nome";
}