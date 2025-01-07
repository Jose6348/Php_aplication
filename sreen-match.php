<?php

echo "Bem vindo ao screen match!
";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;

$somaDeNotas = 9;
$somaDeNotas += 9;
$somaDeNotas += 9;
$somaDeNotas += 9;
$somaDeNotas += 9;

$notaFilme = $somaDeNotas / 5;

$planoPrime = true;


$incluidoNoPlano = $planoPrime || $anoLancamento < 2020 ;


echo $notaFilme;



