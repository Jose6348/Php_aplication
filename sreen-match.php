<?php

echo "Bem vindo ao screen match! \n";

//Variáveis

$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Thor: Ragnarok";
$nomeFilme = "Se beber não case";

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

if ($anoLancamento > 2022) {
    echo "Esse filme é lançamento\n";
} else if ($anoLancamento > 2020 && $anoLancamento <= 2022) {
    echo "Esse filme ainda é novo\n";
} else {
    echo "Esse filme não é lançamento\n";
}

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "Heróis",
    "Se beber não case" => "Comédia",
    default => "Gênero desconhecido"
};

echo "O gênero do filme é: $genero";