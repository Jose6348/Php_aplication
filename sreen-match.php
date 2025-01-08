<?php

echo "Bem vindo ao screen match! \n";

//Variáveis

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = $argv[1] ?? 2022; //Pega a variável do terminal se tiver e se não tiver puxa o 2022

//Tipos de somadores

$somaDeNotas = 9;
$somaDeNotas += 9;
$somaDeNotas += 9;
$somaDeNotas += 9;
$somaDeNotas += 9;

$notaFilme = $somaDeNotas / 5;

$planoPrime = true;


$incluidoNoPlano = $planoPrime || $anoLancamento < 2020 ;

//Concatenação de variáveis

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme \n";
echo "Ano de lançamento: $anoLancamento\n";