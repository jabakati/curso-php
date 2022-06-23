<?php

echo'digite sua altura:';
$altura = readline();

echo'informe seu sexo (masculino ou feminino):';
$sexo = readline();

$pesomasculino = 72.7 * $altura - 58;
$pesofeminino =  62.1 * $altura - 44.7;


if($sexo == 'masculino')
{
    echo $pesomasculino;
}
else
{
    echo $pesofeminino;
}